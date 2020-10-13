<?php
include "class.product.php";
include "class.radio.php";
include "class.computer.php";

$products = array();
$products[] = new Radio("Tanin");
$products[] = new Computer("Acer");
$products[] = new Computer("IBM");

foreach($products as $p) {
    $p->report();
}