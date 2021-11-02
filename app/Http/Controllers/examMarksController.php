<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\examModel;
class examMarksController extends Controller
{
    function showData(){
        return examModel::all();
    }
}
