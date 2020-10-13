<?php
class Radio extends Product {
    public function report() {
        echo "Radio:" . $this->getId() . ":" . $this->getName();
    }
}