<?php

class computer{
    public function __construct(public string $brand, public string $model, public string $battery)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->battery = $battery;
    }
}


class portable extends computer{
    public function __construct($brand, $model, $battery,public string $portableName)
    {
        parent::__construct($brand, $model, $battery);
        $this->portableName = $portableName;
    }
}

class desktop extends computer{
    public function __construct($brand, $model, $battery,public string $desktopName)
    {
        parent::__construct($brand, $model, $battery);
        $this->desktopName = $desktopName;
    }
}

$prova = new portable('lenovo','superpc','2000 maH', 'portable');
var_dump($prova);
$prova = new desktop('dell','megapc','ac current', 'desktop');
var_dump($prova);
?>