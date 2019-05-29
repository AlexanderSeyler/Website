 <footer class="container-fluid footerbg">
      <div class="container">
          <div class="row">
              
          <div class="col-md-4 leftfoot text-center">
              <h1><?php the_field(''); ?></h1>
  <a><img src="<?php the_field(''); ?>" alt="facebook" class="socialicon"  href="#">
      <img src="<?php the_field(''); ?>"  alt="instagram" class="socialicon" href="#"></a>

              </div> 
              
          <div class="col-md-4 middlefoot">
               <img src="<?php the_field(''); ?>" alt="logo" class="footerlogo" href="#" >
              
  
              </div>   
              
               <div class="col-md-4 rightfoot">
                   <h1><?php the_field(''); ?></h1>
                   <p><?php the_field(''); ?></p>
                   <p><?php the_field(''); ?></p>
                  

              
              </div> 
          
          </div> <!--row-->
          
          </div> <!--container-->
      </footer>

</body>

</html>
<?php wp_footer(); ?>