<?php /* Template Name: Our Story */ ?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php get_template_part( 'template-parts/content-banner' ); ?>

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


						</div>

								<?php get_template_part( 'template-parts/image-row' ); ?>


						<div class="content-container">

							<?php if (get_field('page_content_title_2')): ?>
								<h2><?php echo get_field('page_content_title_2'); ?></h2>
							<?php endif; ?>

							<?php if (get_field('page_content_2'))
								{
									echo get_field('page_content_2');
								}
							?>
						</div>



						<?php get_template_part( 'template-parts/staff-row' ); ?>

							<div class="content-container">

							<p><?php echo get_field('staff_content'); ?></p>

							</div>

						</div>


				</div>

				</div><!-- .entry-content -->

			</article><!-- #post-## -->

	</main>
</div>
<?php get_footer(); ?>
<?php // get_sidebar(); ?>
