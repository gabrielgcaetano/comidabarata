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
                    <form method="post" action="<?= base_url('produto/comprar') ?>"
                          enctype="multipart/form-data">

                        <input type="hidden" id="id" name="id" value="<?= $product[0]->id ?>">

                        <h1><?= $product[0]->name ?></h1>
                        <br>

                        <div class="col-sm-12">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                                <img src="<?= base_url(); ?>images/<?= $product[0]->foto; ?>" class="img-thumbnail" width="300px" height="300px" >
                            </div>

                            <!--Preço-->

                            <div class="col-sm-8">
                                <div class="col-sm-1">
                                    <h5> Preço</h5>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="col-sm-8">
                                    <h2 style="color: red"> R$ <?= $product[0]->price ?> </h2>
                                </div>
                            </div>

                            <!--Quantidade-->

                            <div class="col-sm-8">
                                <div class="col-sm-1">
                                    <h5> Quant</h5>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="text" id="quant" name="quant" 
                                               class="form-control" size="15" required>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-8">
                                <div class="col-sm-1" align="right">
                                    <button type="submit" class="btn btn-md btn-success">Comprar</button>
                                </div>   
                            </div>

                        </div>
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