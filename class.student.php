<?php
class Student
{
    const ID = 123456789;
    public $school = "South East";
    public function info()
    {
        $data = self::ID . ":" . $this->school;
        return $data;
    }
}