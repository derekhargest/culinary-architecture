<?php
	if( have_rows('quote1') ):
	    while( have_rows('quote1') ) : the_row();
			$quoteContent1 = get_sub_field('quote_content');
			$quoteAuthor1 = get_sub_field('quote_author');
			$quoteColor1 = get_sub_field('quote_color');
	     ?>
		<div class="circle-quote" style="background-color: <?php echo $quoteColor1; ?>">
			<div class="quote-content">
				<div class="quote-inner">
					<p><?php echo $quoteContent1; ?></p>
					<p class="quote-author">- <?php echo $quoteAuthor1; ?></p>
				</div>
			</div>
		</div>
				<?php endwhile;
			endif;
	?>
