<?php get_header(); ?>
	<section class="wrapper-page">
		<div class="container">
			<div class="row">
				<div class="title col-12">
					<h2>Каталог</h2>
					<div class="bread">
						<span><a href="<?php echo home_url(); ?>">Главная</a> | <a href="<?php the_permalink(); ?>" class="active">Каталог</a></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="search-form">
		<div class="container">
			<div class="row">
				<div class="search col-lg-12">
					<?php echo do_shortcode( '[searchandfilter fields="search,categories_product" show_count="1" search_placeholder="Поиск" post_types="product" add_search_param="1" submit_label="Просмотреть результат"]' ); ?>
				</div>
				
			</div>
		</div>
	</section>
	 <?php if (have_posts()) { ?>
	<section class="grid-product">
		<div class="container">
			<div class="row">
				<div class="grid col-12 animate__animated">
					<?php 
						while (have_posts()) {
							the_post();
							get_template_part('templates/item_grid');
						}
					?>
				</div>
				<?php the_posts_pagination(); ?>
			</div>
		</div>
	</section>
	<?php } else { ?>
	<section class="grid-product">
		<div class="container">
			<div class="row">
				<div class="not-found col-12">
					<span class="small-title-orange" style="text-align: center;">По Вашему запросу ничего не найдено..</span>
					<hr>
					<span class="small-title-orange">Но у нас есть кое-что интересное:</span>
				</div>
				<div class="grid col-12 animate__animated">
					<?php 
						$posts = get_posts( array(
							'numberposts' => 12,
							'post_type'   => 'product',
							'orderby'     => 'rand',
				            'suppress_filters' => true
						));

						foreach ($posts as $post) {
							setup_postdata($post);
							get_template_part('templates/item_grid');
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</section>
	<?php }?>
 <?php get_footer(); ?>