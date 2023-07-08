<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Inertia\Inertia;
use Inertia\Response;

class HomepageController extends Controller
{
    /**
     * Display the Homepage.
     */
    public function index(): Response
    {
        $pageData = Page::query()->where('name', 'home')->first();

        return Inertia::render('Homepage', [
            'pageData' => $pageData,
        ]);
    }
}
