<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

      <?php get_template_part( 'template-parts/content-banner-map' ); ?>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile;
			?>

			<div class="container">

			<div class="content-container">

				<?php if (get_field('quote1')): ?>

					<?php get_template_part( 'template-parts/quote-area1' ); ?>

				<?php endif ?>

				<?php get_template_part( 'template-parts/image-row' ); ?>

				<?php get_template_part( 'template-parts/secondary-content' ); ?>


				<!-- Begin MailChimp Signup Form -->

				<div id="mc_embed_signup">
				<form action="//derekhargest.us13.list-manage.com/subscribe/post?u=62d473a914ee32048e533f2a9&amp;id=6f8bfd83fc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll">

				<div class="mc-field-group">
					<label for="mce-NAME">Name </label>
					<input type="text" placeholder="Name *" value="" name="NAME" class="" id="mce-NAME">
				</div>
				<div class="mc-field-group">
					<label for="mce-EMAIL">Email  <span class="asterisk">*</span>
				</label>
					<input type="email" placeholder="Email *" value="" name="EMAIL" class="required email" id="mce-EMAIL">
				</div>
				<div class="mc-field-group">
					<label for="mce-SUBJECT">Subject </label>
					<input type="text" placeholder="Subject" value="" name="SUBJECT" class="" id="mce-SUBJECT">
				</div>
				<div class="mc-field-group">
					<label for="mce-COMMENT">Comment </label>
					<textarea placeholder="Your Message" value="" name="COMMENT" class="" id="mce-COMMENT" rows="8"></textarea>
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_62d473a914ee32048e533f2a9_6f8bfd83fc" tabindex="-1" value=""></div>
				    <div class="clear"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
				    </div>
				</form>
				</div>

				<!--End mc_embed_signup-->



				<img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/store-image.jpg" alt="" class="circle-quote">

			</div>


		</div>


	</main>
</div>
<?php get_footer(); ?>
