<?php

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */

function theme_element_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('element');
        if ($filearea === 'logo') {
            return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
        } 
    } else {
        send_file_not_found();
    }
}

 
 
function theme_element_process_css($css, $theme) {
    
    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_element_set_customcss($css, $customcss);    
    
    // Set slideshow slide 1 image url
    if (!empty($theme->settings->slide1image)) {
        $slide1image = $theme->settings->slide1image;
    } else {
        $slide1image = null;
    }
    $css = theme_element_set_slide1url($css, $slide1image);
    
    // Set slideshow slide 2 image url
    if (!empty($theme->settings->slide2image)) {
        $slide2image = $theme->settings->slide2image;
    } else {
        $slide2image = null;
    }
    $css = theme_element_set_slide2url($css, $slide2image);
    
    // Set slideshow slide 3 image url
    if (!empty($theme->settings->slide3image)) {
        $slide3image = $theme->settings->slide3image;
    } else {
        $slide3image = null;
    }
    $css = theme_element_set_slide3url($css, $slide3image);
    
    // Set slideshow slide 4 image url
    if (!empty($theme->settings->slide4image)) {
        $slide4image = $theme->settings->slide4image;
    } else {
        $slide4image = null;
    }
    $css = theme_element_set_slide4url($css, $slide4image);
 
    return $css;
}



function theme_element_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_element_set_slide1url($css, $slide1image) {
    $tag = '[[setting:slide1image]]';
    $replacement = $slide1image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_element_set_slide2url($css, $slide2image) {
    $tag = '[[setting:slide2image]]';
    $replacement = $slide2image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_element_set_slide3url($css, $slide3image) {
    $tag = '[[setting:slide3image]]';
    $replacement = $slide3image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}

function theme_element_set_slide4url($css, $slide4image) {
    $tag = '[[setting:slide4image]]';
    $replacement = $slide4image;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);
    return $css;
}


function theme_element_page_init(moodle_page $page) {
    $page->requires->jquery();    
    $page->requires->jquery_plugin('bootstrap', 'theme_element');
    $page->requires->jquery_plugin('backtotop', 'theme_element');
    $page->requires->jquery_plugin('flexslider', 'theme_element');
    $page->requires->jquery_plugin('fitvids', 'theme_element');
    
}