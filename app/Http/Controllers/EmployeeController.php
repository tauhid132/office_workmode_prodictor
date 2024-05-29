<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function viewEmployees(){
        return view('company.employees');
    }

    public function getEmployees(){
        $company = Company::where('user_id',  Auth::user()->id)->first();
        $data = Employee::where('company_id', $company->id)->get();
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y');
        })
        ->addColumn('action', function($row){
            
            $btn = '<a href="'.route('updateEmployee', $row->id).'" class="btn btn-sm btn-success m-1"><i class="fa fa-refresh"></i> Update</a>';
            $btn = $btn.'<a><button id="'.$row->id.'" class="btn btn-sm btn-danger delete m-1"><i class="fa fa-trash"></i> Delete</button></a>';
            return $btn;
        })
       
       
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }

    public function viewAddNewEmployee(){
        return view('company.add-new-employee',[
            'skills' => Skill::all()
        ]);
    }
    public function addNewEmployee(Request $request){
        $company = Company::where('user_id',  Auth::user()->id)->first();
        $employee = Employee::create([
            'company_id' => $company->id,
            'name' => $request->name,
            'position' => $request->position,
            'experience_level' => $request->experience_level,
            'current_working_mode' => $request->current_working_mode,
            'working_days_per_week' => $request->working_days_per_week,
            'working_hours_per_day' => $request->working_hours_per_day,
            'salary' => $request->salary,
        ]);
        $employee->skills()->attach($request->skills);
        return redirect()->route('viewEmployees')->with('success', 'Employee Added Successfully!');
    }

    public function viewUpdateEmployee($employee_id){
        return view('company.update-employee',[
            'employee' => Employee::find($employee_id),
            'skills' => Skill::all()
        ]);
    }

    public function updateEmployee(Request $request, $employee_id){
        $employee = Employee::find($employee_id);
        $employee->update([
            'name' => $request->name,
            'position' => $request->position,
            'experience_level' => $request->experience_level,
            'current_working_mode' => $request->current_working_mode,
            'working_days_per_week' => $request->working_days_per_week,
            'working_hours_per_day' => $request->working_hours_per_day,
            'salary' => $request->salary,
        ]);
        $employee->skills()->sync($request->skills);
        return redirect()->route('viewEmployees')->with('success', 'Employee Updated Successfully!');  
    }
}
