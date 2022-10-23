<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Opportunity;
use App\Models\Company;
use Alert;

class CompanyController extends Controller
{
    public function index(Company $company) {
        return view('content.company.dashboard',compact('company'));
    }
    public function update(Request $request) {
        $company = Company::find($request->id);
        $company->name = $request->name;
        $company->desc = $request->desc;
        $company->phone = $request->phone;
        $company->email = $request->email;
        $company->site = $request->site;
        $company->hq = $request->hq;
        $company->save();
        Alert::success('شكراً لك', 'تم تعديل بيانات الشركة بنجاح !');
        return back();
    }
}
