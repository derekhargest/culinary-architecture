<?php
/**
 * The template used for displaying page content_url( $path );
 *
 * @package WordPress
 * @subpackage Culinary Architecture
 * @since 2016
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="content-container">

		<div class="container">

				<?php the_content(); ?>

		</div>

	</div>

</article><!-- #post-## -->
