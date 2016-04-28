<?php

/* Template Name: Makers Template */

/**
 * The template for displaying the Makers Page
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

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
			?>

			<div class="container">

				<div class="content-container">

					<?php if (get_field('makers_pdf')): ?>

						<a href="<?php echo the_field('makers_pdf'); ?>" class="button menu"><span class="icon-download"></span><span>Open Call</span></a>

					<?php else: ?>

						<a href="javascript: void(0)" class="button menu"><span class="icon-download"></span><span>Open Call</span></a>

					<?php endif; ?>

					<div class="makers-list">
						<div class="makers-item">
							<h3>Food Artisans</h3>
								<ul>
									<li>Beverages</li>
									<li>Condiments</li>
									<li>Dry Packaged Goods</li>
									<li>Indie Food Products</li>
									<li>Regional "Maryland" Products</li>
								</ul>
						</div>
						<div class="makers-item">
							<h3>Tinkerers &amp; Makers</h3>
								<ul>
									<li>Gifts</li>
									<li>Prints</li>
									<li>Textiles</li>
									<li>Tabletop &amp; Housewares</li>
									<li>Culinary Gadgets &amp; Utensils</li>
								</ul>
						</div>
						<div class="makers-item last">
							<h3>Gather &amp; Mingle</h3>
								<ul>
									<li>Performance Art</li>
									<li>Food &amp; Makers Swaps</li>
									<li>Community Engagement</li>
									<li>Creative Ideas for Gatherings</li>
									<li>Local Grower &amp; Farm Food Events</li>
									<li>Art, Design &amp; Technology Mingled Dinners</li>
								</ul>
						</div>
					</div>

				</div>

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
