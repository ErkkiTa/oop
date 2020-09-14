<?php

try {
    $pdo = new PDO(
        'mysql:host=d82643.mysql.zonevs.eu;dbname=d83217sd384961',
        'd83217sa344874', 'Kuressaareametikool'
    );

} catch (PDOException $e) {
    die($e->getMessage());
}

require_once 'model/Task.php';
require_once 'model/User.php';
require_once 'include/pages.php';
require_once 'include/functions.php';