<?php

namespace ExtendBuilder;

//polylang
add_action('plugins_loaded', function () {
    add_filter('colibri_page_builder/customizer/preview_data', function ($value) {
        $current_page_has_default_language = true;
        if (colibri_polylang_is_active()) {
            global $post;
            $is_home = is_home();
            if ($is_home) {
                $page_id = get_option('page_on_front');
            } else {
                if ($post) {
                    $page_id = $post->ID;
                }
            }
            $current_page_has_default_language = !!pll_get_post($page_id);
        }

        $set_content_to_default_language_link =
            wp_specialchars_decode(wp_nonce_url(
                network_admin_url('plugins.php') .
                    '?page=mlang&pll_action=content-default-lang&noheader=true',
                'content-default-lang'
            ));
        $value['polylang']                    = array(
            'set_content_to_default_language_link' => $set_content_to_default_language_link,
            'current_page_has_default_language'    => $current_page_has_default_language
        );

        return $value;
    });
});


add_filter('cloudpress\customizer\global_data', function ($data) {
    if (colibri_polylang_is_active()) {
        $lang = colibri_get_current_language();
        if ($lang && !colibri_is_default_language($lang)) {
            global $polylang;

            $data['primaryMenuLocation'] = "primary___" . $lang;
            $data['homeUrl'] = $polylang->links_model->home_url(PLL()->model->get_language($lang));
        }
    }
    return $data;
});


add_filter("colibri_get_default_language", function ($lang) {
    return pll_default_language();
});

add_filter("colibri_get_post_language", function ($lang, $post_id) {
    return pll_get_post_language($post_id, "slug");
}, 0, 2);

add_filter("colibri_get_current_language", function ($lang) {

    global $pagenow;
    if (is_admin() && 'customize.php' === $pagenow) {

        $preview_url = isset($_GET['url']) ? sanitize_text_field(wp_unslash($_GET['url'])) : site_url();

        global $polylang;
        if ($polylang && method_exists($polylang->links_model, 'get_language_from_url')) {
            return $polylang->links_model->get_language_from_url($preview_url);
        }
    }

    if ('admin-ajax.php' === $pagenow) {
        $page_id = isset($_POST['customize_post_id']) ? intval($_POST['customize_post_id']) : -1;
        if ($page_id != -1) {
            return pll_get_post_language($page_id, "slug");
        }
    }

    return pll_current_language();
});

function colibri_get_pll_frontend_switcher($args = array(), $ulClass = "")
{
    $type = get_theme_data('global.multilanguage.props.type');
    $ulClasses = [$ulClass];
    $showSwitch = get_theme_data('global.multilanguage.props.enabled');
    $args = array_merge((array)$args, array(
        "echo" => 0,
    ));
    $getFlagsSwitch = function ($args, $ulClass) {
        $args['dropdown'] = 0;
        $args['show_flags'] = 1;
        $args['show_names'] = 1;
        $default_menu = pll_the_languages($args);
        return "<ul class='colibri-language-switcher colibri-language-switcher__flags {$ulClass}'>$default_menu</ul>";
    };
    $getDropdownSwitch = function ($args, $ulClass) {
        $args['dropdown'] = 1;
        $args['show_flags'] = 0;
        $args['show_names'] = 0;

        $default_menu = pll_the_languages($args);
        return "<div class='colibri-language-switcher colibri-language-switcher__dropdown {$ulClass}'>{$default_menu}</div>";
    };
    if (\is_customize_preview() &&  !is_customize_changeset_preview()) {
        $ulClasses[] = 'colibri-language-switcher--disabled';

        if (!$showSwitch) {
            $ulClasses[] = 'colibri-language-switcher--hidden';
        }
        $dropdownClasses = $ulClasses;
        $flagClasses = $ulClasses;
        if ($type === 'flags') {
            $dropdownClasses[] = 'colibri-language-switcher--hidden';
        } else {
            $flagClasses[] = 'colibri-language-switcher--hidden';
        }

        $result = $getFlagsSwitch($args, implode(' ', $flagClasses));
        $result .= $getDropdownSwitch($args, implode(' ', $dropdownClasses));
    } else {
        if ($type === 'flags') {
            $result = $getFlagsSwitch($args, implode(' ', $ulClasses));
        } else {
            $result = $getDropdownSwitch($args, implode(' ', $ulClasses));
        }
    }
    return $result;
}


// polylang switcher near menu
add_action('wp_footer', function () {
    $show_switcher = get_theme_data('global.multilanguage.props.enabled');

    if (!$show_switcher && !\is_customize_preview()) {
        return;
    }
    $content = "";
    $position = 'after';

    if (function_exists('pll_the_languages')) {
        $content = colibri_get_pll_frontend_switcher(array(), "{$position}-menu");
    }
    //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    echo $content;
}, 10, 2);




add_action('pll_before_post_translations', '\ExtendBuilder\colibri_multilanguage_copy_from_source');

function colibri_multilanguage_copy_from_source()
{

    global $post;

    $sourceID = isset($_REQUEST['from_post']) ? absint($_REQUEST['from_post']) : null;
    $slug = pll_default_language('slug');
    $defaultID = pll_get_post($post->ID, $slug);
    $defaultID = $defaultID ? $defaultID : $sourceID;

    if ($post->ID == $defaultID) {
        return;
    }
    $post_data = new PostData($defaultID);
    if (!$post_data->get_data("json")) {
        return;
    }
?>
    <script>
        function colibri_multilanguage_copy_from_source() {
            var data = {
                action: 'colibri_copy_from_source',
                source_post: <?php echo wp_json_encode($defaultID); ?>,
                destination_post: <?php echo wp_json_encode($post->ID); ?>,
                nonce: '<?php echo wp_create_nonce('ajax-nonce')//phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>'
            };

            var response = confirm("<?php _e('Current content will be replaced with the content from the primary language. Are you sure ?', 'mesmerize-companion') //phpcs:ignore WordPress.Security.EscapeOutput.UnsafePrintingFunction ?>");
            if (response) {
                jQuery.post(ajaxurl, data).done(function(response) {
                    setTimeout(function() {
                        window.location.reload();
                    }, 500);
                });
            }
        }
    </script>
    <a href="#" onclick="colibri_multilanguage_copy_from_source()" class="button" style="margin-top: 20px">
        <span class="dashicons dashicons-admin-page" style="padding-top:4px;"></span><?php _e('Copy from primary language', 'mesmerize-pro') //phpcs:ignore WordPress.Security.EscapeOutput.UnsafePrintingFunction ?></a>
    <?php
}

add_action('wp_ajax_colibri_copy_from_source', function ($data) {

    $nonce = sanitize_text_field($_POST['nonce']);

    if (!wp_verify_nonce($nonce, 'ajax-nonce'))
        die();

    $source_post_id = isset($_REQUEST['source_post']) ? absint($_REQUEST['source_post']) : null;
    $destination_post_id = isset($_REQUEST['destination_post']) ? absint($_REQUEST['destination_post']) : null;

    if ($source_post_id) {
        $post_data = new PostData($source_post_id);
        $new_post_data = new PostData($destination_post_id);
        if ($post_data->get_data("json")) {
            $new_post_data->set_data("json", $post_data->get_data("json"), !$new_post_data->get_data('json'));

            $save_post_data = array('ID' => $destination_post_id);
            $save_post_data['post_content'] = $post_data->get_post_content();
            wp_update_post($save_post_data);
            maybe_update_page_template(get_post($destination_post_id));
        }
    }
    exit;
});
add_filter('pll_translate_post_meta', function ($value, $key, $lang, $from, $to) {
    if ($key == "extend_builder") {
        $post_data = new PostData($from);
        $new_post_data = new PostData($to);
        $old_post = $post_data->get_post();
        $new_post = get_post($to);
        $new_post->post_content = $old_post->post_content;
        wp_update_post(wp_slash(array(
            //            'post_status' => 'publish',
            'post_content' => $old_post->post_content,
            'ID' => $new_post->ID,
        )));


        if (isset($value['json'])) {
            $new_json_post = $new_post_data->create_data("json", $post_data->get_data("json"), true);
            $value['json_from'] = $value['json'];
            $value['json'] = $new_json_post->ID;
        }
        $content = wp_json_encode($new_post->post_content);
        ob_start();
        ?>
        <script>
            function colibriMultipleLanguageInitialPage() {
                var content = <?php echo $content; ?>;
                if (wp.data.dispatch('core/editor') && wp.data.dispatch('core/editor').hasOwnProperty(
                        "resetBlocks")) {
                    wp.data.dispatch('core/editor').resetBlocks(wp.blocks.parse(content));
                }
            }

            wp.domReady(function() {
                setTimeout(function() {
                    colibriMultipleLanguageInitialPage();
                }, 1000);
            });
        </script>
        <?php
        $set_guttenberg_content_script = ob_get_clean();
        $set_guttenberg_content_script = str_replace("<script>", "", $set_guttenberg_content_script);
        $set_guttenberg_content_script = str_replace("</script>", "", $set_guttenberg_content_script);
        wp_add_inline_script('wp-edit-post', $set_guttenberg_content_script);
    }
    return $value;
}, 10, 5);
