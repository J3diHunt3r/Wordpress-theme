			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
						
					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php echo 'Produced by: firstheme'; ?>.</p>

					<?php
						/* The footer widget area is triggered if any of the areas
						* have widgets. So let's check that first.
						*
						* If none of the sidebars have widgets, then let's bail early.
						*/
						if (   ! is_active_sidebar( 'first-footer-widget-area'  )
							&& ! is_active_sidebar( 'second-footer-widget-area' )
						)
							return;?>
							<aside class="fatfooter" role="complementary">
							<div class="first half left widget-area">
								<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
							</div><!-- .first .widget-area -->
						
							<div class="second half widget-area">
								<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
							</div><!-- .second .widget-area -->
						</aside><!-- #fatfooter -->
						</div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
