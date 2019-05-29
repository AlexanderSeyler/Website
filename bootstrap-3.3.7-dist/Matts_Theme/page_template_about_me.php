<?php
    /*
    Template Name: About Me Page

    */
    ?>
<?php include (TEMPLATEPATH . '/smaller_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 

<section class="container-fluid maintext aboutme">
      <div class="container">
          <h2><?php the_field('about_me_header'); ?></h2> <!--changed this to h2 as its the title-->
          <div class="row">
          <div class="col-sm-6">
            <!-- <div class="col-sm-7">-->  
              <img src="<?php the_field('about_me_image'); ?>" alt="about_me">
              <!--<img src="images/about%20me%20photo%203.png" alt="about_me">-->
              
              </div>
              
            
              
              <div class="col-sm-6 maintext">
                  <!--<div class="col-sm-5 maintext">-->
                  
                  <h3><?php the_field('introduction_text'); ?> </h3>

              </div>
 
          
          </div> <!--row-->
          
         
          
          
          
          
          </div> <!--container-->
      
      </section> <!--container-fluid-->
<?php get_footer(); ?>