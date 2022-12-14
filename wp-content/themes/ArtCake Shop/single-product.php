<?php get_header(); ?>
	<section class="wrapper-page">
		<div class="container">
			<div class="row">
				<div class="title col-12">
					<h2>Описание продукта</h2>
					<br>
					<div class="bread">
						<span><a href="<?php echo home_url(); ?>">Главная</a> | <a href="<?php the_permalink(); ?>" class="active">Описание</a></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="content-item">
		<div class="container">
			<div class="row">
				<div class="preview-image col-lg-6">
					<div class="big-preview">
						<img src="<?php the_field('image-product'); ?>">
					</div>
					<div class="small-preview">
						<div class="item">
							<img src="<?php the_field('image-1'); ?>">
						</div>
						<div class="item">
							<img src="<?php the_field('image-2'); ?>">
						</div>
						<div class="item">
							<img src="<?php the_field('image-3'); ?>">
						</div>
						<div class="item">
							<img src="<?php the_field('image-4'); ?>">
						</div>
					</div>
				</div>
				<div class="description-image col-lg-6">
					<span class="category"><?php $terms = get_the_terms( $post->ID, 'categories_product' );
				echo $terms[0]->name; ?></span>
					<h4><?php the_title(); ?></h4>
					<span class="name"><?php the_field('price_product'); ?> ₽.</span>
					<hr>
					<p><?php the_field('description-product') ?></p>
					<div class="option">
						<p>Категория: <span><?php $terms = get_the_terms( $post->ID, 'categories_product' );
				echo $terms[0]->name; ?></span></p>
						<p>Тэги: <span><?php the_field('tags-product'); ?></span></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="popular grid-product">
		<div class="container">
			<div class="row">
				<div class="title col-12">
					<h2>Популярные товары</h2>
				</div>
				<div class="owl-carousel popular-carousel grid col-12">
					<?php 
						$posts = get_posts( array(
							'numberposts' => 6,
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
<?php get_footer(); ?>