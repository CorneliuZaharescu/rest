<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities;

class CitiesController extends Controller
{
    public function index() {
        return Cities::orderBy('id', 'asc')->get();
    }
}
