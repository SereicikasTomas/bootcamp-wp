<?php
$post_data = get_post(86);
global $post;
$post = $post_data;
setup_postdata($post);
?>
<section id="works" class="workbox">
  <h4><?php the_title(); ?></h4>
  <?php the_content(); ?>
  <?php wp_reset_postdata();?>

  <?php

  $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $my_query = new WP_Query(array(
    'post_type' => 'Portfolio',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'DESC',
    'paged' => $page,
  ));

  if ( $my_query->have_posts() ) :
  ?>
    <div class="work_container">
      <?php $i = 1; while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <a href="#">
        <img class="fancybox" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>">
      </a>
      <?php $i++; endwhile; ?>
  <?php wp_reset_postdata(); unset($my_query); endif; ?>
    </div>
</section>
