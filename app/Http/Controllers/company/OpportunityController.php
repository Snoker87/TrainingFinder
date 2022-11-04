<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Opportunity;
use Alert;
class OpportunityController extends Controller
{
    public function index(Company $company) {
        $opportunities = $company->opportunities;
        return view('content.company.opportunities',compact('company','opportunities'));
    }
    public function store(Request $request){
        $date = str_replace(' ','',$request->date);
        $dateArray =  explode( '-', $date);
        $opportunity = new Opportunity();
        $opportunity->title = $request->title;
        $opportunity->start = date("Y-m-d", strtotime($dateArray[0]));  ;
        $opportunity->end = date("Y-m-d", strtotime($dateArray[1]));  ;
        $opportunity->email = $request->email;
        $opportunity->type = $request->type;
        $opportunity->specialization = $request->specialization;
        $opportunity->requirments = $request->requirments; 
        $opportunity->desc = $request->desc;
        $opportunity->method = $request->method;
        $opportunity->gpa_limit = $request->gpa_limit;
        $opportunity->company_id = $request->company_id;
        $opportunity->save();
        Alert::success('شكراً لك','تم الحفظ بنجاح');
        return back();
    }
    public function update(Request $request){
        $opportunity = Opporunity::find($request->id);
        $opportunity->save();
        return back();

    }

}
