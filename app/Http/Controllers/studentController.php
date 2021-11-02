<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentModel;
class studentController extends Controller
{
    function showData(){
     return studentModel::pluck('Name');
    
    }
    function countData(){
        return studentModel::count();
    }
    function upDateName(){
        return studentModel::where('Id','=',1)->update(['Name'=>'Jorina']);
    }
    function insertData(){
        return studentModel::insert(['Name'=>'Suboj','Roll'=>'6','Class'=>'seven']);
    }
}
