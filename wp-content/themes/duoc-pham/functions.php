<?php 

function change_product_price_display( $price ) {
$regular_price = get_post_meta( get_the_ID(), '_regular_price', true);
if($regular_price == '' || $regular_price == 0){
return '<span style="
    color: red;
">Liên hệ</span>';
}
return $price;
}
add_filter( 'woocommerce_get_price_html', 'change_product_price_display' );
add_filter( 'woocommerce_cart_item_price', 'change_product_price_display' );

