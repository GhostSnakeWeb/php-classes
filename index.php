<?php

// Создайте класс Tag

use classes\Tag;

function autoloaderClass($class) {
    $class = str_replace("\\", '/', $class);

    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloaderClass');

$tag = new Tag('a');
$tag->setText('Лемуры')->setAttr('href', 'https://ru.wikipedia.org/wiki/%D0%9B%D0%B5%D0%BC%D1%83%D1%80%D0%BE%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BD%D1%8B%D0%B5')->setAttr('target', '_blank')->show();

$newTag = new Tag('div');
$newTag->setText('Hello World!')->setAttr('class', 'myclass')->setAttr('id', 'myid')->show();

$newTag2 = new Tag('img');
$newTag2->setAttr('class', 'img-class')->setAttr('id', 'img-id')->setAttr('src', 'https://upload.wikimedia.org/wikipedia/ru/6/60/Daemon_Tools_Pro_logo.png')->show();

$newTag3 = new Tag('hr');
$newTag3->show();

$newTag4 = new Tag('input');
$newTag4->setAttr('type', 'radio')->setAttr('name', 'browser')->setAttr('value', 'ie')->setText('Internet Explorer')->show();