<?php
namespace obv;

use deco\ComponentDecorator;

class ConcreteObserve extends ComponentDecorator implements Observe
{
    public function process()
    {
        var_dump(__FUNCTION__ . __CLASS__);
        $this->printf();
    }

    public function printf()
    {
        var_dump(__CLASS__ . __FUNCTION__);
    }
}