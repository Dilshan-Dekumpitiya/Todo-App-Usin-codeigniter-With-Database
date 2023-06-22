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
}