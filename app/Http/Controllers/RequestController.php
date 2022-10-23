<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Opportunity;
use App\Models\User;
use App\Models\Request as Req;
use RealRashid\SweetAlert\Facades\Alert;

class RequestController extends Controller
{
    public function store(Opportunity $opportunity) {
        $req = new Req();
        $req->user_id = Auth::user()->id;
        $req->opportunity_id =$opportunity->id;
        $req->company_id = $opportunity->company->id;
        $req->save();
        Alert::success('شكراً لك '.Auth::user()->name, 'تم ارسال طلب تقديمك');
        return back();
    }
    public function userRequest() {
        $requests = Auth::user()->requests;
        return view('content.pages.requests',compact('requests'));
    }
   
}
