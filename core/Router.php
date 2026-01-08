<?php
class Router {
    public static function route($url) {
        $url = explode('/', trim($url, '/'));

        // controller
        $controller = !empty($url[0]) ? $url[0] : 'auth';

        // default method
        if ($controller == 'auth') {
            $method = $url[1] ?? 'login';
        } else {
            $method = $url[1] ?? 'index';
        }

        $param = $url[2] ?? null;

        $file = "../app/controllers/" . ucfirst($controller) . "Controller.php";
        if (!file_exists($file)) {
            die("Controller tidak ditemukan");
        }

        require_once $file;

        $class = ucfirst($controller) . "Controller";
        $obj = new $class;

        if (!method_exists($obj, $method)) {
            die("Method tidak ditemukan");
        }

        if ($param) {
            $obj->$method($param);
        } else {
            $obj->$method();
        }
    }
}
