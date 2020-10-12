<?php
class Radio extends Product {
    public function info() {
        echo "Radio:" . $this->getId() . ":" . $this->getName();
    }
}