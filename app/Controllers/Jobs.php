<?php

namespace App\Controllers;

class Jobs extends BaseController
{
    public function index(): string
    {
        return view('jobs');
    }

    public function seekerForm(): string
    {
        return view('job_seeker_form');
    }

    public function seekerProfile()
    {
        $user = session()->get('user') ?? [
            'full_name'     => 'Juan Dela Cruz',
            'contact'       => '09123456789',
            'address'       => 'Barangay Example, Pili, Camarines Sur',
            'education'     => 'High School',
            'skills'        => 'Cooking, Babysitting, House Cleaning',
            'job_type'      => ['Household', 'Helper'],
            'expected_pay'  => '₱500/day',
            'bio'           => 'A hardworking and trustworthy individual.',
            'photo'         => null,
        ];

        return view('job_seeker_profile', ['user' => $user]);
    }

    public function postJobForm(): string
    {
        return view('job_post_form'); 
    }
    public function employerInfoForm(): string
    {
        return view('employer_info_form'); 
    }

    public function employerProfile()
    {
        $employer = session()->get('employer') ?? [
            'company_name'  => 'Cyber Squad Inc.',
            'contact'       => '09128887777',
            'address'       => 'Naga City, Camarines Sur',
            'industry'      => 'IT Services',
            'bio'           => 'We are a growing company seeking talented individuals.',
            'photo'         => null,
        ];

        return view('employer_profile', ['employer' => $employer]);
    }
}
