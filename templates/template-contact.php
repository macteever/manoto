<?php /* Template Name: Contact */ get_header(); ?>
	<main role="main" class="main-content">
		<div class="container-fluid pl-0 pr-0 pt-100">
			<div class="container">
				<div class=" row">
					<div class="col-xl-5 col-lg-5 col-md-12 col-12">
						<h1 class="atmosphere fs-72 text-violet">contact</h1>
						<div class="violet-bkg p-30">
							<?php echo do_shortcode('[contact-form-7 id="90" title="Formulaire de contact"]'); ?>
						</div>
					</div>
					<div class="col-xl-5 col-lg-5 col-md-12 col-12">

					</div>
				</div>
			</div>
		</div>
	</main>
<!-- /container-fluid -->
<?php get_footer(); ?>
