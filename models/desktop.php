<?php

require_once __DIR__ . '/Computer.php';
require_once __DIR__ . '/../Traits/Weightable.php';

class desktop extends computer{
  
    use Weightable;
    
    public function getType()
    {
        return 'desktop';
    }
}