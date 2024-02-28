<?php

use App\Libs\Controller;
use App\Middleware\AuthMiddleware;

class HomeController extends Controller
{

    public function get()
    {
        $rooms = $this->model('room')->getAllRoom();

        $this->view('frontend/index', ['rooms' => $rooms]);
    }
    public function getProducts()
    {
    }
}