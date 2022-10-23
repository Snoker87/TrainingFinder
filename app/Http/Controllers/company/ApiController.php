<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Api;
use Alert;

class ApiController extends Controller
{
 public function index(Company $company) {
   
    return view('content.company.api',compact('company'));
 }   
 public function store(Request $request){

   if(Api::where('company_id',$request->company_id)->first()){
      ALert::warning('نعتذر','سبق وأن قمت باضافة ربط يرجى التواصل مع الدعم التقني');
      return back();
   } 
   $api = new Api();
   $api->method = $request->method;
   $api->uri = $request->apiUri;
   $api->key = $request->apiKey;
   $api->company_id = $request->company_id;
   $api->save();
   Alert::success('شكراً لك','تم اضافة الربط بنجاح');
   return back();
 }
}
