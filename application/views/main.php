<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
                <form class="" method="post" action="<?= base_url() ?>user/login_entry" enctype="multipart/form-data" >

                    <div class="form-group">
                        <label for="user_email"><h4 class="bordas">Email</h4></label>
                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="user_senha"><h4 class="bordas">Senha</h4></label>
                        <input type="password" class="form-control" id="user_senha" name="user_senha" placeholder="Password">
                    </div>
                    <div class="checkbox text-right">
                        <label>
                            <h5 class="bordas"> <input type="checkbox">  Check me out </h5>
                        </label>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-default btn-lg">Entrar</a></button>
                    </div>
                    <br>
                    <div class="text-center">
                        <h4 class="bordas"> Ainda não tem cadastro? <a href="#" data-toggle="modal" data-target="#myModal2" data-dismiss="modal">click aqui</a> </h4>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row my-content">
                    <div class="tab">
                        <ul class="nav nav-tabs">
                            <li class=""><a href="#comprador" data-toggle="tab">Registro de Comprador</a></li>
                            <li class="active"><a href="#vendedor" data-toggle="tab">Registro de Vendedor</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane  fade " id="comprador">
                                <form class="form-pre-acesso" method="post" action="<?= base_url() ?>user/register_save" enctype="multipart/form-data">
                                    
                                    <input type="hidden" id="user_tipo_user_id" name="user_tipo_user_id" value="2">
                                    
                                    <div class="form-group text-center"  style="margin-left: 50px; margin-right: 50px; margin-top: 10px;">
                                        <label for="user_nome"><h4 class="bordas">Nome Completo</h4></label>
                                        <input type="text" class="form-control" id="user_nome" name="user_nome" placeholder="Nome Completo">
                                    </div>
                                    <div class="form-group text-center" style="margin-left: 50px; margin-right: 50px;">
                                        <label for="user_documento"><h4 class="bordas">CPF</h4></label>
                                        <input type="text" class="form-control" id="user_documento" name="user_documento" placeholder="CPF">
                                    </div>
                                    <div class="form-group text-center"  style="margin-left: 50px; margin-right: 50px;">
                                        <label for="user_email"><h4 class="bordas">Email</h4></label>
                                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email">
                                    </div>             
                                    <div class="form-group text-center"  style="margin-left: 50px; margin-right: 50px;">
                                        <label for="user_senha"><h4 class="bordas">Senha</h4></label>
                                        <input type="password" class="form-control" id="user_senha" name="user_senha" placeholder="Password">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default btn-lg">Criar Conta</button>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <h4 class="bordas"> Já tem cadastro? <a href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal"> click aqui </a> </h4>
                                    </div>

                                </form>
                            </div>
                            <div class="tab-pane active fade in" id="vendedor">
                                <form class="form-pre-acesso" method="post" action="<?= base_url() ?>user/register_save" enctype="multipart/form-data">

                                    <input type="hidden" id="user_tipo_user_id" name="user_tipo_user_id" value="3">
                                    
                                    <div class="form-group text-center"  style="margin-left: 50px; margin-right: 50px; margin-top: 10px;">
                                        <label for="user_nome"><h4 class="bordas">Nome Completo</h4></label>
                                        <input type="text" class="form-control" id="user_nome" name="user_nome" placeholder="Nome Completo">
                                    </div>
                                    <div class="form-group text-center" style="margin-left: 50px; margin-right: 50px;">
                                        <label for="user_documento"><h4 class="bordas">CNPJ</h4></label>
                                        <input type="text" class="form-control" id="user_documento" name="user_documento" placeholder="CNPJ">
                                    </div>
                                    <div class="form-group text-center"  style="margin-left: 50px; margin-right: 50px;">
                                        <label for="user_email"><h4 class="bordas">Email</h4></label>
                                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email">
                                    </div>             
                                    <div class="form-group text-center"  style="margin-left: 50px; margin-right: 50px;">
                                        <label for="user_senha"><h4 class="bordas">Senha</h4></label>
                                        <input type="password" class="form-control" id="user_senha" name="user_senha" placeholder="Password">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default btn-lg">Criar Conta</button>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <h4 class="bordas"> Já tem cadastro? <a href="#" data-toggle="modal" data-target="#myModal" data-dismiss="modal"> click aqui </a> </h4>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <ul class="fh5co-social">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-1">
                        <div id="fh5co-logo"><a href="index.html">COMIDABARATA<span>.com.br</span></a></div>
                    </div>
                    <div class="col-xs-11 text-right menu-1">
                        <ul>
                            <li class="active"><a href="<?= base_url(); ?>">Home</a></li>
                            <li><a href="courses.html">A Empresa</a></li>
                            <li class="has-dropdown">
                                <a href="blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">API</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contato</a></li>
                            <li class="btn-cta"><a href="#" data-toggle="modal" data-target="#myModal"><span>Login</span></a></li>
                            <li class="btn-cta"><a href="#" data-toggle="modal" data-target="#myModal2"><span>Crie sua Conta</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
    <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?= base_url(); ?>images/capa-1.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>O Projeto Voltado para Sustentabilidade</h1>
                            <h2>Evite o Desperdício de Alimentos,  Anuncie no <a href="<?= base_url(); ?>" target="_blank">COMIDABARATA.COM</a></h2>
                            <p><a class="btn btn-primary btn-lg btn-learn" href="<?= base_url(); ?>user/login">Anunciar</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Assistir Video</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-counter" class="fh5co-counters">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="40356" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Inscritos</span>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="30290" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Anúncios</span>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <span class="fh5co-counter js-counter" data-from="0" data-to="199982" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Produtos Comercializados</span>
                </div>

            </div>
        </div>
    </div>

    <div id="fh5co-explore" class="fh5co-bg-section">
        <div class="fh5co-explore fh5co-explore1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-5 animate-box">
                        <img class="img-responsive" src="<?= base_url(); ?>images/produtos_ofertas.png" alt="work">
                    </div>
                    <div class="col-md-4 col-md-pull-8 animate-box">
                        <div class="mt">
                            <h3>Área do Usuário</h3>
                            <ul class="list-nav">
                                <li><i class="icon-check2"></i>Área de Pesquisa</li>
                                <li><i class="icon-check2"></i>Ultimas Ofertas</li>
                                <li><i class="icon-check2"></i>Ofertas em Destaque</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="fh5co-explore">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-pull-1 animate-box">
                        <img class="img-responsive" src="<?= base_url(); ?>images/relatorio_pizza_marcas.PNG" alt="work">
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="mt">
                            <h3>Área do Anunciante</h3>
                            <ul class="list-nav">
                                <li><i class="icon-check2"></i>Anuncie produtos sem custo</li>
                                <li><i class="icon-check2"></i>Destaque seus produtos</li>
                                <li><i class="icon-check2"></i>Gráficos e Relatórios</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-steps">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Passo a Passo</h2>
                    <p>Em apenas 4 passos você sera capaz de comprar ótimos produtos por um menor valor.</p>
                </div>
            </div>

            <div class="row bs-wizard animate-box" style="border-bottom:0;">

                <div class="col-xs-3 bs-wizard-step complete">
                    <div class="text-center bs-wizard-stepnum"><h4>Passo 1</h4></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Crie sua conta grátis</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step active"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum"><h4>Passo 2</h4></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Localize um Oferta</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
                    <div class="text-center bs-wizard-stepnum"><h4>Passo 3</h4></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Efetue a compra</p></div>
                </div>

                <div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
                    <div class="text-center bs-wizard-stepnum"><h4>Passo 4</h4></div>
                    <div class="progress"><div class="progress-bar"></div></div>
                    <a href="#" class="bs-wizard-dot"></a>
                    <div class="bs-wizard-info text-center"><p>Busque seus Produtos</p></div>
                </div>
            </div>

        </div>
    </div>

    <div id="fh5co-started" style="background-image:url(<?= base_url(); ?>images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Vamos Começar</h2>
                    <p>É fácil e rápido, crie sua conta e ache o produto ideal e comece a poupar agora mesmo. </p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p><a href="#" class="btn btn-default btn-lg">CRIE SUA CONTA GRÁTIS</a></p>
                </div>
            </div>
        </div>
    </div>


    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2017 ComidaBarata.com . Todos Direitos Reservados.</small> 
                        <small class="block">Desenhado por  <a href="https://github.com/gabrielgcaetano/" target="_blank">Gabriel Caetano</a> </small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

