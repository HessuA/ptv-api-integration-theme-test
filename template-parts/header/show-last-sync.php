<?php
/**
 * 
 * Show the last sync time
 * 
 * @Author: Heikki Anttonen
 * @Date:   2023-12-05 18:55:09
 * @Last Modified by:   Heikki Anttonen
 * @Last Modified time: 2023-12-07 09:55:52
 * 
 * @package ptv-api-test
 */

namespace Ptv_api_test;

$last_sync = get_option( 'PTV_Api_Integration_Test_sync_end' );

if ( empty( $last_sync ) ) {
  return;
}

?>

<div class="show-last-sync">
  <p><?php echo esc_html( sprintf( 'Last sync: %s', $last_sync ) ); ?></p>
</div>
