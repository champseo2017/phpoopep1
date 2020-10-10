<?php
include 'class.product.php';
$products = array(new Product("TV"), new Product("Radio"));
foreach ($products as $key => $item) {
    if ($key == 0) {
        echo "<span>" . $item->info() . "</span>" . "<br>";
    } else {
        echo "<span>" . $item->info() . "</span>";
    }

}
