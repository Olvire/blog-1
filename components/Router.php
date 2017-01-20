<?php

    class Router{

        private $routes;

        public function __construct()
        {
            $routesPath = ROOT.'/config/routes.php';
            $this->routes = include ($routesPath);
        }

        private function getUri(){

            if (!empty($_SERVER['REQUEST_URI'])){
                return urldecode(trim($_SERVER['REQUEST_URI'], '/'));
            }

        }

        public function run()
        {
            //получили строку запроса
            $uri = $this->getUri();

            foreach ($this->routes as $uriPatern =>$path){
                //определили клас контроллера и акшен
                if (preg_match("~$uriPatern~", $uri)){

                    $internalRoute = preg_replace("~$uriPatern~", $path, $uri);

                    $segments = explode('/', $internalRoute);

                    $controllerName = array_shift($segments).'Controller';
                    $controllerName = ucfirst($controllerName);
                    $actionName = 'action'.ucfirst(array_shift($segments));
                    $parameters = $segments;
                // подключить клас контроллера
                    $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                    if (file_exists($controllerFile)){
                        include ($controllerFile);
                    }
                    //создаем обьект класа контроллера
                    $controllerObject = new $controllerName;
                    $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                    if ($result == !null){
                        break;
                    }else{
                        header("Location: /404.html");
                    }
                }
            }


        }
    }