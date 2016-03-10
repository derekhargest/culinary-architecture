<?php
/**
 * The template for displaying all single posts and attachments
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

				get_template_part( 'template-parts/content', 'single' );

			endwhile;
			?>

			<div class="content-container">
			
				<?php if (get_field('quote1')): ?>

					<?php get_template_part( 'template-parts/quote-arealg' ); ?>

				<?php endif ?>


			</div>

		</div>

	</main>


</div>

<?php get_footer(); ?>
