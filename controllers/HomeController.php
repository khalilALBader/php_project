<?php
require_once 'controllers\Controller.php';

class HomeController extends Controller{
    public function index() {
        $this->render('public.pages.home');
       // require_once __DIR__ . '/../views/page/home.view.php';
    }
}