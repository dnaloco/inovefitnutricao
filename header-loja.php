<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">


<?php wp_head(); ?>


<!-- Loja Scripts  -->
<script src="/wp-content/scripts/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="/wp-content/scripts/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
<script src="/wp-content/themes/lojablog/bower_components/foundation-sites/dist/foundation.min.js"></script>


<!-- Loja Styles  -->
<link rel="stylesheet" href="/wp-content/themes/lojablog/stylesheets/style.css">
<link rel="stylesheet" href="/wp-content/scripts/jquery-ui-1.12.1/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
</head>
<body id="body-loja">
	<?php if (is_user_logged_in()): ?>
		<div class="admin-bar-margin"></div>
	<?php endif; ?>

	<header id="main-header-loja">
		<div class="row">
			<div class="large-2 columns logo-col">
				<a href="/loja/"><div class="site-logo"></div></a>
			</div>
			<div class="large-3 columns description-col">
				<h1 class="site-title"></h1>
				<h2 class="site-description"><?php bloginfo('description'); ?></h2>
			</div>
			<div class="large-3 columns info">
				DELIVERY <br>
				(11) 5181-6798 <br>
				<span class="icon-whatsapp2"></span> (11) 99821-2112 <br>
				De seg. à sex, das 11 às 15 h.
			</div>
			<div class="large-4 columns search-widget-loja">
				<?php get_search_form(true); ?>
				<h3 class="da-follow-us">Siga-nos e dê uma curtida <span class="icon-wink2"></span></h3>
				<?php if ( is_active_sidebar( 'widget04loja' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area widget-social" role="complementary">
						<?php dynamic_sidebar( 'widget04loja' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>

			</div>
		</div>
	</header>
	
	
	<nav id="main-nav-loja" class="menu-centered">
		<div class="title-bar" data-responsive-toggle="menu-loja-menu" data-hide-for="medium">
		  <button class="menu-icon" type="button" data-toggle></button>
		  <div class="title-bar-title">Menu</div>
		</div>
		<?php wp_nav_menu( array( 'menu' => 'Loja Menu', 'container_class' => 'menu' ) ); ?>
	</nav>