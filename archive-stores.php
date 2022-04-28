<?php
    get_header();
?>

<h1>Check out our stores:</h1>

<?php 

    while ( have_posts() ) { 
        
        the_post();
        the_content();
        
?>
<div class="storeContainer">
    <div class="citiesContainer">
    <a href="<?php echo the_title();?>">
    <h3 class="cities">

        <?php 
            the_title();
        ?>   

    </h3> 
    </a>
    </div>
</div>

<?php } ?>



<?php
    get_footer();
?>


