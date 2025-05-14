<?php

namespace App\Controllers;

class Jobs extends BaseController
{
    public function index(): string
    {
        return view('jobs');
    }
}
