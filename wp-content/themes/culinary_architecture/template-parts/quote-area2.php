<?php
	if( have_rows('quote2') ):
	    while( have_rows('quote2') ) : the_row();
			$quoteContent2 = get_sub_field('quote_content');
			$quoteAuthor2 = get_sub_field('quote_author');
			$quoteColor2 = get_sub_field('quote_color');
	     ?>
		<div class="circle-quote" style="background-color: <?php echo $quoteColor2; ?>">
			<div class="quote-content">
				<div class="quote-inner">
					<p><?php echo $quoteContent2; ?></p>
					<p class="quote-author">- <?php echo $quoteAuthor2; ?></p>
				</div>
			</div>
		</div>
				<?php endwhile;
			endif;
	?>
