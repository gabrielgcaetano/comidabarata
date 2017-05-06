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

            <div class="row">
                <div class="col-lg-11 main-chart">
                    <form method="post" action="<?= base_url('produto/update') ?>"
                          enctype="multipart/form-data">

                        <input type="hidden" id="produto_id" name="produto_id" value="<?= $produto[0]->produto_id ?>">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="produto_nome"> Nome </label>
                                <input type="text" id="produto_nome" name="produto_nome" 
                                       class="form-control" value="<?= $produto[0]->produto_nome ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="produto_preco_novo"> Preço </label>
                                <input type="text" id="produto_preco_novo" name="produto_preco_novo" 
                                       class="form-control" value="<?= $produto[0]->produto_preco_novo ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="produto_status"> Status Anúncio </label>
                            <select class="form-control" id="produto_status" name="produto_status" >
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>



                        <div class="col-sm-12" align="right">
                            <button type="submit" class="btn btn-lg btn-success">Salvar</button>
                            <button type="reset" class="btn btn-lg btn-default">Limpar</button>
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