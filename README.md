# php-classes
Мои классы для PHP

Лежат классы в ветках. Каждая ветка называется по принципу работу класса. Все просто)

Чтобы использовать класс в php коде необходимо:
1. Указать пространство имен (если папка classes лежит в корне проекта, но лучше почитайте про пространства имен и все втсанет на свои места): 
```php 
use classes\Tag;
```
2. Подключить функцию автозагрузки классов:
```php 
function autoloaderClass($class) {
    $class = str_replace("\\", '/', $class); // Заменяем слэши, чтобы работало на любой ОС
    $file = __DIR__ . "/{$class}.php"; // Указываем где искать класс относительно пространства имен
    // Если файл существует - подключаем
    if(file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('autoloaderClass');
```
3. Используем класс и радуемся!)

Приятного пользования!
