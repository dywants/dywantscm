<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeIndexController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Homepage');
    }
}
