<?php

declare(strict_types=1);

namespace App\Controller;

use App\Kernel\Controller\Controller;

class MovieController extends Controller
{
    public function index(): void
    {
        $this->view('movies');
    }

    public function add(): void
    {
        $this->view('admin/movies/add');
    }

    public function store(): void
    {
//        dd($this->request()->input('name'));

        $this->response()->send(
            content: json_encode(['value' => $this->request()->input('name')]),
            headers: ['Content-Type' => 'application/json'],
        );
    }
}