<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookService(Request $request){
        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'service_name' => $request->service_name,
            'details' => $request->details,
        ]);
        return back()->with('success', 'Booking Successfull. We will contact you as soon as possbile!');
    }

    public function viewBookings(){
        return view('admin.bookings');
    }
    public function getBookings(){
        $data = Booking::all();
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
