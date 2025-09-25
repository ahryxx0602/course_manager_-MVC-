<?php
//$router->get('/users', 'UserController@index');
class Router
{
              protected $routers = [];
              public function get($url, $action)
              {
                            $this->routers['GET'][$url] = $action;
              }
              public function post($url, $action)
              {
                            $this->routers['POST'][$url] = $action;
              }

              public function getRout()
              {
                            return $this->routers;
              }

              public function xulyPath($method, $url)
              {
                            $url = $url ?: '/'; // Nếu url rỗng thì trả về /
                            if (isset($this->routers[$method][$url])) {
                                          $action = $this->routers[$method][$url];
                                          [$controller, $funcs] = explode('@', $action);

                                          require_once './app/Controllers/' . $controller . '.php';
                                          $controller = new $controller();
                                          $controller->$funcs();
                            } else {
                                          echo "404 error";
                            }
              }
}
