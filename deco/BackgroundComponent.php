<?php
namespace deco;

class BackgroundComponent implements Component
{
    public function printf()
    {
        var_dump(__CLASS__);
    }
}
