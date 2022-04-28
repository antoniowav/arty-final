<?php get_header(); ?>



<?php 
while ( have_posts() ) {
    the_post();
    the_content();

    $key_1_value = get_post_meta( get_the_ID(), 'latitude', true );
    // Check if the custom field has a value.

    $key_2_value = get_post_meta( get_the_ID(), 'longitude', true );
    // Check if the custom field has a value.

?>
<div style="width: 100%">

<h1>Our store in: <?php the_title(); ?></h1>

<iframe 
width="100%" 
height="600" 
frameborder="0" 
scrolling="no" 
marginheight="0" 
marginwidth="0" 
src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $key_1_value; ?>,<?php echo $key_2_value; ?>+(Your%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
><a href="https://www.gps.ie/sport-gps/">hiking gps</a></iframe></div><br>


<?php 
    }
?>

<?php get_footer(); ?>