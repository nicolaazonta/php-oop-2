<?php

class desktop extends computer{
    public function __construct($brand, $model, $battery,public string $name)
    {
        parent::__construct($brand, $model, $battery);
        $this->name = $name;
    }
}