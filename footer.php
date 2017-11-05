<?php get_template_part('elements/site-footer'); ?>
<script type="text/javascript">
  var today = new Date()
  var curHr = today.getHours()

  if (curHr < 12 && curHr > 5) {
    document.getElementById("pasisveikinimas").innerHTML = "<?php the_field('sh_titleformorning', 'option'); ?>"
  } else if (curHr < 18 && curHr > 12) {
    document.getElementById("pasisveikinimas").innerHTML = "<?php the_field('sh_titleforday', 'option'); ?>"
  } else if (curHr < 23 && curHr > 5){
    document.getElementById("pasisveikinimas").innerHTML = "<?php the_field('sh_titleforevening', 'option'); ?>"
  } else {
    document.getElementById("pasisveikinimas").innerHTML = "<?php the_field('sh_titlefornight', 'option'); ?>"
  }
  function initMap() {
  var uluru = {lat: <?php the_field('cp_latitude', 'option') ?>, lng: <?php the_field('cp_longtitude', 'option') ?>};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: <?php the_field('cp_zoom', 'option') ?>,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
  }
</script>
<?php wp_footer();?>
</body>
</html>
