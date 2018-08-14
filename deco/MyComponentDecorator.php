<?php
namespace deco;

class MyComponentDecorator extends ComponentDecorator
{

    /**
     * MyComponentDecorator constructor.
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        parent::__construct($component);
    }

    public function printf()
    {
        $this->myPrintf();

        parent::printf();
    }

    private function myPrintf()
    {
        var_dump(__FUNCTION__);
    }
}