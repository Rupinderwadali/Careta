<?php get_header(); ?>
<?php
   $args = array('category_name' => 'blog');
   $post_array = new WP_Query($args);
	if($post_array->have_posts()):
		while ($post_array->have_posts()) : 
			$post_array->the_post();
			the_post_thumbnail();
		endwhile;
	endif;
?>
	
<?php get_footer(); ?>

