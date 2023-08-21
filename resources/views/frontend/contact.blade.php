@extends('frontend.main_master')
@section('main')
@php
$homeslides = App\Models\HomeSlide::find(1);
$allfooter = App\Models\Footer::find(1);
@endphp
@section('title')
Contato | {{ $homeslides->title }}
@endsection

 <main>

            <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li>Contato</li>
          </ol>
          <h2></h2>
  
        </div>
      </section><!-- End Breadcrumbs -->

            <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contato</h2>
        <p>Entre em contato pelo endereço ou pelo formulário abaixo.</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Endereço:</h4>
              <p>{{ $allfooter->adress }}</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{ $allfooter->email }}</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Celular:</h4>
              <p>+{{ $allfooter->number }}</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1845.9327314112293!2d-46.61101226153778!3d-22.28308561301624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c909e1cf07dd27%3A0x5fc7c1665ed0fce1!2sR.%20Mal.%20Deodoro%2C%20845%20-%20Centro%2C%20Jacutinga%20-%20MG%2C%2037590-000!5e0!3m2!1spt-BR!2sbr!4v1685643210944!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>


         <!-- Contact Form -->
        <div class="col-lg-6">

          <form method="post" action="{{ route('store.message') }}" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            @csrf
            
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Nome" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Assunto" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="phone" placeholder="Telefone" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea>
              </div>

               
                <button type="submit" class="btn">Enviar Mensagem!</button>
              

            </div>
          </form>

        </div><!-- End Contact Form -->

      </div>

    </div>
  </section><!-- End Contact Section -->

 
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('.php-email-form');

        form.addEventListener('submit', async function(event) {
            event.preventDefault();

            const response = await fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
            });

            const data = await response.json();
            if (data.success) {
                alert('Your message has been sent successfully. Thank you!');
                form.reset();
            }
        });
    });
    </script>

        </main>









@endsection