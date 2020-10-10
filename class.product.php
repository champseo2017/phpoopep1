<?php
class product
{
     // $private $id;
     // $private $name;
     public function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
     }

     public function info() {
         return $this->id. ":". $this->name;
     }
}
