<?php

/* Template Name: Contact Template */

/**
 * The template for displaying the Contact Page
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

      <?php get_template_part( 'template-parts/content-banner-map' ); ?>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
			?>

			<div class="container">

			<div class="content-container">

				<?php if (get_field('quote1')): ?>

					<?php get_template_part( 'template-parts/quote-area1' ); ?>

				<?php endif ?>

				<?php get_template_part( 'template-parts/image-row' ); ?>

				<?php get_template_part( 'template-parts/secondary-content' ); ?>


				<!-- Begin MailChimp Signup Form -->

				<?php
				if ( function_exists( 'ninja_forms_display_form' ) ) {
					ninja_forms_display_form( 1 );
				}

				?>

				<!--End mc_embed_signup-->



				<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/store-image.jpg" alt="Location Image" title="Location Image" class="circle-quote">

			</div>


		</div>


	</main>
</div>
<?php get_footer(); ?>
