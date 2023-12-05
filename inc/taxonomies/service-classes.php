<?php
/**
 * @Author: Niku Hietanen
 * @Date: 2020-02-18 15:05:35
 * @Last Modified by:   Heikki Anttonen
 * @Last Modified time: 2023-11-28 12:32:56
 *
 * @package ptv-api-test
 */

namespace Ptv_api_test;

/**
 * Registers the Your Taxonomy taxonomy.
 *
 * @param Array $post_types Optional. Post types in
 * which the taxonomy should be registered.
 */
class Service_classes extends Taxonomy {

  public function register( array $post_types = [] ) {
    // Taxonomy labels.
    $labels = [
      'name'                  => _x( 'Service Classes', 'Taxonomy plural name', 'ptv-api-test' ),
      'singular_name'         => _x( 'Service Class', 'Taxonomy singular name', 'ptv-api-test' ),
      'search_items'          => __( 'Search Service Classes', 'ptv-api-test' ),
      'popular_items'         => __( 'Popular Service Classes', 'ptv-api-test' ),
      'all_items'             => __( 'All Service Classes', 'ptv-api-test' ),
      'parent_item'           => __( 'Parent Service Class', 'ptv-api-test' ),
      'parent_item_colon'     => __( 'Parent Service Class', 'ptv-api-test' ),
      'edit_item'             => __( 'Edit Service Class', 'ptv-api-test' ),
      'update_item'           => __( 'Update Service Class', 'ptv-api-test' ),
      'add_new_item'          => __( 'Add New Service Class', 'ptv-api-test' ),
      'new_item_name'         => __( 'New Service Class', 'ptv-api-test' ),
      'add_or_remove_items'   => __( 'Add or remove Service Class', 'ptv-api-test' ),
      'choose_from_most_used' => __( 'Choose from most used Taxonomies', 'ptv-api-test' ),
      'menu_name'             => __( 'Service Classes', 'ptv-api-test' ),
    ];

    $args = [
      'labels'            => $labels,
      'public'            => true,
      'show_in_nav_menus' => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
      'show_tagcloud'     => false,
      'query_var'         => false,
      'pll_translatable'  => true,
      'rewrite'           => [
        'slug' => 'service-classes',
      ],
    ];

    $this->register_wp_taxonomy( $this->slug, $post_types, $args );
  }

}
