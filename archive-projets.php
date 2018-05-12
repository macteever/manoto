<?php /* Template name: travaux */  get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="pt-150">
			<div class="container mb-150">
				<div class="row">
					<?php $compt = 0; ?>
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
								<?php if (($compt < 3) || ($compt > 7 && $compt < 11)) { ?>
									<div class="col-xl-4 col-lg-4 col-md-12 mt-50 mb-50 archive-row1">
										<div class="archive-cadre3">
										</div>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

											<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail(); ?>
											</a>
											<?php endif; ?>
											<div class="text-right archive-post-intro text-violet">
												<div class="univers fw-400 fs-16 post-excerpt"><?php html5wp_excerpt('html5wp_index'); ?></div>
												<h2 class="univers uppercase fs-22 fw-700 mt-10">
													<a class="white-bkg" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
												</h2>
											</div>
										</article>
									</div>
								<?php } elseif (($compt > 2 && $compt < 5) || ($compt > 5 && $compt < 8)) { ?>
									<div class="col-xl-6 col-lg-6 col-md-12 mt-50 mb-50 archive-row2">
										<div class="archive-cadre2">
										</div>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

											<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
											</a>
											<?php endif; ?>
											<div class="text-right archive-post-intro text-violet">
												<div class="univers fw-400 fs-16 post-excerpt"><?php html5wp_excerpt('html5wp_index'); ?></div>
												<h2 class="univers uppercase fs-22 fw-700 mt-10">
													<a class="white-bkg" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
												</h2>
											</div>
										</article>
									</div>
								<?php } elseif (($compt > 4 && $compt < 6) || ($compt > 10 && $compt < 12)) { ?>
									<div class="col-xl-12 col-lg-12 col-12 mt-50 mb-50 archive-row3">
										<div class="archive-cadre1">
										</div>
										<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

											<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
											<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
											</a>
											<?php endif; ?>
											<div class="text-right archive-post-intro text-violet">
												<div class="univers fw-400 fs-16 post-excerpt"><?php html5wp_excerpt('html5wp_index'); ?></div>
												<h2 class="univers uppercase fs-22 fw-700 mt-10">
													<a class="white-bkg" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
												</h2>
											</div>
										</article>
									</div>
								<?php } ?>

							<?php $compt++; ?>
							<?php endwhile; ?>
							<?php else: ?>

							<article>
								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
							</article>
							<!-- /article -->

					<?php endif; ?>
				</div>
				<?php get_template_part('pagination'); ?>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
