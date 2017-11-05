<?php
if($section = get_field('hps_about_me_section')):
$post_data = get_post($section[0]);
global $post;
$post = $post_data;
setup_postdata($post);
?>
<section id="about" class="aboutbox" itemscope itemtype="http://schema.org/Person">
      <h4><?php the_title(); ?></h4>
      <?php the_content(); ?>
      <?php wp_reset_postdata();?>
      <div class="about_container">
        <img class="manonuotrauka" src="<?php the_field('a_mypicture', 'option'); ?>" alt="Tomo Sereičiko nuotrauka" itemprop="image">
        <p><?php the_field('a_aboutme', 'option'); ?></p>
      </div>
</section>
<?php endif; ?>
