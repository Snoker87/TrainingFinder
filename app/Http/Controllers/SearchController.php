<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function proccess(Request $request) {
        dd($request->search);
    }
}
