<?php

declare(strict_types=1);

namespace App;

include_once('./src/utils/debug.php');
include_once('./src/View.php');

$action = $_GET['action'] ?? null;

$view = new View();
$view->render($action);
