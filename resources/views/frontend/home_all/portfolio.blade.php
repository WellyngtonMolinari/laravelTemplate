@php
$portfolio = App\Models\Portfolio::latest()->get();
$portfoliocategory = App\Models\PortfolioCategory::latest()->get();
@endphp
     
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Galeria</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
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
                  <h4>{{ $portfolio->portfolio_title }}</h4>
                  <p>{{ $portfolio->portfolio_description }}</p>
                  <a href="{{ $portfolio->portfolio_image }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $portfolio->portfolio_title }}"><i class="bx bx-plus"></i></a>
                  <a href="{{ route('portfolio.details', ['id' => $portfolio->id]) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
          </div>
      @endforeach
  </div>
  

  </div>
</section>