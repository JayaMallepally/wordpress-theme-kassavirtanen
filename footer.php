		</div><!-- .site-content -->

		<footer id="colophon" class="footer" role="contentinfo">

			<div class="footer-info container">
                <div class="row">
                    <div class="col-md-3">
                        <h5 class="kassavirtanenbrand">kassavirtanen</h5>
                        <p>Kassavirtanen Oy</p>
                        <p>Xxxkatu XX A,</p>
                        <p>00120 HELSINKI</p>
                        <p>Y-tunnus: 1234567-1</p>
                    </div>
                    <div class="col-md-3">
                        <p class="footer-info-title">Navigointi</p>
                        <p><a href="#">Etusivu</a></p>
                        <p><a href="#">Hinnasto</a></p>
                        <p><a href="#">Usein kysytyt kysymykset</a></p>
                        <p><a href="#">Sopii yrityksille ja yksityishenkilöille</a></p>
                        <p><a href="#">Yhteystiedot</a></p>
                    </div>


                    <div class="col-md-3 col-md-offset-3">
                        <p class="footer-info-title">Asiakaspalvelu</p>
                        <p>Puh. 09 0000 000</p>
                        <p><a href="mailto:asiakaspalvelu@kassavirtanen.fi" target="_blank">asiakaspalvelu@kassavirtanen.fi</a></p>
                    </div>
                </div>



                <div class="footer-icons">
                    <div class="container">
                        <div class="row someicons">
                            <?php if ( function_exists( 'ADDTOANY_FOLLOW_KIT' ) ) {
                                ADDTOANY_FOLLOW_KIT( array(
                                    'buttons' => array(
                                        'facebook'  => array( 'id' => 'kassavirtanen' ),
                                        'twitter' => array( 'id' => 'kassavirtanen' ),
                                        'instagram' => array( 'id' => 'kassavirtanen' ),
                                        'snapchat'   => array( 'id' => 'kassavirtanen' ),
                                    ),
                                ) );
                            } ?>
                        </div>
                    </div>
                </div>


                <div class="footer-copyright">
                    <p>© kassavirtanen 2016</p>
                </div>


			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
