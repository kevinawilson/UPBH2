<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
	//controlled in the widget sections
?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
			<div id="footer-form" class="footer-form">
				<div class="header">
					<div class="divider">
						contact us
					</div>
					Complete this simple form or call 866.787.6699
				</div>
				<div class="photo-overlay">
				</div>
					<?php dynamic_sidebar( 'form-footer-widgets' ); ?>
			</div>
			<div class="footer-blue">
				<div class="row upper-footer">
					<?php dynamic_sidebar( 'upper-footer-widgets' ); ?>
			  </div>
				<div class="row social-footer">
					<?php dynamic_sidebar( 'lower-social-widgets' ); ?>
			 </div>
				 <div class="row lower-footer">
					 <?php dynamic_sidebar( 'lower-footer-widgets' ); ?>
				</div>
			</div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>


		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->



<?php wp_footer(); ?>

<!-- Begin Keymetric Tracking Code -->
<script type = 'text/javascript' >
    function onKeyMetricComplete() {
    if (window.location.pathname == "/thank-you/") {
        km_LogData('101');
    };
    if (window.location.pathname == "/thank-submitting-insurance-information/") {
        km_LogData('102');
    };
}
var KmHost = (("https:" == document.location.protocol) ? "https://km14221" : "http://km14221");
var kmscr = document.createElement('script');
kmscr.type = 'text/javascript';
kmscr.src = KmHost + ".keymetric.net/KeyMetric.js";
document.body.appendChild(kmscr);

</script>
<!-- End Keymetric Tracking Code -->



<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
