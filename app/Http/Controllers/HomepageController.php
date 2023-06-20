<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class HomepageController extends Controller
{
    /**
     * Display the Homepage.
     */
    public function index(): Response
    {
        return Inertia::render('Homepage', [
            'text' => 'Hello World!'
        ]);
    }
}
