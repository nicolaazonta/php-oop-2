<?php

require_once __DIR__ . '/Computer.php';

class Laptop extends Computer
{
    use Weightable;


    public function getType()
    {
        return 'laptop';
    }
}
