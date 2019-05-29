<?php
    /*
    Template Name: About Me Page

    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

<section class="container-fluid maintext aboutme">
      <div class="container">
          <h2><?php the_field(''); ?></h2> <!--changed this to h2 as its the title-->
          <div class="row">
          <div class="col-sm-6">
            <!-- <div class="col-sm-7">-->  
              <img src="<?php the_field(''); ?>" alt="about_me">
              <!--<img src="images/about%20me%20photo%203.png" alt="about_me">-->
              
              </div>
              
            
              
              <div class="col-sm-6 maintext">
                  <!--<div class="col-sm-5 maintext">-->
                  
                  <h3><?php the_field(''); ?></h3>
                  <h4><?php the_field(''); ?></h4>
                  
                   <p><?php the_field(''); ?></p>
                       
                       <p><?php the_field(''); ?></p>
                       
                       
                    <p><?php the_field(''); ?></p>
                    
                    <p><?php the_field(''); ?></p>

              </div>
 
          
          </div> <!--row-->
          
         
          
          
          
          
          </div> <!--container-->
      
      </section> <!--container-fluid-->
<?php get_footer(); ?>