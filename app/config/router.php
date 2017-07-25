<?php

$router = $di->getRouter();

// Define your routes here
/**
 * Get user lists data by query
 */
$router->addGet(
    "/user",
    [
        "controller"        => "user",
        "action"            => "read"
    ]
);

$router->addGet(
    "/test",
    [
        "controller"        => "test",
        "action"            => "test"
    ]
);

$router->handle();
