<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index($name = null): string
  {
    return '안녕 HomeController 이름? ' . $name;
  }
}
