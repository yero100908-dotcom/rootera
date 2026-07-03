<?php

namespace App\Http\Controllers;

use App\Models\CoverageArea;

class AreaLayananController extends Controller
{
    public function index()
    {
        $areas = CoverageArea::active()->get();
        return view('pages.area-layanan', compact('areas'));
    }
}
