<!DOCTYPE html>
<html lang="ru">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<?php wp_head() ?>
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="logo col-12">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></a>
				</div>
			</div>
		</div>
		<div class="menu">
			<div class="container">
				<div class="row">
					<div class="menu-ul col-12">
						<nav>
							<ul>
								<?php wp_nav_menu(array(
						    		'theme_location' => 'header',
						    		'container' => null,
						    		'items_wrap' => '%3$s'
						    	)); ?>
					    		<li class="WhatsApp"><?php echo do_shortcode('[ht-ctc-chat]'); ?></li>
					    	</ul>
						</nav>
					</div>
					<div class="mobile-menu disable col-12">
						<nav>
							<ul>
								<?php wp_nav_menu(array(
						    		'theme_location' => 'header',
						    		'container' => null,
						    		'items_wrap' => '%3$s'
						    	)); ?>
					    		
							</ul>
						</nav>
					</div>
					<div class="mobile-menu-button">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>
	</header>