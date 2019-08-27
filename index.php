<?php

// Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close. Каждый метод принимает массив атрибутов.

use classes\Form;
use classes\SmartForm;

function autoloaderClass($class) {
    $class = str_replace("\\", '/', $class);

    $file = __DIR__ . "/{$class}.php";
    if(file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('autoloaderClass');

$form = new Form();

$form->open(['action'=>'index.php', 'method'=>'POST']);
$form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
$form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
$form->textarea(['placeholder'=>'Скажи привет']);
$form->submit(['value'=>'Отправить']);
$form->close();
