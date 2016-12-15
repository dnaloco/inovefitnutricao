<?php 
get_header('loja'); ?>


<link rel="stylesheet" href="/wp-content/plugins/woocommerce/assets/css/woocommerce.css">
	<main class="row da-content-page" role="main" itemprop="mainContentOfPage">
		<div class="large-9 columns">
		<?php 

		woocommerce_content(); 

		?>
		</div>
		<div class="large-3 columns">
			<?php if ( is_active_sidebar( 'widgetwoo' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widgetwoo' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		</div>

	</main><!-- .content -->

<?php get_footer(); ?>