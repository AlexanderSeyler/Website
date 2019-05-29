<?php
    /*
    Template Name: Services page

    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<section class="container-fluid maincontainer services">
    <div class="container">
        <!--changed this to h2 as its the title-->
        <h2><?php the_field(''); ?></h2>
        <div class="row">
            <div class="col-sm-4">
                <h3><?php the_field(''); ?></h3>
                <p><?php the_field(''); ?></p>
            </div>

            <div class="col-sm-4">
                <h3><?php the_field(''); ?></h3>
                <p><?php the_field(''); ?></p>
            </div>

            <div class="col-sm-4">
                <h3><?php the_field(''); ?></h3>
                <p><?php the_field(''); ?></p>
            </div>


        </div>
        <!--row-->
        <p>Form place holder</p>
        <p>Form place holder</p>
        <p>Form place holder</p>
        <p>Form place holder</p>
        <p>Form place holder</p>
        <p>Form place holder</p>
        <p>Form place holder</p>
    </div>
    <!--container-->

</section>
<!--container-fluid-->
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>