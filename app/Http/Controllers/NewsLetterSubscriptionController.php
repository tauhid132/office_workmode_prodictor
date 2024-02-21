<?php

namespace App\Http\Controllers;

use App\Models\NewsLetterSubscription;
use Illuminate\Http\Request;

class NewsLetterSubscriptionController extends Controller
{
    public function subscribeNewsletter(Request $request){
        NewsLetterSubscription::create([
            'email' => $request->email
        ]);
        return back();
    }

    public function viewSubmits(){
        return view('admin.newsletter-submits');
    }
    public function getSubmits(){
        $data = NewsLetterSubscription::all();
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y h:m:s');
        })
       
        ->addColumn('action', function($row){
            
            $btn = '<a class="btn btn-sm btn-warning" href="'.route('editBlog',$row->id).'"><i id="'.$row->id.'" class="fa fa-edit"></i> Edit</a> ';
            $btn = $btn.'<a class="btn btn-sm btn-danger delete_blog" id="'.$row->id.'"><i  class="fa fa-trash "></i> Delete</a>';
            return $btn;
        })
       
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }
}
