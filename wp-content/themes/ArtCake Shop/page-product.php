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
	<section class="grid-product">
		<div class="container">
			<div class="row">
				<div class="grid col-12">
					<?php
						$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
						$the_query = new WP_Query( array(
						'posts_per_page' => 16,
						'paged'          => $paged,
						'post_type'   => 'product',
						'suppress_filters' => true
						) );
						while( $the_query->have_posts() ){
							$the_query->the_post();
							get_template_part('templates/item_grid');
						} 
						wp_reset_postdata();
					?>
				</div>
				<div class="my_pagination col-12">
					<?php 
						$big = 999999999;
							echo paginate_links( array(
							'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) 
							),
							'format'  => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total'   => $the_query->max_num_pages
							) );
					?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>