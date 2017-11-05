<div id="banner" style="background-image: url(<?php the_field('sh_background', 'option') ?>);">
  <header>
    <div class="logoname">
      <a href="<?php echo home_url();?>"><img class="logo" src="<?php echo get_bloginfo('template_url') . '/assets/images/whitelogo.png'; ?>" alt="logotipas"></a>
    </div>
    <nav>
    <div class="burger"></div>
    <?php menu('primary-navigation', 'navigation');?>
    </nav>
  </header>
  <!-- Atitinkamai nuo laiko raso laba diena, vakaras, rytas -->

  <h1 id="pasisveikinimas"><?php the_field('sh_title', 'option'); ?></h1>

  <blockquote class="citata">
    <?php the_field('sh_blockquote', 'option'); ?>
    <footer>
      - <cite><?php the_field('sh_cite', 'option'); ?></cite>
    </footer>
  </blockquote>
</div>
