<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class HomepageController extends Controller
{
    /**
     * Display the Homepage.
     */
    public function index(): Response
    {
        return Inertia::render('Homepage/Homepage', [
            'bgImage' => 'sample.jpg',
            'byline' => 'Artwork by',
            'pageHeading' => 'Liz Harvey'
        ]);
    }
}
