<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function viewAllBlogs(){
        return view('admin.blogs.all-blogs');
    }
    public function getBlogs(){
        $data = Blog::all();
        return datatables($data)
        ->addIndexColumn()
        ->addColumn('created_at' , function($row){
            return $row->created_at->format('d-M-Y h:m:s');
        })
        ->addColumn('author' , function($row){
            return $row->author->name;
        })
        ->addColumn('action', function($row){
            
            $btn = '<a class="btn btn-sm btn-warning" href="'.route('editBlog',$row->id).'"><i id="'.$row->id.'" class="fa fa-edit"></i> Edit</a> ';
            $btn = $btn.'<a class="btn btn-sm btn-danger delete_blog" id="'.$row->id.'"><i  class="fa fa-trash "></i> Delete</a>';
            return $btn;
        })
        ->addColumn('status', function($row){
            if($row->status == 1){
                $btn = '<span class="badge bg-success"> <i class="fa fa-eye"></i> Visible</span>';
            }else{
                $btn = '<span class="badge bg-danger"><i class="fa fa-eye-slash"></i> Hidden</span>';
            }
            return $btn;
        })
        ->rawColumns(['action' => 'action', 'status' => 'status'])
        ->make(true);
    }
    public function viewCreateNewBlog(){
        return view('admin.blogs.add-new-blog');
    }
    public function createNewBlog(Request $request){
        $blog = Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'posted_by' => Auth::user()->id,
            'slug' => Str::slug($request->title),
            'cover_image' => $this->storeImage($request)
        ]);
        return redirect()->route('viewAllBlogs');
    }
    public function viewEditBlog($id){
        return view('admin.blogs.edit-blog',[
            'blog' => Blog::find($id),
        ]);
    }
    public function editBlog(Request $request,$id){
        $blog = Blog::find($id);
        if($request->hasFile('cover_image')){
            $new_image_name = uniqid().'.'.$request->cover_image->extension();
            $request->cover_image->move(public_path('assets/images/blog_images'), $new_image_name);
            //delete old
            $old_image = $blog->cover_image;
            File::delete(public_path("assets/images/blog_images".$old_image));
            $blog = Blog::find($id)->update([
                'title' => $request->title,
                'status' => $request->status,
                'body' => $request->body,
                'slug' => Str::slug($request->title),
                'cover_image' => $new_image_name,
            ]);
        }else{
            $blog = Blog::find($id)->update([
                'title' => $request->title,
                'status' => $request->status,
                'body' => $request->body,
                'slug' => Str::slug($request->title),
            ]);
        }
        
        return redirect()->route('viewAllBlogs');
    }
    public function deleteBlog(Request $request){
        return Blog::find($request->id)->delete();
    }
    private function storeImage($request){
        $new_image_name = uniqid().'.'.$request->cover_image->extension();
        $request->cover_image->move(public_path('assets/images/blog_images'), $new_image_name);
        return $new_image_name;
    }
}
