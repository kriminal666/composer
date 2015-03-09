<?php
use Acme\SayHello;
use Illuminate\Filesystem\Filesystem;

require '../vendor/autoload.php';
$fs = new Filesystem();

$hello = new SayHello();

$hello->sayHello();

