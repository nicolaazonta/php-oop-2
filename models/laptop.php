<?php

require_once __DIR__ . '/Computer.php';
require_once __DIR__ . '/../Traits/Weightable.php';

class laptop extends computer{
    use Weightable;

    public function getType()
    {
        return 'laptop';
    }
}