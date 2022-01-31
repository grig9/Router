# Router
Простой маршрутизатор
## Использование

создаем объект Router
```php
  $router = new Router($associate_massive);
```
формат передаваемого массива
```php
  $associate_massive = [
    "/" => 'homepage.php',
    "/about" => 'about.php',
    "/contacts" => 'contacts.php',
  ];
```
запуск router
```php
  $router->run();
```
