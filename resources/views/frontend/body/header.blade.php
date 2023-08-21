  
@php

$route = Route::current()->getName();
$homeslides = App\Models\HomeSlide::find(1);
$allfooter = App\Models\Footer::find(1);
@endphp

<header id="header" class="fixed-top header-inner-pages" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ route('home')}}">{{ $homeslides->title }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ $route == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
          <li><a class="nav-link {{ $route == 'home.about' ? 'active' : '' }}" href="{{ route('home.about') }}">Sobre</a></li>
          {{-- <li><a class="nav-link scrollto" href="#services">Serviços</a></li> --}}
          <li><a class="nav-link {{ $route == 'home.portfolio' ? 'active' : '' }}" href="{{ route('home.portfolio') }}">Galeria</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Equipe</a></li> --}}
          <li><a class="nav-link {{ $route == 'contact.me' ? 'active' : '' }}" href="{{ route('contact.me') }}">Contato</a></li>
          <li><a class="nav-link {{ $route == 'home.blog' ? 'active' : '' }}" href="{{ route('home.blog') }}">Blog</a></li>
          
          <li><a class="getstarted scrollto" href="https://wa.me/{{ $allfooter->number }}?" target="_blank" rel="noopener noreferrer">
            Entrar em Contato <i class="fab fa-whatsapp"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>