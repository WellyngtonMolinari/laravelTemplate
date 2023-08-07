@php

$aboutpage = App\Models\About::find(1);
$allMultiImage = App\Models\MultiImage::all();
@endphp

<section id="about" class="about">
<div class="container" data-aos="fade-up">

    <div class="section-title">
    <h2>Sobre nós</h2>
    </div>

    <div class="row content">
    <div class="col-lg-6">
        <p>
            {{ $aboutpage->title }}
        </p>
        <ul>
        <li><i class="ri-check-double-line"></i> {{ $aboutpage->short_title }}</li>
        {{-- <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li> --}}
        </ul>
    </div>
    <div class="col-lg-6 pt-4 pt-lg-0">
        <p>
            {{ $aboutpage->short_description}}
        </p>
        <a href="{{ route('home.about') }}" class="btn-learn-more">Saiba mais</a>
    </div>
    </div>

</div>
</section>