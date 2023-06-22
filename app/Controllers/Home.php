<?php

namespace App\Controllers;

use App\Models\ToDoModel;

class Home extends BaseController
{
    // first call index method
    public function index()
    {
        $todosModel = new ToDoModel();
        $data = $todosModel -> orderBy('id','desc')->findAll();
        $data = array_chunk($data,4);
        return view('todos',array("data"=> $data));
    }

    public function store(){ //base url method

        $data = $this -> request -> getPost();
     
        $todosModel = new ToDoModel();
        $todosModel -> insert($data);

        return redirect() -> to('home');
    }
}
