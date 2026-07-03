<?php

namespace App\Http\Controllers;

use App\Models\CoverageArea;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::active()->get();
        $areas    = CoverageArea::active()->get();

        return view('pages.home', compact('services', 'areas'));
    }
}
