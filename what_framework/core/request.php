<?php

namespace PhpFramework;

class Request{
    public string $uri;

    public function __construct($uri)
    {
        //делаем url нормальным и убираем сзади /
        $this->uri = trim(urldecode($uri), '/');
    }

    public function getMetod(): string 
    {
        //возвращает какой метод используется в верхни регистром
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    public function getGet(): bool
    {
        return $this->getMetod();
    }

    public function getPost(): bool
    {
        return $this->getMetod();
    }

    //фсинхронный или нет
    public function isAjax(): bool
    {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
    }

    public function get($name, $defult = null): ?string
    {
        return $_GET[$name] ?? $defult;
    }

    public function post($name, $defult = null): ?string
    {
        return $_POST[$name] ?? $defult;
    }
}