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
  <div id= "selected-area">
    <?php
     $terms = get_terms('area');
     foreach($terms as $term) : ?>
        <div class = "<?php echo $term->name ?>">
                <?php
	
                $posts = new WP_Query(array('area' => $term->slug));
		echo $term->slug;
                if( $posts->have_posts() ):?>
                <div class="room"></div>
                <?php   while( $posts->have_posts() ) :
                       $posts->the_post();?>
                         <?php the_post_thumbnail();?>

        <div class="post_title">
                <a href ="<?php the_permalink();?>"><?php the_title();?></a>
                </div>
       
                <?php
                        endwhile;
                endif;
                ?>
        </div>
<?php
endforeach; ?>

  </div> <!--selected-area -->
		</div><!--post-list -->
		
		<div id="post-navi">
			<?php 
				$big = 999999999; 
				if ($wp_query->max_num_pages > 1) echo __('Pages','default') . ' : ' ;
				echo paginate_links(array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ), 
						'format' => '?paged=%#%', 'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						'prev_next' => False
				));
			?>
		</div>
