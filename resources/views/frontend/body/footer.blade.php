@php

$allfooter = App\Models\Footer::find(1);

@endphp


<footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Receba dicas por email</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email" class="italic-placeholder" placeholder="Digite seu email..."><input type="submit" value="Inscrever">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Thais Raffaelli</h3>
            <p>
              Rua Marechal Deodoro <br>
              Jacutinga, MG<br>
              Brasil <br><br>
              <strong>Celular:</strong> (35) 9 9999-9999<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Início</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Termos de serviço</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviço 1</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviço 2</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviço 3</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviço 4</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviço 5</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossas redes sociais</h4>
            <p>Acompanhe nossas publicações</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; 2023. <strong><span>Thais Raffaelli - Odontologia</span></strong>. Todos os direitos reservados.
      </div>
      <div class="credits">
        Feito por <a href="">TechMind</a>
      </div>
    </div>
  </footer>