<?php

use Modular\BelajarBareng\Login;
use Modular\BelajarBareng\Register;

require_once __DIR__ . '/../vendor/autoload.php';


$login = new Login();
$register = new Register();

echo $login->login() . PHP_EOL;
echo $register->register();