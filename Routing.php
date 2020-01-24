<?php

require_once 'Controllers/SecurityController.php';
require_once 'Controllers/BoardController.php';

class Routing
{
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'login' => [
                'controller' => 'SecurityController',
                'action' => 'login'
            ],
            'logout' => [
                'controller' => 'SecurityController',
                'action' => 'logout'
            ],
            'users' => [
                'controller' => 'AdminController',
                'action' => 'users'
            ],
            'register' => [
                'controller' => 'SecurityController',
                'action' => 'register'
            ],
            'board' => [
                'controller' => 'BoardController',
                'action' => 'board'
            ],

            'addAd' => [
                'controller' => 'BoardController',
                'action' => 'addAd'
            ],
            'showAd' => [
                'controller' => 'BoardController',
                'action' => 'showAd'
            ],

            'showAdOne' => [
                'controller' => 'BoardController',
                'action' => 'showAdOne'
            ]
        ];
    }

    public function run()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}