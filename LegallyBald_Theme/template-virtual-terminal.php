<?php
/*
 * Template Name: Virtual Terminal Template
 */

get_header(); ?>

<main id="primary" class="site-main">
  <div class="container">

  this is the Virtual terminal page!
    <?php
    // Start the loop
    while (have_posts()) :
      the_post();

      // Display the page content
      the_content();

    endwhile;
    ?>
  </div>
</main>

<?php get_footer(); ?>
