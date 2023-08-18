@extends('admin.admin_master')
@section('admin')

<!-- Tópicos da Documentação -->
<style>
    /* Add some padding to the top of target sections to account for the fixed navbar */
    .documentation-topic[id]:before {
        content: "";
        display: block;
        height: 50px; /* Adjust this value based on your fixed navbar height */
        margin: -20px 0 0; /* Negative margin to offset the added padding */
    }

    /* Ensure that the YouTube video iframe occupies the full width of its container */
    .documentation-video {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 aspect ratio (9/16 = 0.5625 or 56.25%) */
        height: 0;
        overflow: hidden;
    }

    .documentation-video iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Documentação</h4>

                        <div class="documentation-topic">
                            <h5 class="mt-4">Como Usar a Aplicação</h5>
                            <p>Aqui estão as instruções detalhadas sobre como usar a nossa aplicação.</p>
                            <p>Sumário:</p>
                            <ul>
                                <li><a href="#sessao-principal">Sessão Principal</a></li>
                                <li><a href="#sobre-nos">Sobre Nós</a></li>
                                <li><a href="#sessao-portfolio">Sessão Produtos</a></li>
                                <li><a href="#categoria-portfolio">Categoria Produtos</a></li>
                                <li><a href="#categoria-blog">Categoria Blog</a></li>
                                <li><a href="#posts-blog">Posts Blog</a></li>
                                <li><a href="#rodape">Rodapé</a></li>
                                <li><a href="#mensagens-contato">Mensagens de Contato</a></li>
                                <li><a href="#atualizações">Atualizações e Mudanças</a></li>
                            </ul>
                        </div>

                        <div class="documentation-video">
                            <iframe src="https://www.youtube.com/embed/9ITILFazxuU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <hr>

                        <div class="documentation-topic" id="sessao-principal">
                            <h5 class="mt-4">1. Sessão Principal</h5>
                            <p>Saiba como personalizar as configurações da primeira sessão do site.</p>
                            <p>I. Na sub-sessão "Título do Site", você pode personalizar o "Título" do Site, "Sub-Título", "Vídeo url" (link) do youtube, "Imagem flutuante" (deve possuir o fundo transparente) e o "Carrossel" que é um slide de imagens de fundo. Para atualizar e fazer mudanças basta preencher os campos necessários e clicar no botão "Atualizar Sessão Principal".</p>
                            <p>II. Na sub-sessão "Adicionar Carrossel", você pode adicionar múltiplas imagens de uma vez para atualizar os slides de fundo. Basta selecionar do seu dispositivo e depois clicar no botão "Adicionar".</p>
                            <p>III. Na sub-sessão "Todos Carrossel", você pode ver uma lista de todas as imagens de fundo que você adicionou e agora estão armazenadas no servidor. Você pode ver os ID's das imagens em ordem crescente, também pode editar ou excluir. Caso precise existe uma barra de pesquisa para encontrar alguma imagem específica. A lista é interativa, você pode clicar nas colunas "ID" ou "Imagem" para mudar o comportamento da listagem.</p>
                        </div>

                        <div class="documentation-topic" id="sobre-nos">
                            <h5 class="mt-4">2. Sobre Nós</h5>
                            <p>Saiba como personalizar as informações sobre a sua empresa.</p>
                            <p>I. Na sub-sessão "Editar Sobre Nós", você pode adicionar o "Título", "Sub-Título", "Descrição Curta", "Descrição Grande", e a "Imagem de Capa", para representar a marca da sua empresa em uma sessão própria, como também é mostrada uma prévia logo abaixo da sessão principal do site. Para adicionar basta preencher os campos necessários e clicar em "Atualizar".</p>
                        </div>

                        <div class="documentation-topic" id="sessao-portfolio">
                            <h5 class="mt-4">3. Sessão Produtos</h5>
                            <p>Saiba como personalizar os seus produtos para mostrar na galeria do seu site.</p>
                            <p>I. Na sub-sessão "Todos Produtos" você pode acessar a lista de todos os produtos adicionados. A lista é interativa, ao clicar em qualquer coluna o comportamento da listagem muda de acordo com o tipo.</p>
                            <p>II. Na sub-sessão "Adicionar Produtos", você pode adicionar seu novo produto preenchendo os campos necessários, lembrando que você precisa criar uma "Categoria de Produtos" antes de adicionar seu produto.</p>
                            <p>III. Na sub-sessão "Todas Multi Imagens", você pode encontrar a lista de todas as múltiplas imagens dos seus respectivos produtos adicionados, também pode editar e excluir clicando nos respectivos botões.</p>
                            <p>IV. Na sub-sessão "Adicionar Multi Imagems", você pode adicionar múltiplas imagens para seu respectivo produto, basta selecioná-lo em "Selecionar produtos" e depois acrescentar as imagens que você deseja. Para aplicar basta clicar em "Adicionar"</p>
                        </div>

                        <div class="documentation-topic" id="categoria-portfolio">
                            <h5 class="mt-4">4. Categoria Produtos</h5>
                            <p>Saiba como personalizar as Categorias de Produtos, que serão usadas na sua Galeria para filtrar os tipos de produtos.</p>
                            <p>I. Na sub-sessão "Ver Categoria Produtos", você pode visualizar em uma lista todas as categorias de produtos que foram criadas.</p>
                            <p>II. Na sub-sessão "Adicionar Categoria Produtos", você pode criar uma nova categoria para filtrar seus produtos, basta preencher um nome de categoria no campo especificado e clicar em "Inserir".</p>
                        </div>

                        <div class="documentation-topic" id="categoria-blog">
                            <h5 class="mt-4">5. Categoria Blog</h5>
                            <p>Saiba como personalizar as Categorias do seu Blog, que será usada para filtrar o tipo de assunto do seu blog.</p>
                            <p>I. Na sub-sessão "Ver Categoria Blog", você pode visualizar as categorias já criadas para suas postagens no blog</p>
                            <p>II. Na sub-sessão "Adicionar Categoria Blog", você pode adicionar uma nova Categoria de Blog, preenchendo o campo específico com o nome desejado e clicando em "Inserir".</p>
                        </div>

                        <div class="documentation-topic" id="posts-blog">
                            <h5 class="mt-4">6. Posts Blog</h5>
                            <p>Saiba como personalizar e criar as Postagens do Blog.</p>
                            <p>I. Na sub-sessão "Todos Posts", você pode visualizar todos as postagens já publicadas no blog, com todas as informações necessárias em uma lista.</p>
                            <p>II. Na sub-sessão "Adicionar Blog Post", você pode criar sua nova postagem preenchend todos os campos, lembrando que antes será preciso criar uma Categoria de Blog. O campo "Blog Imagem" ao final será usado como capa de introdução para a postagem.</p>
                        </div>

                        <div class="documentation-topic" id="rodape">
                            <h5 class="mt-4">7. Rodapé</h5>
                            <p>Saiba como personalizar as informações do Rodapé.</p>
                            <p>I. Na sub-sessão "Atualizar Ropé", você pode adicionar o número do seu celular (sem espaços e sinais, somente o número completo, com DDD), como também a "Descrição Curta", "Endereço", "email", "Facebook", "Instagram" e "Copyright" que serão exibidos ao final do site.</p>
                        </div>

                        <div class="documentation-topic" id="mensagens-contato">
                            <h5 class="mt-4">8. Mensagens de Contato</h5>
                            <p>Saiba como verificar as Mensagens fornecidas pelos usuários que visitam seu site.</p>
                            <p>I. Na sub-sessão "Ver Mensagens", você pode visualizar uma lista com todas as mensagens deixadas pelos visitantes do seu site.</p>
                        </div>

                        

                        <div class="documentation-topic" id="atualizações">
                            <h5 class="mt-4">Atualizações</h5>
                            <p>Por enquanto esses são os conteúdos disponíveis desse sistema, a medida que novas atualizações forem publicadas elas serão exibidas aqui:</p>
                            <p>I. Não há nada para mostrar.</p>
                        </div>
                        


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
