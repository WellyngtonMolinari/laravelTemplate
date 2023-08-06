
@php
$homeslide = App\Models\HomeSlide::find(1);

@endphp

<section id="hero" class="d-flex align-items-center" style="background-image: url('{{ asset('frontend/assets/img/hero.jpeg') }}');">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>{{ $homeslide->title  }}<br><span id="element"></span></h1>
          <h2>{{ $homeslide->short_title  }}</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Agendar</a>
            <a href="{{ $homeslide->video_url  }}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Assistir</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ $homeslide->home_slide  }}" class="img-fluid animated" alt="">
          {{-- <img src="{{ asset('frontend/assets/img/brightsmile.png') }}" class="img-fluid animated" alt=""> --}}
        </div>
      </div>
    </div>

</section>