@extends('frontend.main_master')
@section('main')
@php
$homeslides = App\Models\HomeSlide::find(1);
@endphp
@section('title')
Sobre Nós | {{ $homeslides->title }}
@endsection

<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>about</li>
          </ol>
  
        </div>
      </section><!-- End Breadcrumbs -->

      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Quem Somos</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="about__image">
                        <img src="{{ $aboutpage->about_image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row content">
                        <div class="col-lg-12">
                            <p>
                                <h2 class="title">{{ $aboutpage->title }}</h2>
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> <p><span>{{ $aboutpage->short_title }}</span> </p></li>
                                
                            </ul>
                        </div>
                        <div class="col-lg-12 pt-4 pt-lg-0">
                            <p class="desc">{{ $aboutpage->short_description }}</p>
                            <a href="#" class="btn-learn-more">Saiba mais</a>
                        </div>
                        
                    </div>
                </div>
            </div><br><br>
            {!! $aboutpage->long_description !!}
        </div>
    </section>
    

</main>


@endsection