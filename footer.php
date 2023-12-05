<?php
/**
 * Template for displaying the footer
 *
 * Description for template.
 *
 * @Author: Roni Laukkarinen
 * @Date: 2020-05-11 13:33:49
 * @Last Modified by:   Heikki Anttonen
 * @Last Modified time: 2023-12-04 20:42:18
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package ptv-api-test
 */

namespace Ptv_api_test;

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

 

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

<a
  href="#page"
  id="top"
  class="top no-external-link-indicator"
  data-version="<?php echo esc_attr( AIR_LIGHT_VERSION ); ?>"
>
  <span class="screen-reader-text"><?php echo esc_html( get_default_localization( 'Back to top' ) ); ?></span>
  <span aria-hidden="true">&uarr;</span>
</a>

</body>
</html>
