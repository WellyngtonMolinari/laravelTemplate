@php
$portfolioLimit = 6; // Set the desired limit
$portfolio = App\Models\Portfolio::latest()->take($portfolioLimit)->get();
$portfoliocategory = App\Models\PortfolioCategory::latest()->get();
@endphp
     
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
                  <img src="{{ $portfolio->portfolio_image }}" class="img-fluid" alt="">
              </div>
              <div class="portfolio-info">
                  <h4>{{ $portfolio->portfolio_name }}</h4>
                  <p>{{ $portfolio->portfolio_title }}</p>
                  <a href="{{ $portfolio->portfolio_image }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $portfolio->portfolio_description }}"><i class="bx bx-plus"></i></a>
                  <a href="{{ route('portfolio.details', ['id' => $portfolio->id]) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
          </div>
      @endforeach
  </div>

  <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="100">
    <a href="{{ route('home.portfolio') }}" class="btn btn-primary">Ver Mais</a>
  </div>

</div>
</section>

<!-- ... Additional CSS ... -->
<style>
.btn-primary {
  background-color: #007bff;
  color: #fff;
  border-color: #007bff;
  padding: 10px 20px;
  border-radius: 5px;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}
</style>