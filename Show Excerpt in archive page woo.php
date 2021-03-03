add_action('woocommerce_after_shop_loop_item_title', 'description_in_shop_loop_item', 3 );
function description_in_shop_loop_item() {
    global $product;

    // HERE define the number of characters
    $limit = 150;

    $description = $product->get_description(); // Product description
    // or
    // $description = $product->get_short_description();  // Product short description

    // Limit the characters length
    if (strlen($description) > $limit) {
        $excerpt = substr($description, 0, $limit) . '...';
    } else {
        $excerpt = $description;
    }

    echo '<p class="description">'.$excerpt.'</p>';
}