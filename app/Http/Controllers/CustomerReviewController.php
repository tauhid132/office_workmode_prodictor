<?php

namespace App\Http\Controllers;

use App\Models\CustomerReview;
use Illuminate\Http\Request;

class CustomerReviewController extends Controller
{
    public function viewReviews(){
        return view('admin.customer-reviews');
    }
    public function getReviews(){
        $data = CustomerReview::all();
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y h:m:s');
        })
       
        ->addColumn('action', function($row){
            $btn = '<a><button id="'.$row->id.'" class="btn btn-sm btn-info m-1 edit_review"><i class="fa fa-edit"></i> Edit</button></a>';
            $btn = $btn.'<a><button id="'.$row->id.'" class="btn btn-sm btn-danger delete_review m-1"><i class="fa fa-trash"></i></button></a>';
            return $btn;
        })
       
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }

    public function addReview(Request $request){
        
        if(empty($request->id)){
            CustomerReview::create([
                'name' => $request->name,
                'rating' => $request->rating,
                'location' => $request->location,
                'review' => $request->review
            ]);
        }else{
            $review = CustomerReview::find($request->id);
            $review->update([
                'name' => $request->name,
                'rating' => $request->rating,
                'location' => $request->location,
                'review' => $request->review
            ]);
        }
    }

    public function fetchReview(Request $request){
        return response()->json(CustomerReview::find($request->id));
    }
}
