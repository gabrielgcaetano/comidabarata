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
                    <li role="presentation" class="active"><a href="<?= base_url(); ?>user/tipoUserLista">Lista</a></li>
                    <li role="presentation"><a></a></li>
                    <li role="presentation"><a></a></li>
                </ul>
            </div>
            
            <div class="row">
                <div class="col-lg-11 main-chart">
                    <form method="post" action="<?= base_url('user/tipoUserUpdateSalvar') ?>"
                          enctype="multipart/form-data">

                        <input type="hidden" id="user_tipo_id" name="user_tipo_id" value="<?= $user_tipo[0]->user_tipo_id ?>">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="user_tipo_nome"> Nome </label>
                                <input type="text" id="user_tipo_nome" name="user_tipo_nome" 
                                       class="form-control" value="<?= $user_tipo[0]->user_tipo_nome ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="user_tipo_status"> Status Tipo User </label>
                            <select class="form-control" id="user_tipo_status" name="user_tipo_status" >
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