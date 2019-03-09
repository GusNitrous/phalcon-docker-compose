<?php

use Phalcon\Mvc\Micro;

$app = new Micro();

$app->get(
    "/",
    function () {
        echo "<h1>Your dockerized Phalcon app!</h1>";
        phpinfo();
    }
);

$app->get(
    "/ping/{content}",
    function ($content) {
        echo "<h1>Pong => $content</h1>";
    }
);

$app->handle();

?>