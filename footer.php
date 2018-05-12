			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container-fluid" id="contact">
					<div class="container pt-30 pb-10">
						<div class="row">
							<div class="col-xl-2 col-lg-2 col-md-6 col-12 d-flex align-items-center">
								<img class="m-l-auto m-r-auto" src="<?=get_template_directory_uri().'/assets/img/logo-blanc.svg'?>" alt="Manon Touchard Design et création graphiques"/>
							</div>
							<div class="col-xl-4 col-lg-3 hidden-md col-12">

							</div>
							<div class="col-xl-3 col-lg-3 hidden-md col-12">

							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-12 d-flex align-items-center justify-content-end">
								<a href="#" target="blank"><i class="fab fa-facebook text-white fs-24 ml-10" aria-hidden="true"></i></a>
								<a href="#" target="blank"><i class="fab fa-instagram text-white fs-24 ml-10" aria-hidden="true"></i></a>
								<a href="#" target="blank"><i class="fab fa-behance text-white fs-24 ml-10" aria-hidden="true"></i></a>
								<a href="#" target="blank"><i class="fab fa-linkedin text-white fs-24 ml-10" aria-hidden="true"></i></a>
								<a href="#" target="blank"><i class="fab fa-pinterest text-white fs-24 ml-10" aria-hidden="true"></i></a>
							</div>
						</div>
						<div class="row copyright text-white justify-content-center mt-15">
							<!-- copyright -->
							<p class="text-white fs-15">
								&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
								<a href="/mentions-legales" class="text-white">- Mentions légales</a>
							</p>
							<!-- /copyright -->
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-109419102-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</body>
</html>
