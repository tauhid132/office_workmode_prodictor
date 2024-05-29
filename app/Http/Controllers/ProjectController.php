<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Feature;
use App\Models\Skill;
use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function viewProjects(){
        return view('company.projects');
    }
    public function getProjects(){
        $data = Project::all();
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y');
        })
        ->addColumn('action', function($row){
            
            $btn = '<a><button id="'.$row->id.'" class="btn btn-sm btn-warning change_password m-1"><i class="fa fa-edit"></i> Edit</button></a>';
            $btn = $btn.'<a><button id="'.$row->id.'" class="btn btn-sm btn-danger delete m-1"><i class="fa fa-trash"></i> Delete</button></a>';
            return $btn;
        })
       
       
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }

    public function viewAddNewProjectStepOne(){
        return view('company.add-new-project-step-one',[
            'skills' => Skill::all(),
            'project_types' => ProjectType::all()
        ]);
    }

    public function addNewProjectStepOne(Request $request){
        $project = Project::create([
            'project_type' => $request->project_type,
            'project_description' => $request->project_description,
            'project_duration' => $request->project_duration,
            'project_budget' => $request->project_budget,
        ]);
        $project->skills()->attach($request->skills);
        return redirect()->route('addNewProjectStepTwo')->with('project_id',$project->id);
    }

    public function viewAddNewProjectStepTwo(){
        return view('company.add-new-project-step-two',[
            'skills' => Skill::all(),
            'project_types' => ProjectType::all(),
            'project' => Project::find(4),
            'features' => Feature::all()
        ]);
    }

    public function addNewProjectStepTwo(Request $request){
        return redirect()->route('addNewProjectStepThree')->with('project_id',$request->id);
    }

    public function viewAddNewProjectStepThree(){
        return view('company.add-new-project-step-three',[
            'skills' => Skill::all(),
            'project_types' => ProjectType::all(),
            'project' => Project::find(4),
            'features' => Feature::all(),
            'employees' => Employee::all(),
        ]);
    }
    public function addNewProjectStepThree(Request $request){
        return redirect()->route('addNewProjectStepTwo')->with('project_id',$request->id);
    }
}
