<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller {

    public function index() {
        $parser = \Config\Services::parser();
        $data = ['title' => 'my_title',
            'username' => 'arka'];
        $parser->setData($data);
        return $parser->render('user');
    }

}
