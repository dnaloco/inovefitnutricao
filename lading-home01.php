<?php
/**
 * Template Name: Lading Home 01
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
	<title>Document</title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-content/themes/lojablog/stylesheets/landings.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>
<body id="landing-home-01">
	<div id="main-banner-page">
		<div class="left-flip">
			<a href="/loja/">
				<div class="flip-side side-a">
					<div class="flip-content">
						<h2 style='color: white'>Clique neste lado do banner para conhecer a nossa loja!</h2>
						<br>
						<p>
							A Inove fit veio para inovar com alimentos do seu dia-a-dia em versões FIT. Trabalhamos com marmitas e doces fit, além dos nossos salgados marombas.
						</p>
					</div>
				</div>
				<div class="flip-side side-b">
					<div class="logo logo-verde"></div>
				</div>
			</a>

		</div>
		<div class="right-flip">
			<a href="/blog/">
				<div class="flip-side side-a">
					<div class="flip-content">
						<h2 style='color: white'>Clique neste lado do banner para visitar o nosso blog!</h2>
					</div>
				</div>
				<div class="flip-side side-b">
					<div class="logo logo-roxo"></div>
				</div>
			</a>
		</div>
	</div>

	<script src="/wp-content/scripts/flip.js"></script>
</body>
</html>
