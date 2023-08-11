
@php
$homeslide = App\Models\HomeSlide::find(1);
$allCarousel = App\Models\Carousel::latest()->get();
@endphp

<section id="hero" class="d-flex align-items-center">
  <div class="carousel-container">
    @foreach($allCarousel as $item)
    <div class="carousel-slide" style="background-image: url('{{ asset($item->carousel_img) }}');"></div>
    @endforeach
     
 
    
  </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>{{ $homeslide->short_title  }}<br> <span id="element"></span></h1>

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Agendar</a>
            <a href="{{ $homeslide->video_url  }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Assistir</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ $homeslide->home_slide  }}" class="img-fluid animated" alt="" style="max-width: 500px; max-height: 400px;">
          {{-- <img src="{{ asset('frontend/assets/img/brightsmile.png') }}" class="img-fluid animated" alt=""> --}}
        </div>
      </div>
    </div>

</section>