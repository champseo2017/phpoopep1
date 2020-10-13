<?php
spl_autoload_register(function($class){
    include $class.'.php';
});

use tools\radio as R;

$products = array();
$products[] = new Radio('test');
$products[] = new R();

foreach($products as $p){
    $p->report();
}