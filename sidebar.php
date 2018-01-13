<?php 
	/* The templtae for the Main Sidebar */

?>

<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
	<aside class="sidebar-container widget-area">
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</aside>
<?php endif; ?>