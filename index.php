<?php
include "class.product.php";
include "class.radio.php";
include "tools/class.radio.php";

$products = array();
$products[] = new Radio("Tanin");
$products[] = new tools\Radio();

foreach($products as $p) {
    $p->report();
}