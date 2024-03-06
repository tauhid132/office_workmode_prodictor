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
}
