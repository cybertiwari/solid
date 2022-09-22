<?php
session_start();
require '../vendor/autoload.php';

use Router\Request;
use Router\Router;

$router = new Router(new Request);
include '../routes/web.php';