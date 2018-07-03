<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::orderBy('id', 'asc')->get();
        foreach ($jobs as $job) {
            $job->category;
            $job->city;
        }
        return $jobs;
    }

    public function getItem($id) {
        $job = Jobs::find($id);
        $job->category;
        $job->city;
        return $job;
    }
}
