<?php
    /*
    Template Name: Home page

    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid maincontainer">
      <div class="container">
          <h2><?php the_field('services'); ?></h2> <!--changed this to h2 as its the title-->
          <div class="row">
          <div class="col-sm-4">
              <h3><?php the_field('parties_header'); ?></h3>
              <img src="<?php the_field('parties_image'); ?>" alt="icon_parties" class="center">
              <p><?php the_field('parties'); ?></p>
              </div>
              
              <div class="col-sm-4">
                  <h3><?php the_field('company_header'); ?></h3>
              <img src="<?php the_field('company_image'); ?>" alt="icon_company" class="center">
                  <p><?php the_field('company'); ?></p>
              </div>
              
              <div class="col-sm-4">
                  <h3><?php the_field('festivals_header'); ?></h3>
              <img src="<?php the_field('festivals_image'); ?>" alt="icon_festivals"  class="center">
                   <p><?php the_field('festivals'); ?></p>
              </div>
 
          
          </div> <!--row-->
          
         <button class="button" style="vertical-align:middle" href="#"><span>BOOK NOW </span></button>
          
          
          
          
          </div> <!--container-->
      
      </section> <!--container-fluid-->
<!--container-fluid-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>