<?php get_header(); ?>
	<div id="post">
		<div class="post-content">
		<?php while(have_posts()) : the_post(); ?>

		<?php
				$displayTags = (bool) get_theme_mod('careta_display_tags', true);
				$displayAuthor = (bool) get_theme_mod('careta_display_author', true);
				$displayCategory = (bool) get_theme_mod('careta_display_category', true);
				$displayDate = (bool) get_theme_mod('careta_display_date', true);
		?>

		<div id="post-details">
			<?php if($displayDate) : ?>
				<div class="post-date">
					<span class="genericon-small genericon-month"></span><?php the_date(); ?>
				</div>
			<?php endif; ?>
		</div>
		
		<h3><?php the_title(); ?></h3>
		<?php  the_content(); ?>
			
		

			

		
		
		<?php if($displayCategory && get_the_category()) : ?>
			<p>
			<span class="genericon-small genericon-category"></span>
			<?php
			echo _e('Categories','default') . "&nbsp;&nbsp;";
			$categories = get_the_category();
			$separator = ' ';
			$output = '';
			query_posts( array ( 'category_name' => 'blog post', 'posts_per_page' => 4 ) );
			  while (have_posts()) : the_post();
			  the_content();
			  endwhile;

	
			?>	
			</p>				
		<?php endif; ?>

		
		<?php comments_template(); ?>			
		</div>
	<?php endwhile; ?>
	</div>
<?php get_footer(); ?>

