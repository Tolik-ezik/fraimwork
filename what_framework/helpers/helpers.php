<?php
function app(): \PhpFramework\Application
{
    return \PhpFramework\Application::$app;
}

function request(): \PhpFramework\Request
{
    return app()->request;
}