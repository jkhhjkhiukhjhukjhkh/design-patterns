<?php
namespace obv;

abstract class Subject
{
    /**
     * @var Observe[] $observers
     */
    protected $observers = [];

    public function add(Observe $observe)
    {
        $this->observers[] = $observe;
    }

    public function del(Observe $observe)
    {

    }

    abstract public function call();

}