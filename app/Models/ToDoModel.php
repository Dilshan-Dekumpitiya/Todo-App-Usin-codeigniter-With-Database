<?php

namespace App\Models;

use CodeIgniter\Model;

class ToDoModel extends Model
{
    //database codes (Get codeignter model page)
    protected $table      = 'todos'; //table name
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['todoname', 'description'];

    protected $validationRules = [
        'todoname' => 'required|min_length[3]',
        'description' => 'min_length[3]',
    ];

    protected $validationMessages = [
        'todoname' => [
            'min_length' => 'Todo name must have minumum 3 characters',
        ],
        'description' => [
            'min_length' => 'Description must have minumum 3 characters',
        ],
    ];
}