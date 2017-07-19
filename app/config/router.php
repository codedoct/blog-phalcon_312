<?php

$router = $di->getRouter();

// Define your routes here
/**
 * Get user lists data by query
 */
$router->addGet(
    "/users",
    [
        "controller"        => "user",
        "action"            => "read"
    ]
);


$router->handle();
