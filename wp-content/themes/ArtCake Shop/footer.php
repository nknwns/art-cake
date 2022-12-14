	<footer class="footer" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/footer-bg.jpg') no-repeat top center; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="hours col-12 col-sm-4">
					<h4>Часы работы</h4>
					<ul>
						<li>Понедельник - Пятница: <?php the_field('first_work_time', 59); ?></li>
						<li>Суббота: <?php the_field('second[1]_work_time', 59); ?></li>
						<li>Воскресенье: <?php the_field('second[2]_work_time', 59); ?></li>
					</ul>
				</div>
				<div class="logo col-12 col-sm-4">
					<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png"></a>
					<p>Тут что-то про нас написано, о нашем бизнесе там, о вкусных тортиках и так далее. Это небольшой текст, символизирующий нас</p>
				</div>
				<div class="contact col-12 col-sm-4">
					<h4>Свяжитесь с нами</h4>
					<p>Напишите нам свой Email</p>
					<form action="#">
						<input type="text" name="Email" placeholder="Email">
						<button type="button" id="sendMail"><img style="height: 24px; width: 20px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/send-mail.svg"></button>
					</form>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>