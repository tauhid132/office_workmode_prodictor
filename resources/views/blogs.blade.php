@extends('master')
@section('page-title', "News & Blogs")
@section('main-body')
<div class="page-wrapper">
    @include('includes.header')
    <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-remove"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="get" action="{{ route('view.home.page') }}">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-3.jpg);">
        <div class="auto-container">
            <h1>News & Article</h1>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="row">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 news-block-one">
                    <div class="inner-box">
                        <div class="image"><a href="{{ route('view.single.blog', $blog->slug) }}"><img style="height: 300px; width:100%" src="{{ asset('assets/images/blog_images') }}/{{ $blog->cover_image }}" alt=""></a></div>
                        {{-- <div class="category">Lifestyle</div> --}}
                        <h4><a href="{{ route('view.single.blog', $blog->slug) }}">{{ $blog->title }}</a></h4>
                        <div class="post-meta">By <a href="#"><span>  {{ $blog->author->name }}</span></a> - <a href="#">{{ $blog->created_at->format('d F, Y') }}</a></div>
                        <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit($blog->body, 150, $end='...')) !!}</div>
                        <div class="link-btn"><a href="{{ route('view.single.blog', $blog->slug) }}" class="theme-btn btn-style-one style-two"><span> Learn More</span></a></div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
            <div class="page-pagination mt-40 text-center">
                <ul class="clearfix">
                    <li><a href="#">Prev</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">Next</a></li>
                </ul> 
            </div>
        </div>
    </section>

    @include('includes.footer')
	
</div>
<!--End pagewrapper-->
@endsection