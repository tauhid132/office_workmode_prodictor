<?php

namespace App\Http\Controllers;
use datatables;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function viewDashboard(){
        return view('admin.dashboard',[
            'total_users' => User::count(),
            'total_blogs' => Blog::count(),
            'total_bookings' => Booking::count(),
        ]);
    }
    public function viewUsers(){
        return view('admin.users',[
            'users' => User::all()
        ]);
    }
    public function getUsers(){
        $data = User::select('*');
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y');
        })
        ->addColumn('action', function($row){
            if($row->status == 1){
                $btn = '<a><button id="'.$row->id.'" class="btn btn-sm btn-info disable_enable m-1"><i class="fa fa-ban"></i> Disable</button></a>';
            }else{
                $btn = '<a><button id="'.$row->id.'" class="btn btn-sm btn-info disable_enable m-1"><i class="fa fa-check"></i> Enable</button></a>';
            }
            $btn = $btn.'<a><button id="'.$row->id.'" class="btn btn-sm btn-warning change_password m-1"><i class="fa fa-lock"></i> Change Password</button></a>';
            $btn = $btn.'<a><button id="'.$row->id.'" class="btn btn-sm btn-danger delete m-1"><i class="fa fa-trash"></i> Delete</button></a>';
            return $btn;
        })
        ->addColumn('status', function($row){
            if($row->status == 1){
                $btn = '<span class="badge bg-success"> Active</span>';
            }else{
                $btn = '<span class="badge bg-danger"> Inactive</span>';
            }
            return $btn;
        })
       
        ->rawColumns(['action' => 'action', 'status' => 'status'])
        ->make(true);
    }
    public function deleteUser(Request $request){
        return User::find($request->id)->delete();
    }
    public function disableEnableUser(Request $request){
        $user = User::find($request->id);
        if($user->status){
            return $user->update([
                'status' => 0
            ]);
        }else{
            return $user->update([
                'status' => 1
            ]);
        };   
    }
    public function addNewAdmin(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required',  Password::defaults()],
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]); 
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        $user = User::find($request->id);
        $user->update([
            'password' => Hash::make($request->password),
        ]); 
    }

    
}
