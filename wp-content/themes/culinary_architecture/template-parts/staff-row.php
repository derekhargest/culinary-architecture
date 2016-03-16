<div class="staff-row">
	<ul>
		<?php

		$args = array('post_type' => 'staff');

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();
		?>

			<li><a href="<?php the_permalink(); ?>"><img src="<?php echo the_field('staff_image'); ?>" title="<?php the_title(); ?> Staff Image" alt="<?php the_title(); ?> Staff Image" class="circle-quote"></a><h3><a href="<?php the_permalink(); ?>"><?php echo the_field('staff_name'); ?></a></h3><p><?php echo the_field('staff_title'); ?></p></li>

		<?php endwhile;?>
	</ul>
</div>

<?php wp_reset_query(); ?>
