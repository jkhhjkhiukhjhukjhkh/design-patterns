<?php
namespace obv;

class  ConcreteSubject extends Subject
{
    public function call()
    {
        foreach ($this->observers as $observer) {
            $observer->process();
        }
    }
}