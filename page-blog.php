

<?php get_header(); ?>



<?php
  echo "Hello";
  query_posts( array ( 'category_name' => 'blog', 'posts_per_page' => 4 ) );
  while (have_posts()) : the_post();
  the_post_thumbnail();
  the_title();
  the_content();
endwhile;
?>

<?php get_sidebar();?>
<?php get_footer();?>


