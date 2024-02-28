<?php

use App\Libs\Controller;
use App\Middleware\AuthMiddleware;

class CheckoutController extends Controller
{

    public function checkout()
    {

        $rooms = $this->model('room')->getAllRoomDat();

        $this->view('frontend/checkout', ['rooms' => $rooms]);
    }
    public function dat($id)
    {

        $this->model('room')->dat($id);
        $rooms = $this->model('room')->getAllRoom();

        $this->view('frontend/index', ['rooms' => $rooms]);
    }
    public function pay()
    {

        $this->model('room')->pay();
        $rooms = $this->model('room')->getAllRoom();

        $this->view('frontend/index', ['rooms' => $rooms]);
    }

    public function huy($id)
    {
        $this->model('room')->huy($id);

        $rooms = $this->model('room')->getAllRoom();

        $this->view('frontend/index', ['rooms' => $rooms]);
    }
}