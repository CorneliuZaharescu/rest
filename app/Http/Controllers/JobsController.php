<?php

namespace App\Http\Controllers;
use App\Repository\JobsRepository as repo;
use Illuminate\Support\Facades\Input;

class JobsController extends Controller
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

    public function getItem($id) {
        $item = $this->repo->getById($id);
        return $item;
    }

    public function search() {
        return $this->repo->search(Input::all());
    }
}
