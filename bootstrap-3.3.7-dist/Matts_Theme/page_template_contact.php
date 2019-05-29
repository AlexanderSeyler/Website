<?php
    /*
    Template Name: Contact Page

    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid contactme contactmatt">
      <div class="container">
          <div class="row">
               <h2><?php the_field(''); ?></h2> 
          <div class="col-sm-3">
      
             
              <h4><?php the_field(''); ?></h4>
              <h5><?php the_field(''); ?></h5>
              <h4><?php the_field(''); ?></h4>
                <h5><?php the_field(''); ?></h5>
              <h4><?php the_field(''); ?></h4>
              <h5><?php the_field(''); ?></h5>
              
              
              </div>
              
              
            
              
              <div class="col-sm-9">
                 
                   <h3><?php the_field(''); ?></h3>
                  
                  
                  <h4><?php the_field(''); ?></h4>
                  
                   <p><?php the_field(''); ?></p>
                       

              </div>
 
          
          </div> <!--row-->
          
         
          
          
          
          
          </div> <!--container-->
      
      </section> <!--container-fluid-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>