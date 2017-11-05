<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title> <!-- That Simple -->
  <?php wp_head();?>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_bloginfo('template_url') . '/assets/images/favicon.ico'; ?>" />
</head>
<body>
<?php get_template_part('elements/site-header'); ?>
