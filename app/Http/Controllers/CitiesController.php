<?php

namespace App\Http\Controllers;

use App\Repository\CitiesRepository as repo;

class CitiesController extends Controller
{
    private $repo;

    public function __construct(repo $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        return $this->repo->getAll();
    }
}
