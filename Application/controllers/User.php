<?php

use Application\core\Controller;

class User extends Controller
{
    public function index()
    {
        $Users = $this->model('Users');
        $data = $Users::findAll();
        $this->view('user/index', ['users' => $data]);
    }

    public function show($id = null)
    {
        if (is_numeric($id)) {
            $User = $this->model('Users');
            $data = $User::findById($id);
            $this->view('user/show', ['user' => $data]);
        } else {
           $this->pageNotFound();
        }
        
        
    }
}
