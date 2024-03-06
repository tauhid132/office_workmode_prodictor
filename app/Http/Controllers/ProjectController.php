<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function viewProjects(){
        return view('admin.projects');
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
}
