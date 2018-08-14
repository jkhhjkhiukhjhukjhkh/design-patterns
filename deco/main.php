<?php
namespace deco;
require 'Component.php';

require 'BackgroundComponent.php';
require 'ComponentDecorator.php';
require 'MyMyComponentDecorator.php';
require 'MyComponentDecorator.php';

$c = new  BackgroundComponent();
$a1 = new MyComponentDecorator($c);
$a2 = new MyMyComponentDecorator($a1);
$a2->printf();

