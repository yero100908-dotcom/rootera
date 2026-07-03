<?php

namespace App\Http\Controllers;

use App\Models\ServiceSector;

class TentangKamiController extends Controller
{
    public function index()
    {
        $sectors = ServiceSector::active()->get();

        return view('pages.tentang-kami', compact('sectors'));
    }
}
