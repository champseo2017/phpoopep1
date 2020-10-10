<?php
class product
{
    // $private $id;
    // $private $name;
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function info()
    {
        $info = "";
        $lastProperty = end($this);
        foreach ($this as $key => $value) {
            if ($value == $lastProperty) {
                $info .= $value;
            } else {
                $info .= $value . " : ";
            }

        }
        return $info;
    }
}
