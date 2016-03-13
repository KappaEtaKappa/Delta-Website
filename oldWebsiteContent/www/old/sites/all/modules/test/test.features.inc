<?php
/**
 * @file
 * test.features.inc
 */

/**
 * Implements hook_node_info().
 */
function test_node_info() {
  $items = array(
    'profile' => array(
      'name' => t('Profile'),
      'base' => 'node_content',
      'description' => t('A member/pledge/alumni profile for the site directory.'),
      'has_title' => '1',
      'title_label' => t('Full Name'),
      'help' => '',
    ),
  );
  return $items;
}
