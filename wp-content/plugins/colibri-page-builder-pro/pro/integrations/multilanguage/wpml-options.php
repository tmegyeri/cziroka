<?php

namespace ExtendBuilder;

//icl_translation_of

add_filter('cloudpress\customizer\global_data', function ($data) {
    if (colibri_wpml_is_active()) {

        $lang = colibri_get_current_language();
        if ($lang && !colibri_is_default_language($lang)) {
            global $sitepress;
            $home = $sitepress->convert_url($sitepress->get_wp_api()->get_home_url(), $lang);
            $data['homeUrl'] = $home;
            $data['canSetPrimaryLocation'] = true;


            $theme_locations = get_nav_menu_locations();
            if (isset($theme_locations['primary'])) {
                global $wpml_term_translations;
                $translated_menu_id = $wpml_term_translations->term_id_in($theme_locations['primary'], $lang);
                if (!$translated_menu_id) {
                    $data['primaryLocationDefaultLanguageMenu'] = $theme_locations['primary'];
                    $data['canSetPrimaryLocation'] = true;
                }
            }
        }
    }
    return $data;
});

add_filter("wpml_current_language", function ($lang) {
    global $sitepress, $pagenow;
    if (is_admin() && 'customize.php' === $pagenow) {
        $preview_url = isset($_GET['url']) ? sanitize_text_field(wp_unslash($_GET['url'])) : site_url();
        if ($preview_url) {
            $lang = $sitepress->get_language_from_url($preview_url);
        }
    }


    if (is_admin() && 'admin-ajax.php' === $pagenow) {
        $page_id = isset($_POST['customize_post_id']) ? intval($_POST['customize_post_id']) : -1;
        if ($page_id != -1) {
            $info = apply_filters('wpml_post_language_details', null, $page_id);
            return $info['language_code'];
        }
    }

    return $lang;
}, 9999);


add_filter("colibri_get_default_language", function ($lang) {
    $lang = apply_filters('wpml_default_language', null);
    return $lang;
});

add_filter("colibri_get_post_language", function ($lang, $post_id) {
    if ($post_id) {
        $get_language_args = array('element_id' => $post_id, 'element_type' => 'post');
        $info = apply_filters('wpml_element_language_details', null, $get_language_args);
        return $info->language_code;
    }
}, 0, 2);


add_filter("colibri_get_current_language", function ($lang) {
    $lang = apply_filters('wpml_current_language', null);
    return $lang;
});


add_filter('wpml_duplicate_generic_string', function ($value_to_filter, $target_language, $meta_data) {
    $context = $meta_data['context'];
    if ($value_to_filter !== '' && $context) {
        $prefix = '';

        $attribute = $meta_data['attribute'];
        if ($context == 'custom_field' && $attribute == 'value') {
            $is_serialized = $meta_data['is_serialized'];

            if ($is_serialized) {
                $value = unserialize($value_to_filter);

                $post_data = new PostData($meta_data['master_post_id']);
                $new_post_data = new PostData($meta_data['post_id']);

                if (isset($value['json'])) {
                    $new_json_post = $new_post_data->create_data("json", $post_data->get_data("json"), true);
                    $value['json_from'] = $value['json'];
                    $value['json'] = $new_json_post->ID;
                    return $value;
                }
            }
        }
    }

    return $value_to_filter;
}, 10, 3);


colibri_set_cookie_language();

add_action('init', function () {
    colibri_set_cookie_language();
});


/*
    reset cookie language when opening a page in customizer
    the internal wpml language function has no filter and defaults to cookie language
*/

function colibri_set_cookie_language()
{
    global $pagenow;
    if ('customize.php' === $pagenow) {
        global $wpml_request_handler;
        if ($wpml_request_handler) {
            $wpml_request_handler->set_language_cookie(colibri_get_current_language());
        }
    }
}


function colibri_filter_nav_menu_locations($theme_locations)
{

    global $wpml_term_translations;

    if (is_admin() && (bool)$theme_locations === true) {
        $current_lang = colibri_get_current_language();

        foreach ((array)$theme_locations as $location => $menu_id) {
            $translated_menu_id = $wpml_term_translations->term_id_in($menu_id, $current_lang);
            if ($translated_menu_id) {
                $theme_locations[$location] = $translated_menu_id;
            }
        }
    }

    return $theme_locations;
}


global $colibri_menu_locations;
add_filter('theme_mod_nav_menu_locations', function ($theme_locations) {
    global $pagenow;
    if (is_admin() && isset($pagenow) && $pagenow === 'customize.php') {
        global $colibri_menu_locations;
        $colibri_menu_locations = $theme_locations;
    }
    return $theme_locations;
}, -99999999);


add_filter('theme_mod_nav_menu_locations', function ($theme_locations) {
    global $pagenow;
    if (is_admin() && isset($pagenow) && $pagenow === 'customize.php') {
        global $colibri_menu_locations;
        $colibri_menu_locations = colibri_filter_nav_menu_locations($colibri_menu_locations);
        return $colibri_menu_locations;
    }
    return $theme_locations;
}, 99999999);


global $colibri_menus;
add_filter('wp_get_nav_menus', function ($menus) {
    global $pagenow;
    if (is_admin() && isset($pagenow) && $pagenow === 'customize.php') {
        global $colibri_menus;
        $colibri_menus = $menus;
    }
    return $menus;
}, -99999999);


add_filter('wp_get_nav_menus', function ($menus) {
    global $pagenow;
    if (is_admin() && isset($pagenow) && $pagenow === 'customize.php') {
        global $colibri_menus;
        $colibri_menus = colibri_filter_language_menus($colibri_menus);
        return $colibri_menus;
    }
    return $menus;
}, 99999999);


function colibri_filter_language_menus($menus)
{
    global $sitepress, $wpml_term_translations;
    $current_language = colibri_get_current_language();

    foreach ($menus as $index => $menu) {
        $menu_ttid = is_object($menu) ? $menu->term_taxonomy_id : $menu;
        $menu_language = $wpml_term_translations->get_element_lang_code($menu_ttid);
        if ($menu_language != $current_language && $menu_language != null) {
            unset($menus[$index]);
        }
    }

    return $menus;
}


add_action('admin_footer', function () {
    global $current_screen;

    if (strpos($current_screen->base, 'wpml-string-translation') === 0) {
?>
        <script>
            (function($) {
                $('option[value="admin_texts_theme_mods_colibri-pro"]').text("<?php _e('colibri Theme Texts', 'colibri-page-builder'); //phpcs:ignore WordPress.Security.EscapeOutput.UnsafePrintingFunction ?>");
            })(jQuery);
        </script>
    <?php
    }
});


function colibri_get_wpml_switcher($args = array(), $ulClass = "")
{


    $args = array_merge((array)$args, array());
    $ulClasses = [$ulClass];

    $languages = icl_get_languages();
    $result = "";


    foreach ($languages as $language) {
        $class = 'lang-item';
        if ($language['active'] == 1) {
            $class = "{$class} current-lang";
        }


        $result .= sprintf(
            '<li class="%1$s"><a lang="%2$s" hreflang="%2$s" href="%3$s">%4$s%5$s</a></li>',
            $class,
            $language['native_name'],
            $language['url'],
            sprintf('<img src="%1$s"" title="%2$s" />', $language['country_flag_url'], $language['native_name']),
            sprintf('<span style="margin-left:0.3em;">%1$s</span>', $language['native_name'])
        );
    }
    if (\is_customize_preview() &&  !is_customize_changeset_preview()) {
        $ulClasses[] = ' colibri-language-switcher--disabled';
        $showSwitch = get_theme_data('global.multilanguage.props.enabled');
        if (!$showSwitch) {
            $ulClasses[] = 'colibri-language-switcher--hidden';
        }
    }

    $ulClass = implode(' ', $ulClasses);
    $result = "<ul class='colibri-language-switcher  colibri-language-switcher__flags {$ulClass}'>$result</ul>";

    //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    return $result;
}


add_action('wp_footer', function () {
    $show_switcher = get_theme_data('global.multilanguage.props.enabled');

    if (!$show_switcher && !\is_customize_preview()) {
        return;
    }


    $position = 'after';
    $content = "";


    if (function_exists('icl_get_languages')) {
        $content = colibri_get_wpml_switcher(array(), "{$position}-menu");
    }

    echo $content;
}, 10, 2);

function colibri_wpml_override_copy_content_function()
{
    function get_colibri_wpml_source_language()
    {
        global $sitepress;
        $source_lang = filter_var(isset($_GET['source_lang']) ? $_GET['source_lang'] : '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $source_lang = 'all' === $source_lang ? colibri_get_current_language() : $source_lang;

        $lang        = filter_var(isset($_GET['lang']) ? $_GET['lang'] : '', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $post_translation = $sitepress->post_translations();
        $post = null;
        if (isset($_GET['post'])) {
            $post_id = filter_var($_GET['post'], FILTER_SANITIZE_NUMBER_INT);
            $post = get_post($post_id);
        }
        $source_lang = !$source_lang && isset($_GET['post']) && $post && $lang !== colibri_get_current_language()
            ? $post_translation->get_source_lang_code($post->ID) : $source_lang;

        $_lang_details    = $sitepress->get_language_details($source_lang);
        $source_lang_name = $_lang_details['display_name'];
        return $source_lang_name;
    }
    function get_colibri_wpml_copy_content_script()
    {
        $source_lang_name = get_colibri_wpml_source_language();
        ob_start();
    ?>
        <script>
            function colibri_overwrite_with_english_content() {
                var input = document.getElementById('icl_set_duplicate');
                if (input) {
                    input.value =
                        "<?php echo sprintf(esc_html__('Copy content from %s', 'colibri'), $source_lang_name); ?>"
                }
            }

            wp.domReady(function() {
                colibri_overwrite_with_english_content();
            })
        </script>
    <?php
        $script = ob_get_clean();
        $script = str_replace("<script>", "", $script);
        $script = str_replace("</script>", "", $script);
        return $script;
    }

    function get_colibri_wpml_copy_content_style()
    {
        ob_start();
    ?>
        <style>
            #icl_cfo {
                display: none !important;
            }

            #icl_cfo+.otgs-ico-help {
                display: none !important;
            }

            #icl_set_duplicate~.otgs-ico-help {
                display: none !important;
            }
        </style>
<?php
        $style = ob_get_clean();
        $style = str_replace("<style>", "", $style);
        $style = str_replace("</style>", "", $style);
        return $style;
    }


    $script = get_colibri_wpml_copy_content_script();
    wp_add_inline_script('wp-edit-post', $script);
    $style = get_colibri_wpml_copy_content_style();
    wp_add_inline_style('wp-admin', $style);
}

add_action('admin_enqueue_scripts', '\ExtendBuilder\colibri_wpml_override_copy_content_function');
