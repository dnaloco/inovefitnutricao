<?php
/**
 * Template Name: Countdown Home
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="google-site-verification" content="fJ8fBBfDpF_4auVYTnRjHKKtWT5WPFcae7NvHEN4dsk" />

	<title>Document</title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-content/assets/css/foundation.min.css">
	<link rel="stylesheet" href="/wp-content/themes/lojablog/stylesheets/countdown.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body id="landing-home-01">

	<?php if (is_user_logged_in()): ?>
		<div class="admin-bar-margin"></div>
	<?php endif; ?>
	<div id="main-banner-page">

		<div class="row">
			<div class="columns large-6">
				<h2 class="title-page">A Inove Fit está preparando uma mega surpresa para o novo ano de 2017, para você iniciar com o pé direito. <br> Não perca e fique ligado. </h2>
			</div>
			<div class="columns large-6">
				<h3 class="newsletter-call">
					Saiba antes de todo mundo para aproveitar e ter descontos e promoções imperdíveis!
				</h3>
				<div class="newsletter row">
					<?php echo do_shortcode('[newsletter_form form="2"]'); ?>
				</div>
			</div>
		</div>

		<div class="countdown">
		<h2 class="title-page">
			CONTAGEM REGRESSIVA
		</h2>
		<?php echo do_shortcode('[wpcdt-countdown id="12"]'); ?>
		</div>
	</div>

	<?php wp_footer(); ?>

	<script src="/wp-content/scripts/jquery.countdown.min.js"></script>

	<script>
		(function ($) {
			$('#clock').countdown('2017/01/09', function(event) {
			  var $this = $(this).html(event.strftime(''
			    + '<span>%w</span> semanas '
			    + '<span>%d</span> dias '
			    + '<span>%H</span> hr '
			    + '<span>%M</span> min '
			    + '<span>%S</span> seg'));
			});
		})(jQuery);

	</script>
</body>
</html>
