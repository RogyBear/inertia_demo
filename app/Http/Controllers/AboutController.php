<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class AboutController extends Controller
{
    public function index()
    {        
        return Inertia::render('About', [
            'about' => 'This is a string from the backend for the about page',
            'message' => 'Message string from the about controller!',
            'test' => 'Just another test string'
        ]);
    }
}