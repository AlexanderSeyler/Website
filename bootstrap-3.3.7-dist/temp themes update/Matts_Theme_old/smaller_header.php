<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">


    <title>
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>


    <meta name="description" content="<?php bloginfo('description'); ?>">


    <!—Viewport responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>http://localhost:8080/wordpress/wp-content/themes/matts_theme/images/favicon.jpg">
    
    <!—Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Amaranth:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

  <body>
      <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <img src="http://localhost:8080/wordpress/wp-content/themes/matts_theme/images/logo%202.png" alt=logo class="navbar-brand" href="#" >
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php
wp_nav_menu( array(
'menu' => 'Primary',
'depth' => 2,
'container' => false,
'menu_class' => 'nav navbar-nav navbar-right',
'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
//Process nav menu using our custom nav walker
'walker'=> new WP_Bootstrap_Navwalker())
);
?>

    </div>
  </div>
</nav>
      
      