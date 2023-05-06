<?php

declare(strict_types=1);

namespace App;

require_once('./exception/AppException.php');
require_once('./exception/ConfigurationException.php');
require_once('./exception/StorageException.php');
include_once('./src/utils/debug.php');
include_once('./src/Request.php');
include_once('./src/NoteController.php');
require_once('./config/config.php');

use App\Exception\AppException;
use App\Exception\ConfigurationException;
use App\Exception\StorageException;
use Throwable;

$request = new Request($_GET, $_POST);

try{
    AbstractController::initConfiguration($configuration);
    $controller= new NoteController($request);
    $controller->run();
} catch(AppException $e) {
    echo '<h1>Wystąpił błąd w aplikacji</h1>';
    echo '<h3>' . $e->getMessage() . '</h3>';
} catch(Throwable $e) {
    echo "<h1>Wystąpił błąd w aplikacji</h1>";
    // dump($e);
}

