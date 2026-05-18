<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ContactMessageController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        return view('welcome', compact('projects'));
    }
}