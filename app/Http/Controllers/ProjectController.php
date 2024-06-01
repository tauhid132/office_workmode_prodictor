<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Company;
use App\Models\Feature;
use App\Models\Project;
use App\Models\Employee;
use App\Models\ProjectEmployee;
use App\Models\ProjectFeedback;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function viewProjects(){
        return view('company.projects');
    }
    public function getProjects(){
        $data = Project::with('type')->get();
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y');
        })
        ->addColumn('action', function($row){
            
            $btn = '<a href="'.route('viewManageProject', $row->id).'"><button class="btn btn-sm btn-success  m-1"><i class="fa fa-edit"></i>Manage</button></a>';
            $btn = $btn.'<a><button id="'.$row->id.'" class="btn btn-sm btn-danger delete_project m-1"><i class="fa fa-trash"></i></button></a>';
            return $btn;
        })
       
        ->addColumn('p_type' , function($row){
            return $row->type->project_type_name;
        })
        ->addColumn('status' , function($row){
            if($row->status == 'Created'){
                $btn = '<span class="badge bg-primary">Created</span>';
            }else if($row->status == 'On-Going'){
                $btn = '<span class="badge bg-warning">On-Going</span>';
            }else if($row->status == 'Completed'){
                $btn = '<span class="badge bg-success">Completed</span>';
            }
            return $btn;
        })
        ->rawColumns(['action' => 'action', 'status' => 'status'])
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
        ProjectFeedback::create([
            'project_id' => $project->id,
        ]);
        $project->skills()->attach($request->skills);
        return redirect()->route('addNewProjectStepTwo', $project->id)->with('project_id',$project->id);
    }

    public function viewAddNewProjectStepTwo($project_id){
        return view('company.add-new-project-step-two',[
            'skills' => Skill::all(),
            'project_types' => ProjectType::all(),
            'project' => Project::find($project_id),
            'features' => Feature::all()
        ]);
    }

    public function addNewProjectStepTwo(Request $request, $project_id){
        // $data = [
        //     'experience' => 'Beginner',
        //     'skills' => 'UI/UX'
        // ];
        // $response = Http::withBody(json_encode($data), 'application/json')
        // ->post('http://127.0.0.1:5000/predict-job');
        // $result = json_decode($response);

        // dd($result);
        $project = Project::find($project_id);
        $project->skills()->attach($request->skills);
        $company = Company::where('user_id', Auth::user()->id)->first();
        $employees = Employee::with('skills')->where('company_id', $company->id)->get();
        $reqired_skills = $request->skills;
        $selected = array();
        foreach($reqired_skills as $skill){
            foreach($employees as $employee){
                $emp_skills = array();
                foreach($employee->skills as $emp_skill){
                    array_push($emp_skills, $emp_skill->id);
                }
                if(in_array($skill, $emp_skills)){
                    array_push($selected, $employee->name);
                    $empl = ProjectEmployee::where('project_id', $project_id)->where('employee_id', $employee->id)->first();
                    if($empl == null){
                        ProjectEmployee::create([
                            'project_id' => $project_id,
                            'employee_id' => $employee->id,
                            'working_mode' => 'Hybrid',
                            'skills' => $emp_skill->skill_name,
                        ]);
                    }else{
                        $empl->update([
                            'skills' => $empl->skills.', '.$emp_skill->skill_name,
                        ]);
                    }
                    
                    break;
                }
            }
        }
        

        return redirect()->route('addNewProjectStepThree', $project_id)->with('project_id',$request->id);
    }

    public function viewAddNewProjectStepThree($project_id){
        return view('company.add-new-project-step-three',[
            'skills' => Skill::all(),
            'project_types' => ProjectType::all(),
            'project' => Project::with('employees')->where('id', $project_id)->first(),
            'features' => Feature::all(),
            'employees' => Employee::all(),
        ]);
    }
    public function addNewProjectStepThree(Request $request, $project_id){
        return redirect()->route('addNewProjectStepTwo')->with('project_id',$request->id);
    }

    public function deleteProject(Request $request){
        Project::find($request->id)->delete();
    }

    public function viewManageProject($project_id){
        return view('company.manage-project',[
            'skills' => Skill::all(),
            'project_types' => ProjectType::all(),
            'project' => Project::with('employees')->where('id', $project_id)->first(),
            'features' => Feature::all(),
            'employees' => Employee::all(),
        ]);  
    }

    public function viewProjectFeedback($project_id){
        return view('company.project-feedback',[
            'skills' => Skill::all(),
            'project_types' => ProjectType::all(),
            'project' => Project::with('employees', 'feedback')->where('id', $project_id)->first(),
            'features' => Feature::all(),
            'employees' => Employee::all(),
        ]);  
    }

    public function saveProjectFeedback(Request $request, $project_id){
        $project_feedback = ProjectFeedback::where('project_id', $project_id)->first();
        $project_feedback->update([
            'is_successfull' => $request->is_successfull ? 1 : 0,
            'is_prediction_correct' => $request->is_prediction_correct ? 1 : 0,
            'save_resource' => $request->save_resource ? 1 : 0,
            'increased_efficiency' => $request->increased_efficiency ? 1 : 0,
            'comment' => $request->comment

        ]);
        return back()->with('success', "Feedback Updated! Thank you for your feedback.");

    }
}
