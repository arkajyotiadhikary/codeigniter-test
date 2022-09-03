<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class TestHelper extends Controller {

    public function index() {

//      you can use one by one 
        helper('form');
        helper('date');
        helper('url');

//      or you can use array         

        helper(['form', 'date', 'url']);
    }

}
