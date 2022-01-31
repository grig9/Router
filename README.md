# Router
Простой маршрутизатор
## Использование

создаем объект Route
```php
  $route = new Route($associate_massive);
```
формат передаваемого массива
```php
  $associate_massive = [
    "/" => 'homepage.php',
    "/about" => 'about.php',
    "/contacts" => 'contacts.php',
  ];
```
запуск route
```php
  $route->run();
```
