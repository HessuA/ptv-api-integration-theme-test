<?php
/**
 * @Author: Timi Wahalahti
 * @Date:   2019-12-03 11:03:31
 * @Last Modified by:   Heikki Anttonen
 * @Last Modified time: 2023-12-05 17:46:06
 *
 * @package ptv-api-test
 */

namespace Ptv_api_test;

add_filter( 'air_helper_pll_register_strings', function() {
  $strings = [
    'Palvelu: Toimi näin'              => 'Toimi näin',
    'Palvelu: Organisaatio'            => 'Organisaatio',
    'Palvelu: Katso myös nämä'         => 'Katso myös nämä',
    'Haku: Haku'                       => 'Haku',
  ];

  /**
   * Uncomment if you need to have default ptv-api-test accessibility strings
   * translatable via Polylang string translations.
   */
  // foreach ( get_default_localization_strings() as $key => $value ) {
  //   $strings[ "Accessibility: {$key}" ] = $value;
  // }

  return $strings;
} );

function get_default_localization_strings( $language = 'en' ) {
  $strings = [
    'en'  => [
      'Add a menu'                                   => __( 'Add a menu', 'ptv-api-test' ),
      'Open main menu'                               => __( 'Open main menu', 'ptv-api-test' ),
      'Close main menu'                              => __( 'Close main menu', 'ptv-api-test' ),
      'Main navigation'                              => __( 'Main navigation', 'ptv-api-test' ),
      'Back to top'                                  => __( 'Back to top', 'ptv-api-test' ),
      'Open child menu for'                          => __( 'Open child menu for', 'ptv-api-test' ),
      'Close child menu for'                         => __( 'Close child menu for', 'ptv-api-test' ),
      'Skip to content'                              => __( 'Skip to content', 'ptv-api-test' ),
      'Skip over the carousel element'               => __( 'Skip over the carousel element', 'ptv-api-test' ),
      'External site'                                => __( 'External site', 'ptv-api-test' ),
      'opens in a new window'                        => __( 'opens in a new window', 'ptv-api-test' ),
      'Page not found.'                              => __( 'Page not found.', 'ptv-api-test' ),
      'The reason might be mistyped or expired URL.' => __( 'The reason might be mistyped or expired URL.', 'ptv-api-test' ),
      'Search'                                       => __( 'Search', 'ptv-api-test' ),
      'Block missing required data'                  => __( 'Block missing required data', 'ptv-api-test' ),
      'This error is shown only for logged in users' => __( 'This error is shown only for logged in users', 'ptv-api-test' ),
      'No results found for your search'             => __( 'No results found for your search', 'ptv-api-test' ),
      'Edit'                                         => __( 'Edit', 'ptv-api-test' ),
      'Previous slide'                               => __( 'Previous slide', 'ptv-api-test' ),
      'Next slide'                                   => __( 'Next slide', 'ptv-api-test' ),
      'Last slide'                                   => __( 'Last slide', 'ptv-api-test' ),
    ],
    'fi'  => [
      'Add a menu'                                   => 'Luo uusi valikko',
      'Open main menu'                               => 'Avaa päävalikko',
      'Close main menu'                              => 'Sulje päävalikko',
      'Main navigation'                              => 'Päävalikko',
      'Back to top'                                  => 'Siirry takaisin sivun alkuun',
      'Open child menu for'                          => 'Avaa alavalikko kohteelle',
      'Close child menu for'                         => 'Sulje alavalikko kohteelle',
      'Skip to content'                              => 'Siirry suoraan sisältöön',
      'Skip over the carousel element'               => 'Hyppää karusellisisällön yli seuraavaan sisältöön',
      'External site'                                => 'Ulkoinen sivusto',
      'opens in a new window'                        => 'avautuu uuteen ikkunaan',
      'Page not found.'                              => 'Hups. Näyttää, ettei sivua löydy.',
      'The reason might be mistyped or expired URL.' => 'Syynä voi olla virheellisesti kirjoitettu tai vanhentunut linkki.',
      'Search'                                       => 'Haku',
      'Block missing required data'                  => 'Lohkon pakollisia tietoja puuttuu',
      'This error is shown only for logged in users' => 'Tämä virhe näytetään vain kirjautuneille käyttäjille',
      'No results for your search'                   => 'Haullasi ei löytynyt tuloksia',
      'Edit'                                         => 'Muokkaa',
      'Previous slide'                               => 'Edellinen dia',
      'Next slide'                                   => 'Seuraava dia',
      'Last slide'                                   => 'Viimeinen dia',
    ],
  ];

  return ( array_key_exists( $language, $strings ) ) ? $strings[ $language ] : $strings['en'];
} // end get_default_localization_strings

function get_default_localization( $string ) {
  if ( function_exists( 'ask__' ) && array_key_exists( "Accessibility: {$string}", apply_filters( 'air_helper_pll_register_strings', [] ) ) ) {
    return ask__( "Accessibility: {$string}" );
  }

  return esc_html( get_default_localization_translation( $string ) );
} // end get_default_localization

function get_default_localization_translation( $string ) {
  $language = get_bloginfo( 'language' );
  if ( function_exists( 'pll_the_languages' ) ) {
    $language = pll_current_language();
  }

  $translations = get_default_localization_strings( $language );

  return ( array_key_exists( $string, $translations ) ) ? $translations[ $string ] : '';
} // end get_default_localization_translation
