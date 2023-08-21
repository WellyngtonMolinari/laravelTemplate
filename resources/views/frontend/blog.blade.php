@extends('frontend.main_master')
@section('main')
@php
$homeslides = App\Models\HomeSlide::find(1);
$allblogs = App\Models\Blog::orderBy('created_at', 'desc')->paginate(6);
@endphp
@section('title')
Blog | {{ $homeslides->title }}
@endsection
<link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Blog Details</li>
          </ol>
          <h2></h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

    <!-- Blog Page Title & Breadcrumbs -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Blog</h1>
              <p class="mb-0">Últimas postagens</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Section - Blog Page -->
    <section id="blog" class="blog">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">
            @foreach($allblogs as $item)

          <div class="col-xl-4 col-lg-6">
            
            <article>

              <div class="post-img">
                <img src="{{ asset($item->blog_image) }}" alt="" class="img-fluid">
              </div>

              {{-- <p class="post-category">{{$item->blog_tags}}</p> --}}

              <h2 class="title">
                <a href="{{ route('blog.details',$item->id) }}">{{$item->blog_title}}</a>
              </h2>

              <p class="post-description">{!! Str::limit($item->blog_description, 200) !!} </p>
                  <li><i class="fa-solid fa-calendar-days"></i> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
            </article>
            
          </div><!-- End post list item -->
          @endforeach

          
          

        </div><!-- End blog posts list -->

        <div class="pagination d-flex justify-content-center">
          <ul>
              {{ $allblogs->links('vendor.pagination.custom') }}
          </ul>
      </div><!-- End pagination -->
      

      </div>

    </section><!-- End Blog Section -->

  </main>




@endsection