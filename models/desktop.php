<?php
require_once __DIR__ . '/../traits/Weightable.php';

class desktop extends computer{
  
    public function getType()
    {
        return 'desktop';
    }
}