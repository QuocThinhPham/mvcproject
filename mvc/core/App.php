<?php

class App
{
    protected $controllerName = 'Home';
    protected $actionName = 'index';
    protected $params = [];

    public function __construct()
    {
        $arr = $this->urlProcess();

        // Controller
        // Check $arr isn't null, $arr[0] != null and file Controller exists
        if ($arr != null && isset($arr[0]) && file_exists('./mvc/Controllers/' . ucfirst($arr[0]) . 'Controller.php')) {
            $this->controllerName = ucfirst($arr[0]) . 'Controller';
            unset($arr[0]);
        } else {
            $this->controllerName .= 'Controller';
            $this->redirect('home');
        }
        require_once './mvc/Controllers/' . $this->controllerName . '.php';
        $this->controllerName = new $this->controllerName;

        // Action
        if ($arr != null && isset($arr[1]) && method_exists($this->controllerName, $arr[1])) {
            $this->actionName = $arr[1];
            unset($arr[1]);
        }

        // Params
        $this->params = $arr ? array_values($arr) : [];

        // call controller, action and post params
        call_user_func_array([$this->controllerName, $this->actionName], $this->params);
    }

    public function urlProcess()
    {
        // Explode url from string to array
        if (isset($_REQUEST['url']))
            return explode('/', filter_var(trim($_REQUEST['url'])));
        return null;
    }

    private function redirect($urlPath)
    {
        header('Location: ./' . $urlPath);
    }
}