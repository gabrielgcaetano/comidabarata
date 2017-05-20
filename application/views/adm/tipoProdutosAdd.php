<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="<?= base_url(); ?>" class="logo"><b>COMIDABARATA<span>.com</span></b></a>
        <!--logo end-->

        <div class="btn-group pull-right top-menu" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="" href="<?= base_url(); ?>user">Perfil</a></li>
                    <li><a class="" href="<?= base_url(); ?>">Sair</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--header end-->


    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
                
            <!--           Menu Superior                 -->

            <div>
                <ul class="nav nav-pills nav-justified" style="background-color: white">
                    <li role="presentation"><a href="<?= base_url(); ?>produto/tipoProdutoLista?situacao">Lista</a></li>
                    <li role="presentation" class="active"><a href="<?= base_url(); ?>produto/tipoProdutoAdd?situacao">Adicionar</a></li>
                    <li role="presentation"><a href="#"></a></li>
                </ul>
            </div>


            <div class="row">
                <div class="col-lg-11 main-chart">

                    <div class="alert alert-info" role="alert"><h3><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Dica: Adicione Categoria Para os Produtos</h3></div>

                    <form method="post" action="<?= base_url('produto/tipoProdutoSalvar') ?>"
                          enctype="multipart/form-data">

                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="tipo_produto_nome"> Nome </label>
                                <input type="text" id="tipo_produto_nome" name="tipo_produto_nome" 
                                       class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-2" align="right">
                            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
                        </div>    

                    </form>

                </div><!-- /col-lg-3 -->
            </div>
        </section>
    </section>

    <!--main content end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->

    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2017 - COMIDABARATA.com - Todos Direitos Reservados
            <a href="<?= base_url(); ?>" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>