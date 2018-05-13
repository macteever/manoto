<?php /* Template Name: Contact */ get_header(); ?>
	<main role="main" class="main-content">
		<div class="container-fluid pl-0 pr-0 pt-150">
			<div class="container">
				<div class=" row justify-content-around">
					<div class="col-xl-6 col-lg-6 col-md-12 col-12">
						<div class="contact-cadre">
						</div>
						<h1 class="white-bkg atmosphere fs-72 text-violet">contact</h1>
						<div class="violet-bkg contact-form-content">
							<?php echo do_shortcode('[contact-form-7 id="90" title="Formulaire de contact"]'); ?>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12 col-12 fs-18 text-violet univers d-flex contact-form-infos" >
						<div class="row">
							<div class="col-12">
								<?php the_field('contact-infos'); ?>
							</div>
							<div class="col-12 align-self-end">
								<?php the_field('contact_socialnetwork'); ?>
								<a href="#" target="blank"><i class="fab fa-facebook text-light-violet fs-24 ml-10" aria-hidden="true"></i></a>
								<a href="https://www.instagram.com/manoto.creation/" target="blank"><i class="fab fa-instagram text-light-violet fs-24 ml-10" aria-hidden="true"></i></a>
								<a href="https://www.behance.net/touchtouch" target="blank"><i class="fab fa-behance text-light-violet fs-24 ml-10" aria-hidden="true"></i></a>
								<a href="https://www.linkedin.com/in/manon-touchard-23547710b/" target="blank"><i class="fab fa-linkedin text-light-violet fs-24 ml-10" aria-hidden="true"></i></a>
								<a href="https://www.pinterest.fr/manon8633" target="blank"><i class="fab fa-pinterest text-light-violet fs-24 ml-10" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
