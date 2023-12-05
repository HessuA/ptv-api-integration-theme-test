<?php
/**
 * Polylang language switcher
 *  
 * @Author: Heikki Anttonen
 * @Date:   2023-12-01 13:44:09
 * @Last Modified by:   Heikki Anttonen
 * @Last Modified time: 2023-12-01 14:09:16
 * 
 * @package ptv-api-test
 */
namespace Ptv_api_test;

if ( ! function_exists( 'pll_the_languages' ) ) {
  return;
}

?>

<div class="site-languages">
  <ul>
    <?php pll_the_languages([
      'display_names_as' => 'slug'
    ]); ?>
  </ul>
</div>
