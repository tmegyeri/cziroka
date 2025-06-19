<?php

namespace ExtendBuilder;

function colibri_get_default_language()
{
    $lang = apply_filters("colibri_get_default_language", "default");
    return $lang;
}

function colibri_is_default_language($lang)
{
    if ($lang === 'default') {
        return true;
    }

    return ($lang === colibri_get_default_language());
}

function colibri_get_post_language($post_id)
{
    $lang = apply_filters("colibri_get_post_language", "", $post_id);
    return $lang;
}

function colibri_get_current_language()
{
    $lang = apply_filters("colibri_get_current_language", "");
    if (!$lang || empty($lang)) {
        $lang = colibri_get_default_language();
    }
    return $lang;
}

add_filter('extendbuilder_wp_data', function ($value) {
    $polylang_is_active = colibri_polylang_is_active();
    $wpml_is_active = colibri_wpml_is_active();
    $multilanaguage_is_active = colibri_multilanguage_is_active();
    $value['multilanguage'] = array(
        'active' => $multilanaguage_is_active,
        'isPolylang' => $polylang_is_active,
        'isWpml' => $wpml_is_active,
    );
    return $value;
});

add_action('plugins_loaded', function () {
    // load support for polylang
    if (colibri_polylang_is_active()) {
        require_once __DIR__ . "/polylang-options.php";
    }

    // load support for WPML
    if (colibri_wpml_is_active()) {
        require_once __DIR__ . "/wpml-options.php";
    }
});

add_action('icl_make_duplicate', function ($master_post_id, $lang, $post_array, $id) {
    global $iclTranslationManagement;
    if ($iclTranslationManagement) {
        $iclTranslationManagement->reset_duplicate_flag($id);
    }
}, 10, 4);


function link_post_translations($source, $dest)
{
    if (function_exists('pll_save_post_translations')) {
        set_post_language($source['id'], $source['lang']);
        set_post_language($dest['id'], $dest['lang']);
        $translations = pll_get_post_translations($source['id']);
        pll_save_post_translations(
            array_merge(
                $translations ? $translations : array(),
                array(
                    $dest['lang'] => $dest['id']
                )
            )
        );
    }

    if (colibri_wpml_is_active()) {

        $get_language_args = array('element_id' => $source['id'], 'element_type' => 'post');
        $original_post_language_info = apply_filters('wpml_element_language_details', null, $get_language_args);

        $set_language_args = array(
            'element_id' => $dest['id'],
            'element_type' => "post_post", //.get_post($dest['id'])->post_type,
            'trid' => $original_post_language_info->trid,
            'language_code' => $dest['lang'],
            'source_language_code' => $original_post_language_info->language_code
        );

        do_action('wpml_set_element_language_details', $set_language_args);
    }
}
