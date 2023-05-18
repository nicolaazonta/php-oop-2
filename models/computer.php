<?php

class computer{
    public function __construct(protected string $brand, protected string $model, protected string $alimentation)
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


