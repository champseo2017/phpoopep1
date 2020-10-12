<?php
include 'class.product.php';
include 'class.radio.php';
$products = array(new Radio("Tarnin"), new Radio("Pana"));
foreach($products as $item) {
    echo $item->info();
}