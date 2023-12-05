<?php
/**
 * 
 * Block: Category links
 * 
 * @Author: Heikki Anttonen
 * @Date:   2023-12-01 12:19:37
 * @Last Modified by:   Heikki Anttonen
 * @Last Modified time: 2023-12-01 13:04:26
 */

namespace Ptv_api_test;

if ( ! isset( $args ) ) {
  $title = get_field( 'title' );
  $terms = get_field( 'select_taxonomies' );
} else {
  $title = $args['title'];
  $terms = $args['select_taxonomies'];
}

if ( empty( $terms ) ) {
  maybe_show_error_block( 'Valitse vähintään yksi kategoria' );
  return;
}

?>

<section class="block block-category-links has-unified-padding-if-stacked">
  <div class="container">
    <?php if ( ! empty( $title ) ) : ?>
      <h2><?php echo esc_html( $title ); ?></h2>
    <?php endif; ?>
    <ul class="category-links">
      <?php foreach ( $terms as $term ) : ?>
        <li>
          <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
            <?php echo esc_html( $term->name ); ?>
            <?php include get_theme_file_path( 'svg/chevron-right.svg' ); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
