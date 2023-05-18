<?php

require_once __DIR__ . '/../traits/Weightable.php';

class laptop extends computer{
    

    public function getType()
    {
        return 'laptop';
    }
}