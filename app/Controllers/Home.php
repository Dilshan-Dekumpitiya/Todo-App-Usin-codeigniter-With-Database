<?php

namespace App\Controllers;

use App\Models\ToDoModel;

class Home extends BaseController
{
    // first call index method
    public function index($id='')
    {
        $dataEdit =array();
        $todosModel = new ToDoModel();
        $data = $todosModel -> orderBy('id','desc')->findAll();
        $data = array_chunk($data,4);
        if(is_numeric($id)){
            $dataEdit = $todosModel -> find($id);
        }
        return view('todos',array("data"=> $data , 'dataEdit' => $dataEdit));
    }

    public function store($id=''){ //base url method

        $data = $this -> request -> getPost();
        $todosModel = new ToDoModel();
        if(!empty($id) && is_numeric($id)){
            $todosModel -> update($id,$data);
        }else{
            $todosModel -> insert($data);
        }
        
        return redirect() -> to('home');
    }

    public function delete($id){
        $todosModel = new ToDoModel();
        $todosModel -> delete($id);
        session() -> setFlashdata('successMessage','Deleted Successfully');

        return redirect() -> to('home');
    } 
}
