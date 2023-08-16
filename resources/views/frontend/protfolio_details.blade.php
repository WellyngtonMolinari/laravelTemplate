@extends('frontend.main_master')
@section('main')
@php
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
          <li><a href="index.html">Home</a></li>
          <li>Detalhes</li>
        </ol>
        <h2></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset($portfolio->portfolio_image) }}">
                    </div>
        
                    @foreach($portfolio->multiImages as $multiImage)
                    <div class="swiper-slide">
                      @php
                          $resizedImage = Image::make(public_path($multiImage->multi_image))
                          // ->resize(800, 600);
                      @endphp
                      <img src="{{ $resizedImage->encode('data-url') }}">
                  </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informações:</h3>
              <ul>
                <li><strong>Categoria</strong>: {{ $portfolio->category }}</li>
                <li><strong>Nome</strong>: {{ $portfolio->portfolio_name }}</li>
                <li><strong>Título</strong>: {{ $portfolio->portfolio_name }}</li>
                <li><strong>Adicionado em</strong>: {{ Carbon\Carbon::parse($portfolio->created_at)->format('d/m/Y') }}</a></li>
                <li><strong>Atualizado em</strong>: {{ Carbon\Carbon::parse($portfolio->updated_at)->format('d/m/Y') }}</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Descrição:</h2>
              <p>
                {!! $portfolio->portfolio_description !!} 
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->



@endsection