<?php 

function add_woocommerce_support(){ /* Krokar in Wc */
    add_theme_support('woocommerce');
}

add_action("after_setup_theme", "add_woocommerce_support");


remove_action("woocommerce_single_variation", "woocommerce_single_variation_add_to_cart_button", 20); /* Knappen på Variabla produkter fick ryka.. */


add_action("woocommerce_before_cart", "my_cart"); /* Add action - Varukorgen */

    function my_cart() {
        echo "Genomför ditt köp";

}

add_action("woocommerce_proceed_to_checkout", "forgot_something_cart"); /* Add action - Varukorgen */

    function forgot_something_cart() {
        echo "Har du glömt något?";

}

?>
