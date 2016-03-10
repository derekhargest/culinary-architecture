<?php
/**
 * The template part for displaying single posts
 *
 * @package Culinary Architecture
 * @subpackage Culinary Architecture
 * @since 2016
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="content-container">
	
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->


		<div class="entry-content">
				<?php
					the_content(); ?>

		</div><!-- .entry-content -->

		<footer class="entry-footer">
			
		</footer><!-- .entry-footer -->

	</div>

</article><!-- #post-## -->
