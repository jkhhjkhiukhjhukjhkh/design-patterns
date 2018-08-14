<?php
namespace obv;

class MyConcreteDecorateObserve extends ConcreteObserve
{
    public function printf()
    {
        var_dump(__CLASS__ . __FUNCTION__);
        parent::printf();
    }
}