<?php
require '../deco/Component.php';
require '../deco/ComponentDecorator.php';
require '../deco/BackgroundComponent.php';
require '../deco/MyMyComponentDecorator.php';
require '../deco/MyComponentDecorator.php';


require 'Observe.php';
require 'Subject.php';
require 'ConcreteObserve.php';
require 'ConcreteSubject.php';
require 'MyConcreteDecorateObserve.php';
require 'MyMyConcreteDecorateObserve.php';


$com = new \deco\BackgroundComponent();
$o = new \obv\ConcreteSubject();

$o->add($a = new \obv\MyConcreteDecorateObserve($com));
$o->add(new \obv\MyMyConcreteDecorateObserve($a));

$o->call();