<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome-4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/wow/animate.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/wow/animate.css">

	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">

	<meta content="telephone=no" name="format-detection"/>
	
	<?php wp_head(); ?>
</head>
<body>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/owl.carousel/owl.carousel.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/wow/wow.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveTabs.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

	<script>
    	new WOW().init();
    </script>

<?php if(is_home()){ ?>

	<section class="ah-headertop">
	    <div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 ah-toppad">
					<div class="anz-menu">
						<input type="checkbox" id="check_1" class=""/>
						<label class="anz-menu-ch" for="check_1"><i class="fa fa-bars" aria-hidden="true"></i></label>
						<div class="anz-perspective">
							<div class="menu-list-pressed">
								<ul class="main-menu main-menu_style ah-menu-list1">
								    <li><label class="anz-menu-ch1" for="check_1"><i class="fa fa-times" aria-hidden="true"></i></label></li>
								    <li><a href="#ah-aboutus">О нас</a></li>
									<li><a href="#ah-weoffer">Клиентам</a></li>
									<li><a href="#ah-services">Наши услуги</a></li>
									<li><a href="#ah-testimonials">Отзывы</a></li>
									<li><a href="#ah-contacts">Связаться с нами</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="ah-topblock1">
						<i class="fa fa-clock-o"></i><span class="ah-topblock1-span">Mon - Sat 8.00 - 18.00</span>
					</div>
					<div class="ah-topblock1">
						<i class="fa fa-headphones"></i><span class="ah-topblock1-span">Call Free: +7 (8662) 42-33-26</span>
					</div>
					<div class="ah-topblock1">
						<i class="fa fa-envelope"></i><span class="ah-topblock1-span">a_02nck@tch.ru</span>
					</div>
					<div class="ah-soc">
						<a href="#" class="facebook">
	                        <i class="fa fa-facebook bo-social-facebook"></i>
	                    </a>
						<a href="#" class="instagram">
	                        <i class="fa fa-instagram"></i>
	                    </a>
	                    <a href="#" class="vk">
	                        <i class="fa fa-vk"></i>
	                    </a>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-12 col-sm-12 col-xs-12 ah-toppad1">
					<div class="ah-table">
						<div class="ah-logobox">
							<a href="/"><span class="ah-logobox-span">Агентство воздушных сообщений<br><span>ООО"Транссервисавиа"</span></span></a>
						</div>
						<div class="ah-menu">
							<ul class="ah-menu-list">
								<li><a href="#ah-aboutus">О нас</a></li>
								<li><a href="#ah-weoffer">Клиентам</a></li>
								<li><a href="#ah-services">Наши услуги</a></li>
								<li><a href="#ah-testimonials">Отзывы</a></li>
								<li><a href="#ah-contacts">Связаться с нами</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12">
					<span class="ah-slogan">Работа проверенная<br><span>временем</span></span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>

<?php } else { ?>

	<section class="ah-headertop2">
	    <div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 ah-toppad">
					<div class="ah-topblock1">
						<i class="fa fa-clock-o"></i><span class="ah-topblock1-span">Mon - Sat 8.00 - 18.00</span>
					</div>
					<div class="ah-topblock1">
						<i class="fa fa-headphones"></i><span class="ah-topblock1-span">Call Free: +7 (8662) 42-33-26</span>
					</div>
					<div class="ah-topblock1">
						<i class="fa fa-envelope"></i><span class="ah-topblock1-span">a_02nck@tch.ru</span>
					</div>
					<div class="ah-soc">
						<a href="#" class="facebook">
	                        <i class="fa fa-facebook bo-social-facebook"></i>
	                    </a>
						<a href="#" class="instagram">
	                        <i class="fa fa-instagram"></i>
	                    </a>
	                    <a href="#" class="vk">
	                        <i class="fa fa-vk"></i>
	                    </a>
					</div>
				</div>

				<div class="clearfix"></div>

				<div class="col-md-12 col-sm-12 col-xs-12 ah-toppad1">
					<div class="ah-table">
						<div class="ah-logobox">
							<a href="/"><span class="ah-logobox-span">Агентство воздушных сообщений<br><span>ООО"Транссервисавиа"</span></span></a>
						</div>
						<div class="ah-menu">
							<ul class="ah-menu-list">
								<li><a href="#ah-aboutus">О нас</a></li>
								<li><a href="#ah-weoffer">Клиентам</a></li>
								<li><a href="#ah-services">Наши услуги</a></li>
								<li><a href="#ah-testimonials">Отзывы</a></li>
								<li><a href="#ah-contacts">Связаться с нами</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>

<?php } ?>

<?php wp_reset_query(); ?>
