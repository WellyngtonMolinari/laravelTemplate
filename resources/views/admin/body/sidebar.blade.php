 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('dashboard') }}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                                    <span>Painel de Controle</span>
                                </a>
                            </li>

                           
                
        <li>
            <a class="has-arrow waves-effect">
                <i class="ri-layout-top-2-line"></i>
                <span>Sessão Principal</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('home.slide') }}">Título do Site</a></li>
                <li><a href="{{ route('add.carousel') }}">Adicionar Carrossel</a></li>
                <li><a href="{{ route('all.carousel') }}">Todos Carrossel</a></li>
              
            </ul>
        </li>


          <li>
            <a class="has-arrow waves-effect">
                <i class="ri-team-line"></i>
                <span>Sobre Nós Site</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('about.page') }}">Sobre Nós Editar</a></li>
            </ul>
        </li>


        <li>
            <a class="has-arrow waves-effect">
                <i class="ri-archive-line"></i>
                <span>Sessão Produtos</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('all.portfolio') }}">Todos Produtos</a></li>
                <li><a href="{{ route('add.portfolio') }}">Adicionar Produtos</a></li>
                 
                <li><a href="{{ route('all.multi.image') }}">Todas Multi Imagens</a></li>

                <li><a href="{{ route('add.multi.image') }}">Adicionar Multi Imagens</a></li>
            </ul>
        </li>

                            

                            <li class="menu-title">Páginas</li>

    <li>
        <a class="has-arrow waves-effect">
            <i class="ri-file-list-2-line"></i>
            <span>Categoria Produtos</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('all.portfolio.category') }}">Ver Categoria Produtos</a></li>
            <li><a href="{{ route('add.portfolio.category') }}">Adicionar Categoria Produtos</a></li>
        </ul>
    </li>

    <li>
        <a class="has-arrow waves-effect">
            <i class="ri-file-list-3-line"></i>
            <span>Categoria Blog</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('all.blog.category') }}">Ver Categoria Blog</a></li>
            <li><a href="{{ route('add.blog.category') }}">Adicionar Categoria Blog</a></li>
        </ul>
    </li>

            <li>
                <a class="has-arrow waves-effect">
                    <i class="ri-edit-2-line"></i>
                    <span>Posts de Blog</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('all.blog') }}">Todos Posts</a></li>
                    <li><a href="{{ route('add.blog') }}">Adicionar Blog Post</a></li>
                    
                </ul>
            </li>


            <li>
                <a class="has-arrow waves-effect">
                    <i class="ri-layout-bottom-2-line"></i>
                    <span>Rodapé </span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('footer.setup') }}">Atualizar Rodapé </a></li>
                     
                    
                </ul>
            </li>


            <li>
                <a class="has-arrow waves-effect">
                    <i class="ri-mail-send-line"></i>
                    <span>Mensagem de Contato</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li>
                        <a href="{{ route('contact.message') }}">Ver Mensagens</a>
                    </li>
                     
                </ul>
            </li>
                           

                    <li class="menu-title">Suporte</li>
                         
            <li>
                <a class="has-arrow waves-effect">
                    <i class="ri-customer-service-line"></i>
                    <span>Suporte</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('support.documentation') }}">Ver Documentação</a></li>
                    <li><a href="https://wa.me/5535999074206" target="_blank" rel="noopener noreferrer">Whatsapp</a></li>
                </ul>
            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>