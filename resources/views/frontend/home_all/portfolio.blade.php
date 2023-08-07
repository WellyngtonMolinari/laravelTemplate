@php
$portfolio = App\Models\Portfolio::latest()->get();
@endphp
     
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Galeria</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-app">Cat 1</li>
      <li data-filter=".filter-card">Cat 2</li>
      <li data-filter=".filter-web">Cat 3</li>
    </ul>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/sala1-1.jpeg') }}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="{{ asset('frontend/assets/img/portfolio/sala1-1.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/sala1-2.jpeg') }}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="{{ asset('frontend/assets/img/portfolio/sala1-2.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/sala1-3.jpeg') }}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <a href="{{ asset('frontend/assets/img/portfolio/sala1-3.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-img"><img src="{{ asset('frontend/assets/img/portfolio/sala1-4.jpeg') }}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <p>Card</p>
          <a href="{{ asset('frontend/assets/img/portfolio/sala1-4.jpeg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      

    </div>

  </div>
</section>