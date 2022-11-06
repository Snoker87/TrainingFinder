<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompainsController extends Controller
{
    public function index(){
        $companis = Company::all();
        return view('content.home.compains',compact('companis'));
    }
}
