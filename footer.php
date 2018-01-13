<?php 
	/* Footer Template */
?>

<footer class="footer">
	<nav>
		<div class="footer-navigation">
			<p>Social Media Links</p>
			<?php 
				wp_nav_menu( $arg = array(
				'menu_class' => 'social-media-links',
				'theme_location' => 'footer'
			));
			?>
			<!-- <p>Theme by Austen Wade</p> -->
		</div>
	</nav>
</footer>


<script type="text/javascript">
	var hamburgerButton = document.querySelector('.hamburger-button'),
		mobileNav = document.querySelector('.mobile-nav'),
		navCloseButton = document.querySelector('.hamburger-button-close');
	
	hamburgerButton.addEventListener('click', function() {
		openMobileNav();
	});
	
	navCloseButton.addEventListener('click', function() {
		closeMobileNav();
	})

	function openMobileNav() {
		mobileNav.style.display = 'block';
	}

	function closeMobileNav() {
		mobileNav.style.display = 'none';
	}
</script>

</body>
</html>