<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Opportunity;
class HomeController extends Controller
{
    public function index()
    {
        $opportunities = Opportunity::all();
        return view('content.home.home',compact('opportunities'));
    }
}
