/*AddEmptyCartImage*/
add_action( 'woocommerce_cart_is_empty', 'add_content_empty_cart' );
 
function add_content_empty_cart() {
echo '<a href="/shop/" border="0"><img style="width: 100%;" src="/wp-content/themes/netforks/images/EmptyCart.jpg"></a>';
}


