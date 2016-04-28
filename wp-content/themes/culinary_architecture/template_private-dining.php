<?php

/* Template Name: Private Dining Template */

/**
 * The template for displaying the Private Dining Page
 *
 *
 * @package Culinary Architecture
 * @subpackage Culinary Architechture
 * @since 2016
 */

 ?>


<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (get_field('page_main_banner')): ?>

			<?php get_template_part( 'template-parts/content-banner' ); ?>

		<?php endif ?>
    <div class="container">
  		<?php
  		while ( have_posts() ) : the_post();
  			get_template_part( 'template-parts/content', 'page' );
  		endwhile;
  		?>

  		<div class="content-container bottom">

  			<?php if (get_field('quote1')): ?>

  				<?php get_template_part( 'template-parts/quote-areasm' ); ?>

  			<?php endif ?>

  			<?php get_template_part( 'template-parts/image-row' ); ?>

  			<?php get_template_part( 'template-parts/secondary-content' ); ?>

  		</div>

      <?php if ( is_active_sidebar( 'gallery_private_dining' ) ) : ?>
        <?php dynamic_sidebar( 'gallery_private_dining' ); ?>
      <?php endif; ?>

    </div>

	</main>
</div>
<?php get_footer(); ?>
<?php // get_sidebar(); ?>
