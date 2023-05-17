<?php

class desktop extends computer{
    public function __construct($brand, $model, $battery,public string $desktopName)
    {
        parent::__construct($brand, $model, $battery);
        $this->desktopName = $desktopName;
    }
}