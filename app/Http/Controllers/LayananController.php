<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Tool;

class LayananController extends Controller
{
    public function index()
    {
        $services = Service::active()->get();
        $tools    = Tool::active()->get();

        return view('pages.layanan', compact('services', 'tools'));
    }
}
