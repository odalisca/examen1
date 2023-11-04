<?php

namespace App\Http\Controllers;
use App\Models\Directorio;
use resources\view;
use Illuminate\Http\Request;

class DirectoriosController extends Controller
{
  public function index(){

    return view('directorio');
  }
}



