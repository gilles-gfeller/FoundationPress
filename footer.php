<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer>
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<section id="footer-top">
                    <div class="grid-container">
                        <div class="grid-x margin-x">
                            <div class="large-3 small-6 cell separe">
                                <h2><?php _e( 'contact us', 'support' ); ?></h2>
                                <p><strong>EPSITEC SA</strong><br />
                                <?php _e( 'office street', 'support' ); ?><br />
                                1400 Yverdon-les-Bains
                                </p>
                                <p><?php _e( 'administration and sales', 'support' ); ?><br />
                                <?php _e( 'administration phone number', 'support' ); ?> <a data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="<?php _e( 'tax info 0848', 'support' ); ?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                </p>
                                <img src="<?php bloginfo('template_directory'); ?>/dist/assets/images/epsitec-team.png" alt="epsitec-team" />
                            </div>
                            <div class="large-3 small-6 cell separe hide-for-small-only">
                                <h2><?php _e( 'the accounting softwares', 'support' ); ?></h2>
                                <ul>
                                    <li><a href="https://www.cresus.ch/products/compta/" target="_blank">Crésus Comptabilité</a></li>
                                    <li><a href="https://www.cresus.ch/products/sal/" target="_blank">Crésus Salaires</a></li>
                                    <li><a href="https://www.cresus.ch/products/fact/" target="_blank">Crésus Facturation</a></li>
                                    <li><a href="https://www.cresus.ch/products/pe/" target="_blank">Crésus Gestion PE</a></li>
                                    <li>&nbsp;</li>
                                    <li><a href="https://www.cresus.ch/pay/" target="_blank">Crésus Pay</a></li>
                                    <li><a href="https://www.cresus.ch/synchro/" target="_blank">Crésus Synchro</a></li>
                                    <!--
                                    <li><a href="#">Crésus Banking</a></li>
                                    <li><a href="#">Crésus Expenses</a></li>
                                    -->
                                </ul>
                            </div>
                            <div class="large-3 small-6 cell separe">
                            <h2><?php _e( 'quick links', 'support' ); ?></h2>
                            <ul>
                            <li><a href="/support">Support</a></li>
                            <li><a href="/manuel">Manuel</a></li>
                            <li><a href="/FAQ">FAQ</a></li>
                            <li><a href="/bulletins">Bulletins</a></li>
                            </ul>
                            <br /><br />
                            <h2><?php _e( 'follow us', 'support' ); ?></h2>
                            <a href="" class="social"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="" class="social"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                            <a href="" class="social"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                            </div>
                            <div class="large-3 small-6 cell hide-for-small-only">
                            <h2><?php _e( 'references', 'support' ); ?></h2>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="footer-bottom">
                    Copyright &copy; <?php echo current_time(Y); ?>
    		    </section>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>
    </div>  <!-- div du off-canvas pour le menu mobile -->
    <!-- SCROLL TOP-->
	<script type="text/javascript">
    	$(window).scroll(function(){
    	    if ($(this).scrollTop() > 100) {
    			$('.scrollup').fadeIn(500);
    		} else {
    			$('.scrollup').fadeOut(500);
    		}
    	});
    	$(".boutonMenu").click(function(){
            $(".menuMobile").slideToggle(500);
            return false;
        });
    	$('.scrollup').click(function(){
    		$("html, body").animate({ scrollTop: 0 }, 500);
    		return false;
    	});
	</script>
	<!--// SCROLL TOP-->
    <?php wp_footer(); ?>
    <?php do_action( 'foundationpress_before_closing_body' ); ?>
    <?php if($_SERVER['SERVER_NAME'] == "localhost") : ?>
        <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
        //]]></script>
    <?php endif; ?>
    </body>
</html>
