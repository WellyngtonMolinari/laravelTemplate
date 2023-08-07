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
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Sessão Título Site</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('home.slide') }}">Título do Site</a></li>
              
            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Sobre Nós Site</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('about.page') }}">Sobre Nós Editar</a></li>
              <li><a href="{{ route('about.multi.image') }}">Multi Imagens</a></li>
              <li><a href="{{ route('all.multi.image') }}">Todas Multi Imagens</a></li>
            </ul>
        </li>


 <li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="ri-mail-send-line"></i>
        <span>Sessão Portfólio</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        <li><a href="{{ route('all.portfolio') }}">Todos Portfólio</a></li>
      <li><a href="{{ route('add.portfolio') }}">Adicionar Portfolio</a></li>
       
    </ul>
</li>

                            

                            <li class="menu-title">Páginas</li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-account-circle-line"></i>
            <span>Categoria Blog</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('all.blog.category') }}">Ver Categoria Blog</a></li>
            <li><a href="{{ route('add.blog.category') }}">Adicionar Categoria Blog</a></li>
        </ul>
    </li>

            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Posts de Blog</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('all.blog') }}">Todos Posts</a></li>
                    <li><a href="{{ route('add.blog') }}">Adicionar Blog Post</a></li>
                    
                </ul>
            </li>


<li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Rodapé Configuração</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('footer.setup') }}">Rodapé Configuração</a></li>
                     
                    
                </ul>
            </li>


            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Mensagem de Contato</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('contact.message') }}">Mensagem de Contato</a></li>
                     
                    
                </ul>
            </li>
                           

                            
                         

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>