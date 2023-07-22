<?php
/*
 * Template Name: POS System Template
 */

get_header(); ?>

<main id="primary" class="site-main">
  

    <?php
    // Start the loop
    while (have_posts()) :
      the_post();

      // Display the page content
      the_content();

    endwhile;
    ?>

    <!-- POS SYSTEM PAGE -->

<!-- pos top section -->
<section class="pos-top-section">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pos-top-background.jpg" alt="POS Top Background" class="pos-top-image">
  <div class="pos-top-content">
    <h2>Business Management Made Simple</h2>
    <p>AutoCard Solutions can integrate almost any point of sale system on the market today. Please contact us if you have any questions regarding your point of sale system.</p>
  </div>
</section>
<!-- end pos top section -->

<section>
  <h3>Clover Station</h3>
  <img src="IMG_3616.jpg" alt="Clover Station" class="pos-system-image">
  <h4>BENEFITS FOR BUSINESS</h4>
  <ul>
    <li>Clover Rating</li>
    <li>Efficient</li>
    <li>Simplicity</li>
    <li>Speed</li>
    <li>Appeal</li>
  </ul>
  <p>Software updates are automatically delivered to your device, so you'll always have the latest version. Clover Station arrives pre-loaded with everything you need to accept payments. Its cloud-based software enables you to manage your inventory, track revenues, and generate reports. Run reports that distill your transaction data into powerful intelligence and use insights to make better decisions. Safeguard your customers' card data with the latest security technology.</p>
  <p>Want to know more about Clover Station? Ask our Clover Support Team and receive a call or email within twenty-four hours.</p>
  <img src="clover-in-use.jpg" alt="Clover Station Support" class="pos-system-image">
</section>

<section>
  <h3>Clover Mobile</h3>
  <img src="2014-08_Clover-Mobile_enviro_server-op-screen_bar_KKR_0879.205150455_std.jpg" alt="Clover Mobile" class="pos-system-image">
  <div class="tools">
   
  </div>
</section>

<section>
  <h3></h3>
  <div class="benefits">
   
  </div>
</section>

<section>
  <h3></h3>
  <div class="benefits">
    <p>Versatile, full-featured mobile device with extensive payment acceptance capabilities on-the-go or at your place of business.</p>
    <p>With a built-in scanner, camera, and printer, Clover Flex can help you process orders and payments more quickly. The device lasts up to 8 hours on a single charge.</p>
    <p>Choose from a wide range of apps focusing on business operations, marketing, and performance measurement to help your business grow and run more efficiently.</p>
    <p>Built-in barcode scanner and automatic inventory tracking help ensure you're not short of important items.</p>
    <p>By enabling offline transaction mode, your device can continue to accept payments when your internet signal is weak or down.</p>
    <img src="maxresdefault (1).jpg" alt="Clover Flex" class="pos-system-image">
  </div>
</section>

<section>
  <h3></h3>
  <div class="benefits">
   
  </div>
</section>

<section>
  <h3>Clover + Apple Pay</h3>
  <div class="benefits">
   
  </div>
</section>

<section>
  <h3>Security</h3>
  <div class="security">
   
  </div>
</section>

<section>
  <h3>Reliability</h3>
  <div class="reliability">
    
  </div>
</section>




</main>

<?php get_footer(); ?>
