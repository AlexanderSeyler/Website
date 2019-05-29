<?php get_header(); /* Tells WordPress to include header.php */ ?>
      <section class="container-fluid contactme contactmatt">
      <div class="container">
          <div class="row">
               <h2>CONTACT</h2> 
          <div class="col-sm-3">
      
             
              <h4><?php the_field('contact_options'); ?></h4>
             
              
              
              </div> 
              
              <div class="col-sm-9">
                 
                   <h3> <?php the_field('introduction'); ?></h3>
                  
                  
                

              </div> 
          </div>   
          </div>
<?php get_footer(); ?>          