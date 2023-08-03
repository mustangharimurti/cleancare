<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index(){
        $pageName = 'Deby Cleaning Service - service';
        return view('service', ['pageName' => $pageName]);
    }
}
