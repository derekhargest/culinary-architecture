<?php /* Template Name: Makers Template */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
				<?php if (get_field('page_main_banner')): ?>

					<?php get_template_part( 'template-parts/content-banner' ); ?>

				<?php endif ?>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
			?>

			<div class="container">

				<div class="content-container">

					<?php if (get_field('quote1')): ?>

						<?php get_template_part( 'template-parts/quote-areasm' ); ?>

					<?php endif ?>

				</div>

				<?php get_template_part( 'template-parts/image-row' ); ?>

				<div class="content-container bottom">

					<?php get_template_part( 'template-parts/secondary-content' ); ?>

				</div>

				<?php if ( is_active_sidebar( 'gallery_makers' ) ) : ?>

					<?php dynamic_sidebar( 'gallery_makers' ); ?>

				<?php endif; ?>

			</div>

	</main>
</div>
<?php get_footer(); ?>
<?php // get_sidebar(); ?>
