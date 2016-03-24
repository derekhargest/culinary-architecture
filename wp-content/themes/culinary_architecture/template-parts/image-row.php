
<?php if( have_rows('image_row') ): ?>
	<div class="banner main-banner image-row">
	<ul>
		<?php while( have_rows('image_row') ) : the_row();
				$imgRowImg = get_sub_field('image_row_img');
			?>
				<li><img src="<?php echo $imgRowImg; ?>" title="Culinary Architecture Image" alt="Culinary Architecture Image"></li>
		<?php endwhile; ?>
		</ul>
	</div>
<?php endif ?>
