<?php
namespace app\controllers;

use core\base\Controller;
use core\base\View;

class HomeController extends Controller
{
    public function goHome()
    {
        $view = new View('home');
        echo $view->render();
    }
}
