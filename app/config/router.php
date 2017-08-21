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
        "action"            => "index"
    ]
);
$router->addGet(
    "/user/{userId}",
    [
        "controller"        => "user",
        "action"            => "show"
    ]
);
$router->addGet(
    "/user/create",
    [
        "controller"        => "user",
        "action"            => "create"
    ]
);
$router->addPost(
    "/user/create",
    [
        "controller"        => "user",
        "action"            => "save"
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
