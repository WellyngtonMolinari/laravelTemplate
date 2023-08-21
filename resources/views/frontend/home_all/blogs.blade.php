@php
$homeblogs = App\Models\Blog::orderBy('created_at', 'desc')->take(3)->get();
@endphp

<!-- Blog Section - Blog Page -->
<section id="blog" class="blog">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2>Blog</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

      <div class="row gy-4 posts-list" data-aos="fade-up" data-aos-delay="100">
          @foreach($homeblogs as $item)

        <div class="col-xl-4 col-lg-6">
          
          <article>

            <div class="post-img">
              <img src="{{ asset($item->blog_image) }}" alt="" class="img-fluid">
            </div>


            <h2 class="title">
              <a href="{{ route('blog.details',$item->id) }}">{{$item->blog_title}}</a>
            </h2>

            <p class="post-description">{!! Str::limit($item->blog_description, 200) !!} </p>
                <li><i class="fa-solid fa-calendar-days"></i> {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</li>
          </article>
          
        </div><!-- End post list item -->
        @endforeach

        
        

      </div><!-- End blog posts list -->
 
      <!-- Button to navigate to full blogs section -->
      <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="100">
        <a href="{{ route('home.blog') }}" class="btn btn-primary">Ver Todos os Posts</a>
    </div>

    </div>

  </section><!-- End Blog Section -->