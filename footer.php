			<!-- footer -->
<?php if (is_home()): ?>

	<footer class="footer no-margin" role="contentinfo">
	<?php else: ?>

		<footer class="footer" role="contentinfo">
<?php endif; ?>

				<div class="row">
					<div class="col col--3-of-12 col--m-1-of-2">
						<h5>Europäisches Hansemuseum</h5>
						<p class="opening-hours">An der Untertrave 1</br>
							D-23552 Lübeck</br>
							+49 (0) 451 80 90 99-0</br>
							<a href="mailto:info@hansemuseum.eu">info@hansemuseum.eu</a></p>
							<p class="opening-hours">Täglich geöffnet</br>(außer 24. Dezember)</p>
							<p class="opening-hours">April – Oktober:</br>10.00 – 18.00 Uhr</p>
							<p class="opening-hours">November-März:</br>10.00 – 17.00 Uhr</p>
					</div>
						<div class="col col--9-of-12 col--m-1-of-2">
							<div class="row">
								<div class="col col--4-of-12 col--m-1-of-2">
								<a href="<?php echo home_url(); ?>">
									<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
									<img src="<?php echo get_template_directory_uri(); ?>/img/hansestadt.svg" alt="Logo" class="footer-logo">
								</a>
							</div>
						<div class="col col--4-of-12 col--m-6-of-12">
								<p class="footer-caption">Gefördert durch die:</p>
								<img class="footer-logo" src="<?php $url = content_url(); echo $url; ?>/uploads/2015/01/possehl.png" alt="">
						</div>
						<div class="col col--4-of-12 col--m-6-of-12">
								<p class="footer-caption">Gefördert durch die Europäische Union, Europäischer Fonds für regionale Entwicklung (EFRE),den Bund und das Land Schleswig-Holstein</p>
								<img class="footer-logo" src="<?php $url = content_url(); echo $url; ?>/uploads/2015/01/zukunftsprogramm.png" alt="">
						</div>
					</div>
						</div>
				</div>
				<div class="row">
					<div class="col col--12-of-12">

						<p class="copyright">
							&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
						</p>
					</div>
				 </div> <!--  end stage -->
				</div>

			</footer>


		</div>


		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
