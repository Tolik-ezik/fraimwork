<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__  .  "/../at.php";
all();

use PhpFramework\Application;

$fra = new Application();

var_dump(app());

