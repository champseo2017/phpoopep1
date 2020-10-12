<?php
class Radio extends Product {
    public function __construct($name) {
        echo ("Constructor Radio");
        Product::__construct($name);
    }
}