<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="./style.css" /> 
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Theme Css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
 

    <!-- Font Awesome -->

</head>
<body>

<header>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- nav menu -->
<nav class="navbar navbar-expand-sm navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="<?php echo home_url(); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-asset.jpeg" alt="logo" class="navbar-logo" />
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse nav-container" id="navbarNav">
<?php
wp_nav_menu( array(
    'theme_location' => 'primary-menu',
    'container'      => false,
    'menu_class'     => 'navbar-nav',
    'fallback_cb'    => '__return_false',
    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'          => 2,
    'walker'         => new WP_Bootstrap_Navwalker(),
) );
?>
</div>

</div>
</nav>
</header>