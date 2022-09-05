<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller {

    public function __constructor() {
        
    }

    public function index() {
        $parser = \Config\Services::parser();
        $data = ['title' => 'my_title',
            'username' => 'arka jyoti adhikary'];
        $parser->setData($data);
        return $parser->render('user');
    }

    public function register() {
        helper('form');
        $data = [];
        $rules = [
            "username" => "required",
            "password" => "required"
        ];
        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                echo "ready to save";
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('registration_form', $data);
    }

}
