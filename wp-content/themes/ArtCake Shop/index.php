<?php get_header(); ?>
	<section class="preview" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/two.jpg') no-repeat left bottom; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="item col-12 offset-md-2 col-md-8">
					<div>
						<h2>Сделаем Вашу жизнь слаще за один укус!</h2>
						<a href="<?php the_permalink(39); ?>" class="button">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="left col-12 col-lg-6">
					<div class="title">
						<span class="small-title-orange">О нас и наших изделиях</span>
						<h2>Торты и пирожные с настоящей любовью!</h2>
					</div>
					<p>Какой-то интересный текст, который рассказывается про нас и наше производство тортиков, которые очень вкусные. Рассказ интересный, читается с любовью.</p>
				</div>
				<div class="right col-12 col-lg-6">
					<div class="about_bar">
                        <div class="about_bar_item">
                            <p>Мастерство повара</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap" style="display: inline;"><span class="tip" style="left: 494.266px; transition: left 2s ease-in-out 0s;">95%</span></div>
                                <span class="fill" data-percentage="95" style="background: rgb(17, 17, 17);width: 527.25px;transition: width 2s ease-in-out 0s;"></span>
                            </div>
                        </div>
                        <div class="about_bar_item">
                            <p>Идеальных кексов</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap" style="display: inline;"><span class="tip" style="left: 409.031px; transition: left 2s ease-in-out 0s;">80%</span></div>
                                <span class="fill" data-percentage="80" style="background: rgb(17, 17, 17); width: 444px; transition: width 2s ease-in-out 0s;"></span>
                            </div>
                        </div>
                        <div class="about_bar_item">
                            <p>Довольных клиентов</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap" style="display: inline;"><span class="tip" style="left: 464.938px; transition: left 2s ease-in-out 0s;">90%</span></div>
                                <span class="fill" data-percentage="90" style="background: rgb(17, 17, 17); width: 499.5px; transition: width 2s ease-in-out 0s;"></span>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</section>
	<section class="categories">
		<div class="container">
			<div class="row">
				<div class="wrapper-categories col-12">
					<div class="item">
						<a id="one-block" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cupcake.svg"><br>
							<span>Пирожные</span>
						</a>
					</div>
					<div class="item">
						<a id="two-block" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/birthday-cake.svg"><br>
							<span>Торты</span>
						</a>
					</div>
					<div class="item">
						<a id="three-block" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/macaron.svg"><br>
							<span>Пончики</span>
						</a>
					</div>
					<div class="item">
						<a id="four-block" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/macaron.svg"><br>
							<span>Кексы</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="grid-product index">
		<div class="container">
			<div class="row">
				<?php 
				$count = array( 'one', 'two', 'three', 'four' );
				$name_tax = array( 'cake', 'pie', 'donut', 'cupcake' );
				for ($i = 0; $i < 4; $i++) {
					?>
					<div id="<?=$count[$i]?>-block" class="grid col-12 animate__animated">
						<?php 
							$posts = get_posts( array(
								'numberposts' => 8,
								'post_type'   => 'product',
								'orderby'     => 'date',
								'tax_query' => array(
							        array(
							            'taxonomy' => 'categories_product',
							            'field'    => 'slug',
							            'terms'    => $name_tax[$i] 
							        )
							    ),
					            'suppress_filters' => true
							));

							foreach ($posts as $post) {
								setup_postdata($post);
								get_template_part('templates/item_grid');
							}
							wp_reset_postdata();
						?>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
	<?php get_template_part('templates/testimonial'); ?>
	<section class="social">
		<div class="container">
			<div class="row">
				<div class="left col-12 col-lg-5">
					<span class="small-title-orange">Подпишитесь на Instagram</span>
					<h2>Сладкие мгновения сохраняются как воспоминания.</h2>
					<div class="link">
						<a href="<?php the_field('link_instagram', 59); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg">@linkforinst</a>
					</div>
				</div>
				<div class="right col-12 col-lg-7">
					<div class="item col-4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-1.jpg">
					</div>
					<div class="item middle col-4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-2.jpg">
					</div>
					<div class="item col-4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-3.jpg">
					</div>
					<div class="item col-4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-4.jpg">
					</div>
					<div class="item middle col-4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-6.jpg">
					</div>
					<div class="item col-4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/inst-3.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
