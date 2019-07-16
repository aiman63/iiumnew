<?php
if ( is_admin_bar_showing() ) {
?>
  <style>
  header, #mySidenav  {
    margin-top:30px !important;
  }
  @media screen and (max-width: 781px) {
    header, #mySidenav  {
      margin-top:45px !important;
    }
  }

  </style>
<?php
}
?>
<?php get_header(); ?>

<div class="container-main">
  <?php
  if (have_posts()):
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;
?>
</div>


<?php get_footer(); ?>
