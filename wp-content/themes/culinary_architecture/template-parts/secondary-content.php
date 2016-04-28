<?php

/**
 * The template part for displaying secondary content
 *
 *
 * @package Culinary Architecture
 * @subpackage Culinary Architechture
 * @since 2016
 */

 ?>

	<?php
	if( have_rows('secondary_content') ):
	while( have_rows('secondary_content') ) : the_row();
	?>
	<div class="secondary-content">
		<h2><?php echo get_sub_field('page_content_title_2'); ?></h2>

		<?php if (get_sub_field('page_content_2'))
			{
			echo '<p>'.get_sub_field('page_content_2').'</p>';
			}
		?>

	</div>

	<?php endwhile;
	endif;
	?>
