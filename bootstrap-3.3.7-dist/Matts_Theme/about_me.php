<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid maintext aboutme">
      <div class="container">
          <h2>ABOUT ME</h2> <!--changed this to h2 as its the title-->
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