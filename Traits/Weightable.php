<?php
trait weightable
{
    public $weight;

    public function getweight(){
        return $this->weight;
    }
    public function setweight($weight, $unit){
        $this->weight= $weight . $unit;
    }
}