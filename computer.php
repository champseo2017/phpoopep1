<?php
class Computer extends Product
{
    public function report()
    {
        echo "Computer:" . $this->getId() . ":" . $this->getName();
    }
}