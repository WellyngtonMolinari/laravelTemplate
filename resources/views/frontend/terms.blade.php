@extends('frontend.main_master')
@section('main')
@php
$homeslides = App\Models\HomeSlide::find(1);
@endphp
@section('title')
Termos de Uso | {{ $homeslides->title }}
@endsection

<main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home')}}">Home</a></li>
                <li>Termos de Uso</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Termos de Uso</h2>
            </div>
            <!-- Add your terms of use content here -->
            <div class="terms-content">
                <h4>Bem-vindo ao site {{ $homeslides->title }}!</h4>
                <p>Estes termos de uso regem o uso do nosso site e todos os seus conteúdos, recursos e serviços relacionados. Ao acessar ou usar o nosso site, você concorda com estes Termos. Se você não concordar com estes Termos, por favor, não use o nosso site.</p>
                <h4>1. Uso do Site</h4>
                <p>Ao usar o nosso site, você concorda em cumprir todas as leis e regulamentos aplicáveis. Você concorda em não:</p>
                <ul>
                    <li>Publicar, enviar ou transmitir qualquer conteúdo ilegal, difamatório, obsceno, ameaçador, prejudicial ou que viole os direitos de terceiros;</li>
                    <li>Tentar obter acesso não autorizado a áreas restritas do site;</li>
                    <li>Interferir com a operação adequada do site;</li>
                    <li>Fornecer informações falsas ou enganosas;</li>
                    <li>Violar os direitos de propriedade intelectual ou outros direitos de terceiros.</li>
                </ul>
                <h4>2. Propriedade Intelectual</h4>
                <p>Todo o conteúdo do site, incluindo textos, imagens, logotipos, designs e outros materiais, é protegido por direitos autorais e outras leis de propriedade intelectual. Você não tem permissão para copiar, modificar, distribuir ou usar qualquer conteúdo do site sem autorização prévia por escrito.</p>

                <h4>3. Limitação de Responsabilidade</h4>
                <p>O nosso site é fornecido "como está", sem garantias de qualquer tipo, expressas ou implícitas. Não somos responsáveis por quaisquer danos diretos, indiretos, incidentais, consequenciais ou punitivos resultantes do uso ou incapacidade de usar o site.</p>

                <h4>4. Alterações nos Termos</h4>
                <p>Reservamos o direito de alterar estes Termos a qualquer momento. As alterações entrarão em vigor após a publicação no site. O seu uso contínuo do site após as alterações significa que você concorda com os novos Termos.</p>

                <h4>5. Lei Aplicável</h4>
                <p>Estes Termos são regidos pelas leis do Brasil. Qualquer disputa relacionada aos Termos ou ao uso do site será submetida à jurisdição exclusiva dos tribunais competentes do Brasil.</p>
            </div>
        </div>
    </section>

</main>

@endsection
