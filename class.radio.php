<?php
class Radio extends Product {
    public final function info(){
        echo "Radio:". $this->getId() . ":" . $this->getName();
    }
}