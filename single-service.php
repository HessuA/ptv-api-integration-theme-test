<?php
/**
 * 
 * The template for single service
 * 
 * @Author: Heikki Anttonen
 * @Date:   2023-12-01 09:36:07
 * @Last Modified by:   Heikki Anttonen
 * @Last Modified time: 2023-12-05 10:54:42
 * 
 * @package ptv-api-test
 */
namespace Ptv_api_test;

the_post();

$current_service = null;

if ( is_singular( 'service' ) ) {
  $current_service = get_the_ID();
}

// Service data
$description      = get_post_meta( $current_service, 'description', true );
$summary          = get_post_meta( $current_service, 'summary', true );
$user_instruction = get_post_meta( $current_service, 'userInstruction', true );
$organization     = get_post_meta( $current_service, 'organization', true );

// Get post terms
$current_post_service_terms = wp_get_post_terms( $current_service, 'service_classes' );

get_header(); ?>

<main class="site-main">

  <section class="block block-single-service has-unified-padding-if-stacked">
    <div class="container">
      <h1 id="content" class="block-service-title">
        <?php the_title(); ?>
      </h1>
      <div class="content">
        <?php if ( ! empty( $description ) ) : ?>
          <div class="content-block content-description">
            <?php echo wp_kses_post( wpautop( $description ) ); ?>
          </div>
        <?php endif; ?>
        <?php if ( ! empty( $user_instruction ) ) : ?>
          <div class="content-block content-user-instruction">
            <h2><?php  ask_e( 'Palvelu: Toimi näin' ); ?></h2>
            <?php echo wp_kses_post( wpautop( $user_instruction ) ); ?>
          </div>
        <?php endif; ?>
        <?php if ( ! empty( $organization ) ) : ?>
          <div class="content-block content-organization">
            <h2><?php ask_e( 'Palvelu: Organisaatio' ); ?></h2>
            <p><?php echo esc_html( $organization ); ?></p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php if ( ! empty( $current_post_service_terms ) ) : ?>
    <?php get_template_part( 'template-parts/blocks/category-links', null, [
      'title' => ask__( 'Palvelu: Katso myös nämä' ),
      'select_taxonomies' => $current_post_service_terms,
    ] ); ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
