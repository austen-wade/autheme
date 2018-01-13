<?php 
	/* Template Name: Article Template */
	get_header();
?>
<div class="page-content-wrapper">
	<div class="article">
		<div class="banner">
			<div class="overlay">
				<div class="title">
					<?php echo get_the_title(); ?>	
				</div>
			</div>
		</div>
		<main class="main-content">
			<div class="left">
				<?php 
				if (have_posts()) :
					while (have_posts()) :
						the_post();
						the_content();
					endwhile;
				endif;
				?>
			</div>
			<div class="right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"></div>
		</main>
	</div>
</div>
<?php get_footer(); ?>
