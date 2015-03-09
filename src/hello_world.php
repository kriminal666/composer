<?php
use Acme\SayHello;
use Acme\TestNewClass;
use Illuminate\Filesystem\Filesystem;

require '../vendor/autoload.php';
$fs = new Filesystem();

$hello = new SayHello();

$hello->sayHello();

$newTest = new TestNewClass();
$newTest->youStink("Fuck the world");


