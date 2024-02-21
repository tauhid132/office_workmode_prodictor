<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\CustomerReview;
use Spatie\Sitemap\SitemapGenerator;

class PageController extends Controller
{
    public function viewHomePage(){
        return view('home',[
            'blogs' => Blog::latest()->take(3)->get(),
            'reviews' => CustomerReview::all()
        ]);
    }
    public function viewContactUs(){
        return view('contact-us');
    }
    public function viewBlogs(){
        return view('blogs',[
            'blogs' => Blog::all()
        ]);
    }
    public function viewSingleBlog($slug){
        return view('single-blog',[
            'blog' => Blog::where('slug', $slug)->first()
        ]);
    }
    public function viewAboutUs(){
        return view('about-us');
    }
    public function viewBookService(){
        return view('book-service');
    }

    public function viewCockroachesPestControl(){
        return view('cockroaches-pest-control');
    }
    public function viewBedBugsPestControl(){
        return view('bed-bug-pest-control');
    }
    public function viewTermitesPestControl(){
        return view('termites-pest-control');
    }
    public function viewRodentsPestControl(){
        return view('rodents-pest-control');
    }
    public function viewAntsPestControl(){
        return view('ants-pest-control');
    }
    public function viewSpidersPestControl(){
        return view('spiders-pest-control');
    }
    public function viewBeesPestControl(){
        return view('bees-pest-control');
    }
    public function viewFliesPestControl(){
        return view('flies-pest-control');
    }
    public function viewSanitizing(){
        return view('sanitizing-disinfecting');
    }
    public function viewRopeAccessCleaning(){
        return view('rope-access-cleaning');
    }

    public function generateSitemap(){
        $path = public_path('sitemap.xml');
        SitemapGenerator::create('https://pestcontrol-dubai.ae')->writeToFile($path);
    }
}
