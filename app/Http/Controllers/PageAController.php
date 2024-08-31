<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageAController extends Controller
{
    public function index(Request $request)
    {
        return view('pageA.index', [
            'pageLink' => $request->get('pageLink'),
            'validUntil' => $request->get('validUntil'),
        ]);
    }
}
