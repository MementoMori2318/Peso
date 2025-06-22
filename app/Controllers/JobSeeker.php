<?php

namespace App\Controllers;

class JobSeeker extends BaseController
{
    public function index(): string
    {
        return view('job_seeker_form');
    }
}
