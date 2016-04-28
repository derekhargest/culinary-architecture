<?php
/**
 * The template for displaying a single page
 *
 * @package Culinary Architecure
 * @subpackage Culinary Architecure
 * @since 2016
 */

get_header(); ?>

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

				<?php if (get_field('quote1')): ?>

					<?php get_template_part( 'template-parts/quote-area1' ); ?>

				<?php endif ?>

				<?php get_template_part( 'template-parts/image-row' ); ?>

				<?php get_template_part( 'template-parts/secondary-content' ); ?>

			</div>

		</div>


	</main>
</div>
<?php get_footer(); ?>
<?php // get_sidebar(); ?>
