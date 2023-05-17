<?php

require_once __DIR__ . '/models/computer.php';
require_once __DIR__ . '/models/laptop.php';
require_once __DIR__ . '/models/desktop.php';



$prova = new laptop('lenovo','superpc','2000 maH', 'portable');
var_dump($prova);
$prova = new desktop('dell','megapc','ac current', 'desktop');
var_dump($prova);
?>