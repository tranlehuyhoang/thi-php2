<?php

namespace App\Libs;

use App\Helpers\Format;
// method to include view, model
// model return class model to handle with database
// Ex: $postModel = $this->model('Posts');
//     $postModel->getAllPost();
class Controller
{
    public $fm;
    public function __construct()
    {
        $this->fm = new Format();
    }
    public function model($model)
    {
        $exit_model = array('brand', 'wishlist', 'coupon', 'productimages', 'orderitem', 'user', 'shop', 'auth', 'admin', 'cart', 'category', 'contact', 'customer', 'order', 'orderdetail', 'orders', 'product', 'slide', 'room');

        // model first name ex: product
        if (in_array($model, $exit_model)) {
            require_once __DIR__ . "/../Models/" . ucfirst($model)  . 'Model.php';
            $model = ucfirst($model) . 'Model';
            return new  $model();
        } else {
            die('model not found');
        }
    }
    public function view($view, $data = [''])
    {

        if (file_exists('../app/Views/' .  $view . '.php')) {
            require_once __DIR__ . "/../Views/" . $view . '.php';
        } else {
            die('views not found');
        }
    }
}
