<?php

namespace App\Http\Controllers;

use App\Repository\CategoriesRepository as repo;

class CategoriesController extends Controller
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
