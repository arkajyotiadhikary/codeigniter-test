<?php

namespace App\Controllers;

class Home extends BaseController {

    public function index() {
        return view('home');
    }
    public function welcome(){
        return view('welcome_message');
    }

    public function _remap($method) {
        if (method_exists($this, $method)) {
            return $this->$method;
        } else {
            return $this->index();
        }
    }

}
