<?php
    class App{
        public function __construct()
        {
            $url = $_GET['url']; //toma el valor de la regla creada en la vista .htaccess
            $arregloUrl = explode('/',$url);

            $controlador = empty($arregloUrl[0])?'inicio':$arregloUrl[0];
            $metodo = empty($arregloUrl[1])?'login':$arregloUrl[1];

            $urlControlador = 'controllers/'.$controlador.'.php'; //ruta que se encuentra en la carpeta de controllers

            //Es una validacion
            if(file_exists($urlControlador)){
                require_once($urlControlador);
                $controller = new $controlador;

                $urlModelo = 'models/'.$controlador.'Modelo.php';
                if (file_exists($urlModelo)) {
                require_once($urlModelo);
                $modelo= $controlador.'Modelo';
                $controller->loadModel($modelo);
                }

                if (method_exists($controller, $metodo)) {
                    $controller->$metodo();//invocacion del metodo
                }
            }
        }

    }
?>