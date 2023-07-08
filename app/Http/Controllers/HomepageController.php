<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomepageUpdateRequest;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
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

    /**
     * Update the Homepage.
     */
    public function update(HomepageUpdateRequest $request): RedirectResponse
    {
        $homepage = Page::query()->where('name', 'home')->first();
        $homepage->pre_heading = $request->preHeading;
        $homepage->main_heading = $request->mainHeading;
        $homepage->save();

        return Redirect::route('homepage');
    }
}
