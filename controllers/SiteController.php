<?php
namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{

    public function home()
    {
        return $this->render('home');
    }
    public function contact()
    {
        $params = [
            'name' => "The Saikat"
        ];

        return $this->render('contact', $params);
    }

    public function handleContact()
    {
        return "handling submitted data";
    }

}