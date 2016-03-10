<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">



		<div class="container">

      <?php get_template_part( 'template-parts/content-banner-map' ); ?>

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

				<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/store-image.jpg" alt="" class="circle-quote">

			</div>


		</div>


	</main>
</div>
<?php get_footer(); ?>
