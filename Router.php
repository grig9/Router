<?php
// цель - создать простой маршрутизатор
// разбираюсь что такое маршрутизатор, как он работает.
// интерфейс, как я хочу им пользоваться
  // $route = new Route($array_routes);
  // $route->run();
// создаем конструктор принимающий ассоциативный массив
// создаем метод run()

class Route {
  protected $routes;

  public function __construct($routes) {
    $this->routes = $routes;
  }

  public function run() {
    $route = $_SERVER['REQUEST_URI'];
    var_dump($route);
    if(array_key_exists($route, $this->routes)) {
      // var_dump(include( $this->routes[$route] ));
      echo "Маршрут найден";
      return true;
    } else {
        echo "Маршрут не найден";
        return false;
      }
    }


  }
