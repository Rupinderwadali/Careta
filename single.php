<?php
		$displayTags = (bool) get_theme_mod('careta_display_tags', true);
		$displayAuthor = (bool) get_theme_mod('careta_display_author', true);
		$displayCategory = (bool) get_theme_mod('careta_display_category', true);
		$displayDate = (bool) get_theme_mod('careta_display_date', true);
        $displaySidebar = (bool) get_theme_mod('careta_display_sidebar', false);
        
        
?>

<?php get_header(); ?>
    <?php if ($displaySidebar) { ?>
        <div id="post-grid">
            <div id="post-grid-left">
    <?php } ?>

	<div class="single-post">
		<?php if(have_posts()) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail(); ?>
			<?php  the_content(); ?>
		
        	<?php endif; ?>
		<div class="buy-form">
			<h1> Wanna Get it? </h1>
			<form>
			<span class="title">Date:</span><br>
  			<input type="text" name="date">
  			<br>
  			<span class="title">Amount</span><br>
  			<input type="text" name="amount">
			<br>
			<span class="title">Address:</span><br>
			<textarea rows="4" cols="30"></textarea>
			<br>
			<button type="submit" value="Submit" class="submit">Buy</button>

</form>

		</div>
	</div>

	

<?php get_footer(); ?>
