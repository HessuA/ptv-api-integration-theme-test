<?php
/**
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:06:45
 * @Last Modified by:   Heikki Anttonen
 * @Last Modified time: 2023-11-27 10:03:48
 *
 * @package ptv-api-test
 **/

namespace Ptv_api_test;

/**
 * Registers the Your Post Type post type.
 */
class Service extends Post_Type {

  public function register() {

    // Modify all the i18ized strings here.
    $generated_labels = [
      'menu_name'          => __( 'Services', 'ptv-api-test' ),
      'name'               => _x( 'Services', 'post type general name', 'ptv-api-test' ),
      'singular_name'      => _x( 'Service', 'post type singular name', 'ptv-api-test' ),
      'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'ptv-api-test' ),
      'add_new'            => _x( 'Add New', 'thing', 'ptv-api-test' ),
      'add_new_item'       => __( 'Add New Service', 'ptv-api-test' ),
      'new_item'           => __( 'New Service', 'ptv-api-test' ),
      'edit_item'          => __( 'Edit Service', 'ptv-api-test' ),
      'view_item'          => __( 'View Service', 'ptv-api-test' ),
      'all_items'          => __( 'All Services', 'ptv-api-test' ),
      'search_items'       => __( 'Search Services', 'ptv-api-test' ),
      'parent_item_colon'  => __( 'Parent Services:', 'ptv-api-test' ),
      'not_found'          => __( 'No Services found.', 'ptv-api-test' ),
      'not_found_in_trash' => __( 'No Services found in Trash.', 'ptv-api-test' ),
    ];

    // Definition of the post type arguments. For full list see:
    // http://codex.wordpress.org/Function_Reference/register_post_type
    $args = [
      'labels'              => $generated_labels,
      'menu_icon'           => null,
      'public'              => true,
      'show_ui'             => true,
      'has_archive'         => false,
      'exclude_from_search' => false,
      'show_in_rest'        => false,
      'pll_translatable'    => true,
      'rewrite'             => [
        'with_front'  => false,
        'slug'        => 'service',
      ],
      'supports'            => [ 'title' ],
      'taxonomies'          => [
        'service-collections',
        'service-tags'
      ],
    ];

    $this->register_wp_post_type( $this->slug, $args );
  }
}
