<?php 


/**
 * Add javascript files for front-page jquery slideshow.
 */
if (drupal_is_front_page()) {
drupal_add_js(drupal_get_path('theme', 'bluemasters') . '/js/bluemasters.js');
}

/**
 * Google survey Code
 *
 */
drupal_add_js("//survey.g.doubleclick.net/async_survey?site=q5vjk7gzee2uq");

?>