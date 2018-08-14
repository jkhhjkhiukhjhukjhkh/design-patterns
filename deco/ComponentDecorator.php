<?php
namespace deco;

class ComponentDecorator implements Component
{
    /**
     * @var Component $component
     */
    private $component;

    /**
     * ComponentDecorator constructor.
     * @param $component
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }

    public function printf()
    {
        $this->component->printf();
    }
}
