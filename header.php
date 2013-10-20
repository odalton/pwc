<?php

?>
<!--

__________               __  .__       __      __      ___
\______   \ ____________/  |_|  |__   /  \    /  \ ____\_ |__
 |     ___// __ \_  __ \   __\  |  \  \   \/\/   // __ \| __ \
 |    |   \  ___/|  | \/|  | |   Y  \  \        /\  ___/| \_\ \
 |____|    \___  >__|   |__| |___|  /   \__/\  /  \___  >___  /
               \/                 \/         \/       \/    \/
_________
\_   ___ \  ____   _____ ___________    ____ ___.__.
/    \  \/ /  _ \ /     \\____ \__  \  /    <   |  |
\     \___(  <_> )  Y Y  \  |_> > __ \|   |  \___  |
 \______  /\____/|__|_|  /   __(____  /___|  / ____|
        \/             \/|__|       \/     \/\/

<?php echo "Perth Web Company Copyright: 1997-".date('Y'); ?>


-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/custom_jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/custom_navigation.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" media="all" type="text/css" >
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="all" type="text/css" >
  <link href="<?php echo get_template_directory_uri(); ?>/icons/style.css" rel="stylesheet" media="all" type="text/css" >
  <link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" media="all" type="text/css" >
  <link href="<?php echo get_template_directory_uri(); ?>/css/custom_responsive.css" rel="stylesheet" media="all" type="text/css" >
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
</head>
<body>
<h1 class="hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
<h2 class="hidden"><?php bloginfo( 'description' ); ?></h2>
<header role="banner" class="header">
  <div class="contact"><a class='anchorLink' id='anchor1' href="#Contact">contact us now</a></div>
  <div class="headerWrapper">
    <div class="primary-logo">
      <img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/20131004-pwc-logo.png">
    </div>
    <div class="primary-navigation">
      <?php print pwc_navigation(); ?>
    </div>
  </div>
</header>
