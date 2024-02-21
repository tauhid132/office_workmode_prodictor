@extends('master')
@section('page-title', "Pest Control Services Company in Dubai, UAE | Pest Control Dubai")
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

    <section class="banner-section style-three">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-4.png);">     
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h1>Protecting Your Home From <br> Unwanted Pests.</h1>
                                <div class="text">Experience the difference and contact us now.</div>
                                <div class="link-box">
                                    <a href="https://wa.me/971569193222" class="theme-btn btn-style-one"><span>Schedule Services</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-5.png);">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h1>Keep Your Home  Clean</h1>
                                <div class="text">Experience the difference and contact us now.</div>
                                <div class="link-box">
                                    <a href="https://wa.me/971569193222" class="theme-btn btn-style-one"><span>Book Service Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="swiper-slide" style="background-image: url(assets/images/main-slider/image-6.png);">
                    <div class="content-outer">
                        <div class="content-box justify-content-center">
                            <div class="inner text-center">
                                <h1>Provide Service to fix your<br> Pest Problems</h1>
                                <div class="text">Experience the difference and contact us now.</div>
                                <div class="link-box">
                                    <a href="https://wa.me/971569193222" class="theme-btn btn-style-one"><span>Book Service Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-slider-nav">
            <div class="banner-slider-control banner-slider-button-prev"><span><i class="flaticon-left-arrow"></i></span></div>
            <div class="banner-slider-control banner-slider-button-next"><span><i class="flaticon-left-arrow"></i></span></div>
        </div>
    </section>

    <section class="contact-info-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 info-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="fa-brands fa-whatsapp"></span></div>
                        <div class="content text-center">
                            <h5>Call or Whats App</h5>
                            <h4><a href="https://wa.me/971569193222">0569193222</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 info-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                        <div class="content text-center">
                            <h5>+971 4 256 2282</h5>
                            <h4><a href="contact.html"> Across Dubai – UAE</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 info-block">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                        <div class="content text-center">
                            <h5>+971 6 553 8723</h5>
                            <h4><a href="contact.html">Sharjah – UAE</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="services-section style-three">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Services</div>
                <h2>Pest Control & Building Cleaning Services</h2>
            </div>
            <div class="wrapper-box">
                <span class="shape-three"><img src="assets/images/shape/shape-6.png" alt=""></span>
                <span class="shape-four"><img src="assets/images/shape/shape-7.png" alt=""></span>
                <div class="row">
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-cockroach"></span></div>
                            <h4><a href="{{ route('view.cockroaches.pest.control') }}">Cockroach</a></h4>
                            <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit("Experience comprehensive cockroach pest control solutions with Rowad Al Ghad. Our dedicated team of experts is equipped with the knowledge and tools to effectively eradicate cockroach infestations from your home or business. Using a combination of thorough inspections, customized treatment plans, and integrated pest management techniques, we tackle cockroach problems at their source. Our safe and environmentally responsible approach prioritizes the well-being of your family, pets, and the ecosystem while delivering exceptional results. With a focus on professionalism, customer satisfaction, and affordability, we strive to exceed your expectations every step of the way. Trust Rowad Al Ghad to provide prompt, reliable, and effective cockroach pest control solutions tailored to your unique needs. Contact us today to schedule a consultation and reclaim your space from unwanted pests.", 80, $end='...')) !!}</div>
                            <div class="link-btn"><a href="{{ route('view.cockroaches.pest.control') }}" class="theme-btn btn-style-one style-two"><span>Learn More</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-mosquito"></span></div>
                            <h4><a href="{{ route('view.bed.bug.pest.control') }}">Bed Bug</a></h4>
                            <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit("Say goodbye to sleepless nights with expert bed bug control solutions from Rowad Al Ghad. Bed bugs are relentless pests that can invade homes and businesses, causing discomfort and frustration for occupants. Our team specializes in comprehensive bed bug control services, utilizing advanced techniques and eco-friendly products to eradicate bed bug infestations effectively. From thorough inspections to targeted treatments and ongoing prevention strategies, we're dedicated to ensuring your space remains bed bug-free. With our commitment to professionalism, integrity, and customer satisfaction, you can trust Rowad Al Ghad to deliver reliable and efficient bed bug control solutions tailored to your needs. Don't let bed bugs take over—contact us today to schedule a consultation and restore peace and comfort to your environment.", 100, $end='...')) !!}</div>
                            <div class="link-btn"><a href="{{ route('view.bed.bug.pest.control') }}" class="theme-btn btn-style-one style-two"><span>Learn More</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-tarantula"></span></div>
                            <h4><a href="{{ route('view.spiders.pest.control') }}">Spiders</a></h4>
                            <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit("Keep your home or business spider-free with expert pest control solutions from Rowad Al Ghad. Spiders may be beneficial predators, but when their populations grow out of control, they can become a nuisance and even a source of fear for many individuals. Our team understands the importance of maintaining a safe and comfortable environment, which is why we offer specialized spider pest control services tailored to your needs. Using advanced techniques and eco-friendly products, we target spider infestations at their source while minimizing harm to the environment and non-target species. From thorough inspections to targeted treatments and ongoing prevention strategies, we're committed to keeping your space free from unwanted eight-legged intruders. Trust Rowad Al Ghad to deliver reliable, effective, and professional spider pest control solutions. Contact us today to schedule a consultation and reclaim your space from arachnid invaders.", 100, $end='...')) !!}</div>
                            <div class="link-btn"><a href="{{ route('view.spiders.pest.control') }}" class="theme-btn btn-style-one style-two"><span>Learn More</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-termite"></span></div>
                            <h4><a href="{{ route('view.termites.pest.control') }}">Termites</a></h4>
                            <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit("Protect your property from the destructive force of termites with Rowad Al Ghad. Termites pose a serious threat to homes and businesses, causing extensive damage that can compromise structural integrity and lead to costly repairs. Our team of termite experts specializes in comprehensive pest control solutions designed to detect, eliminate, and prevent termite infestations. Through thorough inspections, state-of-the-art treatments, and proactive prevention strategies, we safeguard your investment and provide peace of mind. With a focus on professionalism, reliability, and customer satisfaction, we deliver results you can trust. Don't let termites wreak havoc on your property. Contact Rowad Al Ghad today to schedule a consultation and fortify your defenses against these relentless pests", 100, $end='...')) !!}</div>
                            <div class="link-btn"><a href="{{ route('view.termites.pest.control') }}" class="theme-btn btn-style-one style-two"><span>Learn More</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-squirrel"></span></div>
                            <h4><a href="{{ route('view.rodents.pest.control') }}">Rodents</a></h4>
                            <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit("At Rowad Al Ghad, we understand the distress rodents can cause in both residential and commercial settings, which is why we offer comprehensive rodent pest control services. From mice to rats, these pests not only damage property and contaminate food but also pose health risks to occupants. Our expert technicians employ proven methods and state-of-the-art techniques to identify rodent entry points, eliminate existing infestations, and prevent future occurrences. We prioritize the safety of your family, pets, and the environment by using environmentally friendly products and humane trapping methods. With our personalized approach and unwavering commitment to customer satisfaction, you can trust Rowad Al Ghad to deliver efficient and effective rodent pest control solutions tailored to your needs. Say goodbye to unwanted furry intruders—contact us today to schedule a consultation and regain control of your space.", 100, $end='...')) !!}</div>
                            <div class="link-btn"><a href="{{ route('view.rodents.pest.control') }}" class="theme-btn btn-style-one style-two"><span>Learn More</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-fly"></span></div>
                            <h4><a href="{{ route('view.flies.pest.control') }}">Fly Control</a></h4>
                            <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit("Say farewell to pesky flies with expert pest control solutions from Rowad Al Ghad. Flies not only present a nuisance in homes and businesses but also pose potential health risks by spreading diseases and contaminating food. Our team specializes in comprehensive fly pest control services, utilizing advanced techniques and environmentally friendly products to target fly infestations at their source. From thorough inspections to strategic treatments and ongoing prevention strategies, we're committed to keeping your space fly-free. With our focus on professionalism, reliability, and customer satisfaction, you can trust Rowad Al Ghad to deliver effective and efficient fly pest control solutions tailored to your needs. Take back control of your environment—contact us today to schedule a consultation and experience a fly-free zone once again.", 110, $end='...')) !!}</div>
                            <div class="link-btn"><a href="{{ route('view.flies.pest.control') }}" class="theme-btn btn-style-one style-two"><span>Learn More</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-bee"></span></div>
                            <h4><a href="{{ route('view.bees.pest.control') }}">Bee Control</a></h4>
                            <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit("At Rowad Al Ghad, we understand the importance of bees in our ecosystem, but we also recognize the need for safe and effective bee pest control solutions when they pose a threat to homes or businesses. Bees can become a nuisance when they establish hives in unwanted areas, presenting risks to occupants and property. Our team of experienced technicians specializes in humane bee removal and relocation services, prioritizing the safety of both people and pollinators. We utilize innovative techniques and eco-friendly products to carefully remove bee colonies while minimizing harm to the environment. With a commitment to professionalism, integrity, and customer satisfaction, you can trust Rowad Al Ghad to handle bee infestations with care and expertise. Contact us today to schedule a consultation and ensure the peaceful coexistence of humans and bees on your property.", 100, $end='...')) !!}</div>
                            <div class="link-btn"><a href="{{ route('view.bees.pest.control') }}" class="theme-btn btn-style-one style-two"><span>Learn More</span></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="icon"><span class="flaticon-ant"></span></div>
                            <h4><a href="{{ route('view.ants.pest.control') }}">Ant Control</a></h4>
                            <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit("Keep ants at bay with professional pest control solutions from Rowad Al Ghad. Ants may be tiny, but they can cause significant disruptions in homes and businesses, contaminating food, damaging property, and even posing health risks. Our team specializes in comprehensive ant pest control services, utilizing advanced techniques and environmentally friendly products to effectively eliminate ant infestations. From thorough inspections to targeted treatments and proactive prevention strategies, we're committed to keeping your space ant-free. With our focus on professionalism, reliability, and customer satisfaction, you can trust Rowad Al Ghad to deliver efficient and effective ant pest control solutions tailored to your needs. Say goodbye to unwanted ant trails—contact us today to schedule a consultation and regain control of your environment.", 100, $end='...')) !!}</div>
                            <div class="link-btn"><a href="{{ route('view.ants.pest.control') }}" class="theme-btn btn-style-one style-two"><span>Learn More</span></a></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Why Us?</h2>
            </div>
            <div class="wrapper-box">
                <span class="shape-one"><img src="assets/images/shape/shape-2.png" alt=""></span>
                <span class="shape-two"><img src="assets/images/shape/shape-3.png" alt=""></span>
                <div class="row">
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box">
                            <div class="mb-4"><img src="{{ asset('sharjah.png') }}" style="height: 120px"></div>
                            <h4>Government Approved</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box">
                            <div class="mb-4"><img src="{{ asset('dubai.png') }}" style="height: 120px"></div>
                            <h4>Government Approved</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                            <div class="mb-4"><img src="{{ asset('safe-health.png') }}" style="height: 150px"></div>
                            <h4>Health Safety</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 service-block-one">
                        <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="mb-4"><img src="{{ asset('warranty.png') }}" style="height: 150px"></div>
                            <h4>Service Warranty</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonials-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Testimonials</div>
                <h2>Customer Reviews</h2>
            </div>
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>
                @foreach ($reviews as $review)
                <div class="testimonial-block-two">
                    <div class="inner-box">
                        <div class="rating">
                           @for ($i=0; $i<$review->rating; $i++)
                           <span class="fas fa-star"></span>
                           @endfor
                        </div>                                  
                        <div class="text">{{ $review->review }}</div>
                        <div class="author-info">
                            <h4>{{ $review->name }}</h4>
                            <div class="designation">{{ $review->location }}</div>
                        </div>
                    </div>
                </div> 
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta-section style-two">
        <div class="shape">
            <svg 
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            width="1920px" height="500px">
            <path fill-rule="evenodd"  fill="rgb(19, 29, 52)"
            d="M0.000,-0.000 L1920.000,-0.000 L1870.000,399.999 C1866.036,427.614 1847.878,448.943 1820.000,450.000 L0.000,500.000 L0.000,-0.000 Z"/>
            </svg>
        </div>
        <span class="shape-two"><img src="assets/images/shape/shape-4.png" alt=""></span>
        <span class="shape-three"><img src="assets/images/shape/shape-5.png" alt=""></span>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-center wow fadeInUp" data-wow-duration="1500ms">
                        <div class="image-block">
                            <div class="image"><img src="assets/images/resource/image-1.jpg" alt=""></div>
                            <div class="offer">
                               <img src="{{ asset('guarantee.png') }}" style="height: 150px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content wow fadeInUp" data-wow-duration="1500ms">
                        <h2>Book an <br> Appointment Today!</h2>
                        <div class="text">We offer comprehensive pest control solutions for residential and commercial properties. Our team of highly trained and licensed technicians uses the latest methods and environmentally friendly products to eliminate a wide range of pests</div>
                        <div class="link-btn"><a href="https://wa.me/971569193222" class="theme-btn btn-style-one"><span> Book Service Now!</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    
    {{-- <section class="blog-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>News & Article</h2>
            </div>
            <div class="row">

                @foreach ($blogs as $blog)
                <div class="col-lg-4 news-block-one">
                    <div class="inner-box">
                        <div class="image"><a href="{{ route('view.single.blog', $blog->slug) }}"><img style="height: 300px; width:100%" src="{{ asset('assets/images/blog_images') }}/{{ $blog->cover_image }}" alt=""></a></div>
                        <h4><a href="{{ route('view.single.blog', $blog->slug) }}">{{ $blog->title }}</a></h4>
                        <div class="post-meta">By <a href="#"><span>  {{ $blog->author->name }}</span></a> - <a href="#">{{ $blog->created_at->format('d F, Y') }}</a></div>
                        <div class="text">{!! strip_tags(\Illuminate\Support\Str::limit($blog->body, 150, $end='...')) !!}</div>
                        <div class="link-btn"><a href="{{ route('view.single.blog', $blog->slug) }}" class="theme-btn btn-style-one style-two"><span> Learn More</span></a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    @include('includes.subscribe')

    @include('includes.footer')
	
</div>
@endsection