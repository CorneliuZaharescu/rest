<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class JobsController extends Controller
{
    public function index()
    {
        return Jobs::orderBy('id', 'asc')->get();
    }

    public function getItem($id) {
        return Jobs::find($id);
    }
}
