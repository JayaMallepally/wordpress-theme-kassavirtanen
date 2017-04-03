<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
<?php /*  */ ?>

			<div class="footer-info">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <p>Kassavirtanen Oy</p>
                        <p>Xxxkatu XX A,</p>
                        <p>00120 HELSINKI</p>
                        <p>Y-tunnus: 1234567-1</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <p class="footer-info-title">Navigointi</p>
                        <p><a href="#">Etusivu</a></p>
                        <p><a href="#">Hinnasto</a></p>
                        <p><a href="#">Usein kysytyt kysymykset</a></p>
                        <p><a href="#">Sopii yrityksille ja yksityishenkilöille</a></p>
                        <p><a href="#">Yhteystiedot</a></p>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"></div>

                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                        <p class="footer-info-title">Asiakaspalvelu</p>
                        <p>Puh. 09 0000 000</p>
                        <p><a href="mailto:asiakaspalvelu@kassavirtanen.fi" target="_blank">asiakaspalvelu@kassavirtanen.fi</a></p>
                    </div>
                </div>


				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>

                <?php /* site title and url
                    <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
     				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentysixteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
                */?>

                <div class="afc-copyright">
                    <img src="http://kassavirtanen.local/wp-content/uploads/2017/03/someplaceholder.png" alt="This must be replaced. Doesnt work" class="someplaceholderremove"><br><br>
                    <p>© kassavirtanen 2016</p>
                </div>


			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
