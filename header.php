<?php 
	/* Main Header Template */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<?php wp_head(); ?>
</head>

<body>
<header class="header">
	<nav>
		<a class="logo-link" href="/wordpress">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/WordPress_logo.svg/2000px-WordPress_logo.svg.png" class="logo">
		</a>
		<?php 
			wp_nav_menu( $arg = array(
				'menu_class' => 'main-navigation-desktop',
				'theme_location' => 'primary'
			) );
		// font awesome attempt vvv
		?>
		<div class="hamburger-button">
			<div class="bars">&#9776</div>
		</div>
	</nav>
	<div class="mobile-nav">
		<div class="hamburger-button-close">
			<div class="bars">&#9776</div>
		</div>
		<?php 
			wp_nav_menu( $arg = array(
				'menu_class' => 'main-navigation-desktop',
				'theme_location' => 'primary'
			) );
		// font awesome attempt vvv
		?>
	</div>
</header>