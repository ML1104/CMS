<?php

require "vendor/autoload.php";
$query = require "core/bootstrap.php";
$dbinsert = require "core/sql.php";

use \App\Core\Request;

\App\Core\Router::load("routes.php")->direct(Request::prepare(), Request::method());







