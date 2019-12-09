<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::with(['galleries'])->get();
        return view(
            'pages.package',
            ['items' => $items]
        );
    }
}
