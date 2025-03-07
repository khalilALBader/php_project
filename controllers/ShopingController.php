<?php
require_once "controllers/Controller.php";

class ShopingController extends Controller
{
    public function index()
    {
        $this->render('public\products\shoping.view.php');
    }
}