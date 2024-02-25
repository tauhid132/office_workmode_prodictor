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
            
        ]);
    }
    

    public function generateSitemap(){
        $path = public_path('sitemap.xml');
        SitemapGenerator::create('https://pestcontrol-dubai.ae')->writeToFile($path);
    }
}
