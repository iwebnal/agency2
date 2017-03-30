<?php get_header(); ?>
	
	<section id="ah-aboutus" class="ah-aboutus">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<span class="ah-aboutus-text1">О нас</span>
					<span class="ah-aboutus-text2">Здравствуйте!</span>
					<?php wp_reset_query(); ?>
					<?php $wp_query = new WP_Query('page_id=4'); ?>
					<?php if ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<div class="ah-aboutus-text">
						<?php the_content(); ?>
					</div>
					<a href="<?php the_permalink(); ?>" class="ah-aboutus-link">Читать</a>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="ah-aboutus-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/direktor.jpg" class="img-responsive" alt="direktor">
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="ah-services" class="ah-services">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<span class="ah-aboutus-text1">Наши услуги</span>
					<span class="ah-services-text">Специальные услуги</span>
				</div>

				<div class="clearfix"></div>
				
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ah-slider">
						<?php wp_reset_query(); ?>
						<?php $wp_query = new WP_Query('cat=2'); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="item">
							<div class="ah-slider-imgbox">
								<?php the_post_thumbnail('full'); ?>
							</div>
							<div class="ah-slider-textbox">
								<span class="ah-slider-link"><?php the_title(); ?></span>
								<?php the_content(); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="ah-aboutus-link ah-slider-link1">Читать</a>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="ah-weoffer" class="ah-weoffer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<span class="ah-aboutus-text1">Для наших клиентов</span>
					<span class="ah-weoffer-text2">Информация по услугам</span>
					<div class="ah-weoffer-box">
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
					</div>
					<div class="ah-weoffer-box">
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-subway" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-subway" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-subway" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
					</div>
					<div class="ah-weoffer-box">
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-binoculars" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
						<div class="box1">
							<a href="#" class="ah-box1-span">
							<div class="ah-box-img">
								<i class="fa fa-binoculars" aria-hidden="true"></i>
							</div>
							Lorem ipsum dolor</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam nulla minus perferendis accusantium doloremque dolor</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="ah-testimonials" class="ah-testimonials">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<span class="ah-aboutus-text1">Наши отзывы</span>
					<span class="ah-services-text">То, что говорят о нас люди</span>
				</div>

				<div class="clearfix"></div>
				
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="ah-slider1">
						<?php wp_reset_query(); ?>
						<?php $wp_query = new WP_Query('cat=3'); ?>
						<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
						<div class="item">
							<div class="ah-slider1-textbox">
								<?php the_content(); ?>
							</div>
							<div class="ah-slider1-imgbox">
								<?php the_post_thumbnail('full'); ?>
							</div>
							<span class="ah-slider1-span"><?php echo get_field('должность'); ?></span>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="ah-contacts" class="ah-contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 ah-contacts-fon">
					<span class="ah-aboutus-text1">Форма для связи</span>
					<span class="ah-aboutus-text2 ah-contacts-text2">Свяжитесь с нами!</span>
					<form action="" class="ah-common-form">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="uname" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" name="tel" placeholder="+7 900 000 00 00" class="phone">
							</div>
							<div class="clearfix"></div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="submit" value="Отправить">
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="ah-contacts-imgbox">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cont.jpg" class="img-responsive" alt="cont.jpg">
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<div class="ah-map">
		<iframe src="https://api-maps.yandex.ru/frame/v1/-/CZw5BGIo" width="100%" height="465" frameborder="0"></iframe>
	</div>
	
	
<?php get_footer(); ?>