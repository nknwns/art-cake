<div class="item">
	<a href="<?php the_permalink(); ?>">
		<img src="<?php the_field('image-product'); ?>">
		<div class="label-category">
			<span>
				<?php $terms = get_the_terms( $post->ID, 'categories_product' );
				echo $terms[0]->name; ?>
					</span>
		</div>
		<p class="name"><?php the_title(); ?></p>
		<p class="price"><?php the_field('price_product'); ?> ₽</p>
		<p class="buy">Подробнее</p>
	</a>
</div>