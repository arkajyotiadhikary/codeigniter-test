<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Users;

class UserCURD extends Controller {

//    display all
    public function index() {
        $model = new Users();
        return view('user_view', ['users' => $model->findAll()]);
    }

//    add user form
    public function create() {
        return view("add_user");
    }

//    store user data
    public function store() {
        $model = new Users();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email')
        ];
        $model->insert($data);
        return $this->response->redirect('/user-list');
    }

}
