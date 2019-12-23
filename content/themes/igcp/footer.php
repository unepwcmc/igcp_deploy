<?php
/**
 * The template for displaying the footer
 */
?>
				<?php if ( is_active_sidebar( 'after-content' ) ) { ?>
					<?php dynamic_sidebar( 'after-content' ); ?>
				<?php }?>
			</main>


			<!-- Footer  -->
			<footer class="lyt-Footer">
				<div class="lyt-Footer_Body">
					<div class="lyt-Footer_Inner">
						<?php if ( is_active_sidebar( 'footer' ) ) { ?>
							<div class="ft-Widgets">

								<!-- Widget Area  -->
								<div class="ft-Widgets_Items">
										<?php dynamic_sidebar( 'footer' ); ?>
								</div>

								<!-- Footer Bottom  -->
							</div>
						<?php }?>

					</div>
				</div>
				<div class="lyt-Footer_Footer">
					<div class="lyt-Footer_Inner">
						<?php get_template_part( 'template-parts/footer/site', 'info' );?>
					</div>
				</div>
			</footer>

		<?php wp_footer(); ?>

	</body>
</html>
