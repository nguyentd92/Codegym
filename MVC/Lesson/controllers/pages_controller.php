<?php
require_once 'base_controller.php';
namespace Controller;

use Controller\BaseController;

class PagesController extends BaseController {
    function __construct() {
        $this->folder = 'pages';
    }

    public function home() {
        $data = array(
            'name' => 'Nguyen Thanh Danh',
            'age' => 27
        );

        $this->render('home', $data);
    }

    public function error() {
        $this->render('error');
    }
}