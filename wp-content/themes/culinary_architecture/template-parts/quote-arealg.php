<?php

/**
 * The template part for displaying a large quote area
 *
 *
 * @package Culinary Architecture
 * @subpackage Culinary Architechture
 * @since 2016
 */

 ?>

<?php
	if( have_rows('quote1') ):
	    while( have_rows('quote1') ) : the_row();
			$quoteContent = get_sub_field('quote_content');
			$quoteAuthor = get_sub_field('quote_author');
			$quoteColor = get_sub_field('quote_color');
	     ?>
		<div class="circle-quote large" style="background-color: <?php echo $quoteColor; ?>">
			<div class="quote-content">
				<div class="quote-inner large">
					<p><?php echo $quoteContent; ?></p>
					<p class="quote-author">- <?php echo $quoteAuthor; ?></p>
				</div>
			</div>
		</div>
				<?php endwhile;
			endif;
	?>
