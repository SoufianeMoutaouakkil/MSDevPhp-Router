<?php

use Test\testFiles\TestController;

return [
    "get" => [
        "/" => [TestController::class, "home"],
        "/path1" => [TestController::class, "getMethod1"],
        "paramsPath/{paramName:\d}" => [TestController::class, "digitParam"],
        "paramsPath/{paramName}" => [TestController::class, "param"],
    ],
    "post" => [
        "path1" => [TestController::class, "postMethod1"],
    ]

];
