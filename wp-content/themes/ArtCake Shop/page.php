<?php get_header(); ?>
<?php if ($post->ID == 37) /* About */ { ?>
	<section class="wrapper-page">
		<div class="container">
			<div class="row">
				<div class="title col-12">
					<h2>О нас</h2>
					<div class="bread">
						<span><a href="<?php echo home_url(); ?>">Главная</a> | <a href="<?php the_permalink(); ?>" class="active">О нас</a></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="about-video">
		<div class="container">
			<div class="row">
				<div class="about-video-img col-12" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/about-video.jpg') no-repeat; background-size: cover;"></div>
			</div>
		</div>
	</section>
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="left col-lg-6">
					<div class="title">
						<span class="small-title-orange">О нас и наших изделиях</span>
						<h2>Торты и пирожные с настоящей любовью!</h2>
					</div>
					<p>Какой-то интересный текст, который рассказывается про нас и наше производство тортиков, которые очень вкусные. Рассказ интересный, читается с любовью.</p>
				</div>
				<div class="right col-lg-6">
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
<?php } ?>
<?php if ($post->ID == 44) /* Contact */ { ?>
	<section class="wrapper-page">
		<div class="container">
			<div class="row">
				<div class="title col-12">
					<h2>Контакты</h2>
					<div class="bread">
						<span><a href="<?php echo home_url(); ?>">Главная</a> | <a href="<?php the_permalink(); ?>" class="active">Контакты</a></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="list-contact">
		<div class="container">
			<div class="row">
				<ul class="list offset-3 col-6 offset-md-4 col-md-4">
					<li class="city">Краснодар</li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.svg"><?php the_field('address', 59); ?></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-ringing.svg"><span class="tel-js"><?php the_field('number_whatsapp', 59); ?></span></li>
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/message.svg"><?php the_field('email', 59); ?></li>
				</ul>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<hr class="col-12">
			</div>
		</div>
	</section>
	<section class="contact-me">
		<div class="container">
			<div class="row">
				<div class="description col-lg-4">
					<h2 style="font-size: 30px;">Напишите Нам</h2>
					<p>Время ответов на обращения:</p>
					<p>Пн - Пт: с 12:00 до 16:00</p>
					<p>Сб - Вс: с 10:00 до 18:00</p>
				</div>
				<div class="form-contact col-lg-8">
					<?php echo do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]');?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
<?php if ($post->ID == 41) /* Testimonial */ { ?>
	<?php get_template_part('templates/testimonial'); ?>
<?php } ?>
<?php get_footer(); ?>