<?php

require_once __DIR__ . '/Computer.php';

class Desktop extends Computer
{

    use Weightable;

    public function getType()
    {
        return 'desktop';
    }
}
