@extends('frontend.main_master')
@section('main')
@php
$portfolio = App\Models\Portfolio::latest()->get();
$portfoliocategory = App\Models\PortfolioCategory::latest()->get();
$homeslides = App\Models\HomeSlide::find(1);
@endphp
@section('title')
Galeria | {{ $homeslides->title }}
@endsection
 
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Galeria</li>
          </ol>
          <h2></h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
      
          <div class="section-title">
            <h2>Galeria</h2>
            <p>Confira nossos produtos de acordo com a categoria.</p>
          </div>
      
          <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tudo</li>
            @foreach($portfoliocategory as $category)
                <li data-filter=".filter-{{ Str::slug($category->portfolio_category) }}">{{ $category->portfolio_category }}</li>
            @endforeach
          </ul>
      
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($portfolio as $portfolio)
                <div class="col-lg-4 col-md-6 portfolio-item filter-{{ Str::slug($portfolio->category) }}">
                    <div class="portfolio-img">
                        <img src="{{ asset($portfolio->portfolio_image) }}" class="img-fluid" alt="">

                    </div>
                    <div class="portfolio-info">
                        <h4>{{ $portfolio->portfolio_name }}</h4>
                        <p>{{ $portfolio->portfolio_title }}</p>
                        <a href="{{ asset($portfolio->portfolio_image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $portfolio->portfolio_description }}"><i class="bx bx-plus"></i></a>
                        <a href="{{ route('portfolio.details', ['id' => $portfolio->id]) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
      
        </div>
      </section>
</main>

@endsection