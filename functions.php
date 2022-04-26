<?php

add_action('wp', 'remove_storefront_credits');

function remove_storefront_credits() {
    // Hook for removing the built in footer-text from Storefront.
    remove_action('storefront_footer', 'storefront_credit', 20);
}


// Hook for the footer, low priority.
add_action('storefront_footer', 'add_footer_text', 70);

function add_footer_text() {
    echo '<p style="margin-top:20px; text-align:center;">&copy 2022 arty design</p>';
}


// Hook for changing the text on the admin-page. 
add_filter('admin_footer_text', 'change_footer_admin');

function change_footer_admin () {
    // Changing the text in the admin panel.
    echo 'Developed with <span style="font-size:18px;">&#129505;</span> by Hugo Bengtsson, Antonio Piattelli and Niki Vangjeli for Medieinstitutet.';
}

function remove_storefront_sidebar() {

        remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
    
}
add_action( 'wp_head', 'remove_storefront_sidebar' );


?>