<?php
$post_data = get_post(65);
global $post;
$post = $post_data;
setup_postdata($post);
?>
<section id="contacts" class="contactbox">
  <h4><?php the_title(); ?></h4>
  <?php the_content(); ?>
  <?php wp_reset_postdata();?>
  <div id="map"></div>
    <div class="contact_container">
      <div class="email">
        <h4><?php _e('Elektroninis paštas', 'vcs-starter'); ?></h4>
        <p><a href="mailto:<?php the_field('cp_email', 'option') ?>"><?php the_field('cp_email', 'option') ?></a></p>
      </div>
      <div class="phone">
        <h4><?php _e('Mobilus telefonas', 'vcs-starter'); ?></h4>
        <p><a href="tel:<?php the_field('cp_phone', 'option') ?>"><?php the_field('cp_phone', 'option') ?></a></p>
      </div>
      <div class="social">
        <h4><?php _e('Socialiniai tinklai', 'vcs-starter'); ?></h4>
        <ul class="socialmedia">
          <?php if( $facebook = get_field('cp_facebook', 'option')):?>
          <a href="<?php echo $facebook; ?>" target="_blank"><li class="facebook"></li></a>
          <?php endif; ?>
          <a href="<?php the_field('cp_linkedin', 'option') ?>" target="_blank"><li class="linkedin"></li></a>
          <?php if( $instagram = get_field('cp_instagram', 'option')):?>
          <a href="<?php echo $instagram; ?>" target="_blank"><li class="instagram"></li></a>
          <?php endif; ?>
          <?php if( $github = get_field('cp_github', 'option')):?>
          <a href="<?php echo $github; ?>" target="_blank"><li class="github"></li></a>
          <?php endif; ?>
        </ul>
      </div>
    </div>
</section>
