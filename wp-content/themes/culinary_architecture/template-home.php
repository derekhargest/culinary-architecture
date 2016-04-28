<?php

/* Template Name: Home Template */

/**
 * The template for displaying the Home Page
 *
 *
 * @package Culinary Architecture
 * @subpackage Culinary Architechture
 * @since 2016
 */

 ?>

<?php get_header(); ?>

<div id="primary" class="content-area">

	<main id="main" class="site-main home" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php get_template_part( 'template-parts/content-banner' ); ?>

				<div class="container">

					<div class="home-top">

						<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', 'page' );
							endwhile;
							?>

						<div class="content-container">

							<?php if (get_field('quote1')): ?>

								<?php get_template_part( 'template-parts/quote-areasm' ); ?>

							<?php endif ?>

						</div>

					</div>

				</div>

				<div class="banner">

					<?php if (get_field('page_banner_2')): ?>

						<img src="<?php the_field('page_banner_2'); ?>" alt="<?php the_title(); ?> Banner" />

					<?php endif; ?>

				</div>

				<div class="container">

					<div class="content-container">

						<?php if (get_field('page_content_title_2')): ?>

							<h2><?php echo get_field('page_content_title_2'); ?></h2>

						<?php endif; ?>

						<?php if (get_field('page_content_2'))
							{
								echo get_field('page_content_2');
							}
						?>

						<?php if (get_field('quote2')): ?>

							<?php get_template_part( 'template-parts/quote-area2sm' ); ?>

						<?php endif ?>

					</div>

				</div>

			</article><!-- #post-## -->

	</main>

</div>

<?php get_footer(); ?>
