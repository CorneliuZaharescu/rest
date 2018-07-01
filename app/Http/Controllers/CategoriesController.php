<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
class CategoriesController extends Controller
{
    public function index(){
        return Categories::orderBy('id', 'asc')->get();
    }
}
