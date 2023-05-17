<?php
class computer{
    public function __construct(public string $brand, public string $model, public string $battery)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->battery = $battery;
    }
}

