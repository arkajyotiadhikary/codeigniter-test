<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;

class Contact extends Controller {

    public function index() {
        return view('contact');
    }

    public function create() {
        helper('form', 'url');
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ];
        $val = $this->validate($rules);

        if (!$val) {
            return view('contact', ['validation' => $this->validator]);
        } else {
            $model = new ContactModel();
            $model->save([
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'message' => $this->request->getVar('message')
            ]);
            print_r($this->request->getPost());

            return('success');
        }
    }

}
