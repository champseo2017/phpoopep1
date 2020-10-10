<?php
class Product {
    private static $nextID = 1;
    private $id;
    private $name;
    public function __construct($name){
        $this->name = $name;
        $this->id = self::$nextID;
        self::$nextID++;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getId(){
        return $this->id;
    }

    public function info() {
        return $this->id . ":" . $this->name;
    }
}