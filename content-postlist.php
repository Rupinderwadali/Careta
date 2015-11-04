<div id="post-list">
 <div id="all"> 
   <?php
     while(have_posts()) 
	{
	  the_post();
	    {  
  	      get_template_part( 'content', 'entry' );
	    }	
	} 
    ?>
  </div><!--all -->
    <?php
     $terms = get_terms('area');
     foreach($terms as $term) : ?>
                <?php
                $posts = new WP_Query(array('area' => $term->slug));
                if( $posts->have_posts() ):?>
                <?php   
		while( $posts->have_posts() ) :
                       $posts->the_post();?>
		   <div class="complete-post <?php echo $term->name ?>">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail();?>
			</a>
			<div class="mask mask-1"></div>
			<div class="mask mask-2"></div>
			<div class="content-text">
			  <a href="<?php the_permalink(); ?>">
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
			  </a>
               	 	</div>
		   </div>
       
                <?php
                        endwhile;
                endif;
                ?>
<?php
endforeach; ?>

		</div><!--post-list -->
		
