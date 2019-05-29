<?php
    /*
    Template Name: Services page

    */
    ?>
<?php include (TEMPLATEPATH . '/smaller_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
      
<section class="container-fluid maincontainer services">
    <div class="container">
        <!--changed this to h2 as its the title-->
        <h2><?php the_field('servicescontact'); ?></h2>
        <div class="row">
            <div class="col-sm-4">
                <h3><?php the_field('partiesheader'); ?></h3>
                <p><?php the_field('partiestext'); ?></p>
            </div>

            <div class="col-sm-4">
                <h3><?php the_field('companyheader'); ?></h3>
                <p><?php the_field('companytext'); ?></p>
            </div>

            <div class="col-sm-4">
                <h3><?php the_field('festivalsheader'); ?></h3>
                <p><?php the_field('festivalstext'); ?></p>
            </div>


        </div>
        <!--row-->
        <div class="container">
        <!--changed this to h2 as its the title-->
 
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
        <p><?php the_field('servicesform'); ?></p>
            </div>
<div class="col-sm-2">
            </div>
    </div>
        </div>
    </div>
    <!--container-->

</section>
<!--container-fluid-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>