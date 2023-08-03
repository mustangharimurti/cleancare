<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\MySqlConnection;
use App\Models\Barang;
use App\Models\Position;

class HomeController extends Controller
{

    function index(){
        $pageName = 'Deby Cleaning Service - Home';
        return view('home', ['pageName' => $pageName]);
    }

}
