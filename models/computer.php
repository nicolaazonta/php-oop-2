<?php

class Computer{

    protected $brand;
    protected $model;
    protected $alimentation;
    public function __construct(string $brand, string $model, string $alimentation)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->alimentation = $alimentation;
    }

    public function getType()
    {
        return 'computer';
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getAlimentation()
    {
        return $this->alimentation;
    }
}


