<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {        
        return Inertia::render('Home', [
            'message' => 'This is a string from the backend',
        ]);
    }
}