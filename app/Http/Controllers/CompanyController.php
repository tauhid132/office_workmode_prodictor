<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function viewCompanyInfo(){
        return view('admin.company-info',[
            'company' => Company::where('user_id',  Auth::user()->id)->first()
        ]);
    }
    public function updateCompanyInfo(Request $request){
        $company = Company::find($request->id);
        $company->update([
            'company_name' => $request->company_name,
            'company_type' => $request->company_type,
            'about_company' => $request->about_company,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'number_of_employees' => $request->number_of_employees,
        ]);
        return back()->with('success','Company Info Updated');
    }
}
