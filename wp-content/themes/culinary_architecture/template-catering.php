<?php

/* Template Name: Catering Template */

/**
 * The template for displaying the Catering Page
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

			<div class="content-container">

				<?php if (get_field('menu_pdf')): ?>

					<a href="<?php echo the_field('menu_pdf'); ?>" class="button menu"><span class="icon-download"></span><span>Catering Menu</span></a>

				<?php else: ?>

					<a href="javascript: void(0)" class="button menu"><span class="icon-download"></span><span>Catering Menu</span></a>

				<?php endif; ?>

				<a href="contact-us" class="button"><span>Contact Us for Catering</span></a>

				<?php if (get_field('quote1')): ?>

					<?php get_template_part( 'template-parts/quote-area1' ); ?>

				<?php endif ?>
			</div>

				<?php if ( is_active_sidebar( 'gallery_catering' ) ) : ?>
					<?php dynamic_sidebar( 'gallery_catering' ); ?>
				<?php endif; ?>

				<div class="content-container">

					<?php get_template_part( 'template-parts/image-row' ); ?>

				</div>

			</div>

		</div>

	</main>
</div>
<?php get_footer(); ?>
<?php // get_sidebar(); ?>
