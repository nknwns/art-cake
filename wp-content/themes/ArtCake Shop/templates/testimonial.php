<section class="testimonial">
	<div class="container">
		<div class="row">
			<div class="title col-12">
				<span class="small-title-orange">Отзывы</span>
				<h2>Наши клиенты рассказывают</h2>
			</div>
			<div class="owl-carousel testimonial-carousel col-12">
				<?php 
					$posts = get_posts(array(
						'numberposts' => 5,
						'post_type'   => 'testimonial',
						'orderby'     => 'rand',
						'suppress_filters' => true
					));

					foreach ($posts as $post) {
						setup_postdata($post);
						?>
						<div class="item">
							<div class="author">
								<div class="author-description">
									<img src="<?php the_field('image_author'); ?>">
									<div class="name-author">
										<p class="name"><?php the_field('name_author'); ?></p>
										<p class="city"><?php the_field('city_author'); ?></p>
									</div>
								</div>
								<div class="rating">
									<?php 
									$count_star = get_field('count_star'); 
									for ($i = 0; $i < $count_star; $i++) {
										echo '<img src="wp-content/themes/ArtCake%20Shop/assets/img/star.svg">';
									}
									?>
								</div>
							</div>
							<div class="description">
								<p><?php the_field('description'); ?></p>
							</div>
						</div>
						<?php
					}
					wp_reset_postdata();
				 ?>
			</div>
		</div>
	</div>
</section>