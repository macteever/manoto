<?php /* Template name: A propos */  get_header(); ?>
	<main role="main">
      <?php
      if( have_rows('about_part1') ):
         while ( have_rows('about_part1') ) : the_row();
         ?>
        <div class="container-fluid">
           <div class="ml-60 mr-60 light-violet-bkg">
             <div class="container">
                <div class="col-xl-9 col-lg-9 ml-auto zi-9999">
                   <h1 class="mb-0 text-white fs-150 pt-100 atmosphere"><?php the_sub_field('titre'); ?></h1>
                </div>
             </div>
           </div>
        </div>
        <div class="container-fluid">
           <div class="ml-60 mr-60 violet-bkg pt-30 pb-100">
            <div class="container">
               <div class="row align-items-center justify-content-end about-content">
                  <div class="col-xl-4 col-lg-4 col-md-12 col-12 lh-24 text-white fs-20 univers-bold about-content-text">
                     <?php the_sub_field('contenu'); ?>
                     <div class="mt-30">
                        <a class="dl-cv white-bkg text-violet fs-20 univers" href="<?php echo get_sub_field('lien_cv'); ?>" target="_blank" >Télécharger mon CV</a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                     <?php $image = get_sub_field('photo'); ?>
                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>
                     <!-- <div class="w-100 about-cadre h-60">
                     </div> -->
                  </div>
               </div>
            </div>
          </div>
        </div>
       <?php
       endwhile;
      else :
      endif;
      ?>
      <div class="container-fluid mt-15">
         <div class="violet-bkg ml-60 mr-60 hidden-sm" style="height: 250px;">
         </div>
         <div class="light-violet-bkg ml-60 mr-60">
            <div class="container">
               <div class="row about-cat-row pb-100">
               <?php
                  if( have_rows('about_cat') ):
                  while ( have_rows('about_cat') ) : the_row();
                  ?>
                     <div class="col-xl-4 col-lg-4 col-md-12 col-12 about-cat">
                        <!-- <div class="about-cat-cadre h-100">
                        </div> -->
                        <div class="atmosphere text-white fs-60">
                           <?php the_sub_field('titre'); ?>
                        </div>
                        <div class="white-bkg text-violet univers fs-18 lh-28 w-80 p-20 ml-auto about-cat-content">
                           <?php the_sub_field('content'); ?>
                           <div class="univers-bold lh-24 mt-30">
                              <?php the_sub_field('list_cat'); ?>
                           </div>
                        </div>
                     </div>
                     <?php
                  endwhile;
                  else :
                  endif;
                  ?>
               </div>
               <div class="text-center">
                  <a class="about-cta text-violet fs-20 univers" href="/contact">Me contacter</a>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid mt-80">
         <div class="container">
            <?php
               if( have_rows('about_exp') ):
               while ( have_rows('about_exp') ) : the_row();
               ?>
               <div class="row mb-100">
                  <div class="col-xl-12 col-lg-12 col-12 about-exp">
                     <div class="about-exp-cadre">
                     </div>
                     <h2 class="atmosphere fs-60 text-violet"><?php the_sub_field('titre'); ?></h2>
                     <div class="about-exp-content d-flex justify-content-between univers text-violet fs-18">
                        <?php the_sub_field('content'); ?>
                     </div>
                     <div>
                        <a class="dl-cv text-white fs-20 univers light-violet-bkg" href="<?php echo get_sub_field('lien_cv'); ?>" target="_blank" >Télécharger mon CV</a>
                     </div>
                  </div>
               </div>
               <?php
            endwhile;
            else :
            endif;
            ?>
         </div>
      </div>
	</main>

<?php get_footer(); ?>
