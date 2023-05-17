<?php

class laptop extends computer{
    public function __construct($brand, $model, $battery,public string $laptopName)
    {
        parent::__construct($brand, $model, $battery);
        $this->laptopName = $laptopName;
    }
}