<?php
/*
 * Template Name: Contact Us Template
 */

get_header(); ?>

<main id="primary" class="site-main">
  <div class="container">

  this is the Contact Us page!
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
