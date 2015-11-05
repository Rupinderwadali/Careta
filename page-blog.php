

<?php get_header(); ?>


<div id="proj">
<?php

  query_posts( array ( 'category_name' => 'blog', 'posts_per_page' => 4 ) );
  while (have_posts()) : the_post();?>
  <div id="free"></div>
  
<div  align="center" id="tit"><?php the_title();?></div>
<div id="free1"></div>
 <div id= "foto"> <?php the_post_thumbnail();?></div>
  <div id ="cont">
 <?php
  the_content();
 ?>
</div>
<?php  
endwhile;
?>

</div>
<?php get_sidebar();?>
<?php get_footer();?>


