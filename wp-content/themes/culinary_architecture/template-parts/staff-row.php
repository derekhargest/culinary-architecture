<div class="staff-row">
	<ul>
		<?php

		$args = array('post_type' => 'staff');

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();
		?>

			<li>

					<?php if (get_field('staff_name') != 'Josephine'): ?>

					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo the_field('staff_image'); ?>" title="<?php the_title(); ?> Staff Image" alt="<?php the_title(); ?> Staff Image" class="circle-quote">
					</a>

					<h3><a href="<?php the_permalink(); ?>"><?php echo the_field('staff_name'); ?></a></h3><p><?php echo the_field('staff_title'); ?></p>

					<?php else: ?>

						<a href="javascript: void(0);">
							<img src="<?php echo the_field('staff_image'); ?>" title="<?php the_title(); ?> Staff Image" alt="<?php the_title(); ?> Staff Image" class="circle-quote">
						</a>

						<h3><a href="javascript: void(0);"><?php echo the_field('staff_name'); ?></a></h3><p><?php echo the_field('staff_title'); ?></p>

					<?php endif; ?>

				</li>

		<?php endwhile;?>
	</ul>
</div>

<?php wp_reset_query(); ?>
