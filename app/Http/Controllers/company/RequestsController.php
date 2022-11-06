<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Request;
use App\Models\Company;

class RequestsController extends Controller
{
    public function index(Company $company) {
        $requests = Request::where('company_id',$company->id)->get();
        return view('content.company.crequests',compact('requests','company'));
    }
}
