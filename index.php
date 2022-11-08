<?php

class District implements IteratorAggregate, Countable {
    Public $data;
    public function __construct(){
        $this->data = [];
    }
    function addDistrict ($val){
        array_push ($this->data, $val);
    }
    function getDistricts(){
        return $this->data;
    }
    function getIterator(){
        return new ArrayIterator ($this);
    }
    function count(){
        return count ($this->data);
    }
   
}
$test = new District ();
$test->addDistrict("Dhaka");
$test->addDistrict("Dhaka");
$test->addDistrict("Dhaka");
$test->addDistrict("Dhaka");

$districtsValue = $test->getDistricts();

echo count ($test);
echo "<pre>";
print_r($test);