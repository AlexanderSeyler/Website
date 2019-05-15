<?php get_header(); /* Tells WordPress to include header.php */ ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <h2>MY SERVICES</h2>
        <!--changed this to h2 as its the title-->
        <div class="row">
            <section class="col-sm-4 maintext">
                <h3>Parties</h3>
                <img src="images/icon_parties.png" alt="icon_parties" class="center">
                <p>Birthdays, engagements, holiday parties and social events.</p>
            </section>

            <section class="col-sm-4 maintext">
                <h3>Company</h3>
                <img src="images/icon_company.png" alt="icon_company" class="center">
                <p>Opening days/nights, end-of-year employee parties and corporate engagements.</p>
            </section>

            <section class="col-sm-4 maintext">
                <h3>Festivals</h3>
                <img src="images/icon_festivals.png" alt="icon_festivals" class="center">
                <p>Music/band, writers, arts, markets, comedy and theatre.</p>
            </section>


        </div>
        <!--row-->

        <button class="button" style="vertical-align:middle" href="#"><span>BOOK NOW </span></button>

    </div>
    <!--container-->

</div>
<!--container-fluid-->
<?php get_sidebar(); /* Tells WordPress to include sidebar.php */ ?>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>