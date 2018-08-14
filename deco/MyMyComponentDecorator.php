<?php
namespace deco;


class MyMyComponentDecorator extends ComponentDecorator
{
    public function printf()
    {
        var_dump(__CLASS__);
        parent::printf();
    }
}