<?php

function classes(){
    return require_once __DIR__ . "/core/application.php";
    return require_once "/core/request.php";
    return require_once "/core/respons.php";
    return require_once "/core/router.php";
}

function compos(){
    return require_once  __DIR__ . "/vendor/autoload.php";
}

function confirm(){
    require_once __DIR__ . "/config/config.php";
    require_once CONFIG . "/routers.php";
    require_once HELPERS . "/helpers.php";
}

function all(){
    classes();
    compos();
    confirm();
}