<?php
    /*
    Template Name: Contact Page

    */
    ?>
<?php include (TEMPLATEPATH . '/smaller_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
      
<section class="container-fluid contactme contactmatt">
      <div class="container">
          <div class="row">
               <h2><?php the_field('contactheader'); ?></h2> 
          <div class="col-sm-4">
      
              <p></p>
              <h4><?php the_field('contactinfo'); ?></h4>

              
              
              </div>
              
              
            
              
              <div class="col-sm-8">
                 
                   <h3><?php the_field('contacttext'); ?></h3>
<p><?php the_field('contactform'); ?></p>
                       

              </div>
 
          
          </div> <!--row-->
          
         
          
          
          
          
          </div> <!--container-->
      
      </section> <!--container-fluid-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>