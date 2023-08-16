@extends('frontend.main_master')
@section('main')
@php
$homeslides = App\Models\HomeSlide::find(1);
@endphp
@section('title')
Política de Privacidade | {{ $homeslides->title }}
@endsection

<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li>Política de Privacidade</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Política de Privacidade</h2>
            </div>
            <!-- Add your privacy policy content here -->
            <div class="privacy-content">
                <h4>Política de Privacidade do site {{ $homeslides->title }}</h4>
                <p>Estes termos de Política de Privacidade regem o uso do nosso site e todos os seus conteúdos, recursos e serviços relacionados de acordo com a <a href="https://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/l13709.htm">Lei Geral de Proteção de Dados Pessoais (LGPD)</a>. Ao acessar ou usar o nosso site, você concorda com esta Política de Privacidade. Se você não concordar, por favor, não use o nosso site.</p>

                <h4>1. Informações Coletadas</h4>
                <p>Nós coletamos informações pessoais, como nome e endereço de e-mail, quando você se inscreve ou interage com o nosso site. Também podemos coletar automaticamente informações de uso, como endereço IP, tipo de navegador e páginas visitadas.</p>

                <h4>2. Uso das Informações</h4>
                <p>Utilizamos as informações coletadas para fornecer e melhorar os nossos serviços, responder a solicitações e enviar informações relevantes. Não compartilhamos suas informações pessoais com terceiros, exceto quando necessário para cumprir obrigações legais.</p>

                <h4>3. Cookies e Tecnologias Semelhantes</h4>
                <p>O nosso site pode utilizar cookies e outras tecnologias para melhorar a experiência do usuário. Você pode configurar o seu navegador para recusar cookies, mas isso pode afetar a funcionalidade do site.</p>

                <h4>4. Segurança</h4>
                <p>Empregamos medidas de segurança para proteger as suas informações. No entanto, nenhum método de transmissão pela Internet ou armazenamento eletrônico é 100% seguro, e não podemos garantir a segurança absoluta das informações.</p>

                <h4>5. Alterações na Política de Privacidade</h4>
                <p>Reservamos o direito de modificar a nossa Política de Privacidade a qualquer momento. As alterações entrarão em vigor após a publicação no site.</p>

            </div>
        </div>
    </section>

</main>

@endsection
