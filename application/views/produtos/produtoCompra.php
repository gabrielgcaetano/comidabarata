<section id="container" >
    <section id="main-content">
        <section class="wrapper">


        </section>
    </section>
</section>
<section id="container" >
    <section id="main-content">
        <section class="wrapper col-sm-12 col-lg-pull-1">
            <div class="row" style="margin-top: -35px">
                <div class="col-lg-12 main-chart">
                    <div class="panel" style="color: white; border-color:#4e8621">
                        <div class="panel-heading" style="background-color:#4e8621">Pesquisar</div>
                        <div class="panel-body">
                            <form method="post" action="<?= base_url('produto/produtoPesquisa') ?>"
                                  enctype="multipart/form-data" style="margin-top: 20px;">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" id="produto_nome" name="produto_nome" 
                                               class="form-control" placeholder="Pesquisar nome de produto..." >
                                    </div>
                                </div>
                                <div class="col-md-1" align="" style="margin-left: 40px">
                                    <button type="submit" class="btn btn-lg" style="background-color:#4e8621; color: white">Pesquisar</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <form method="post" action="<?= base_url('produto/comprar') ?>"
                      enctype="multipart/form-data">
                    <input type="hidden" id="produto_id" name="produto_id" value="<?= $produto[0]->produto_id ?>">
                    <div class="col-lg-12" >
                        <div class="panel-body">
                            <div class="col-lg-12" style=" height: 400px; margin: 0px;">
                                <div class="panel panel-default" style="border-color:#4e8621;">
                                    <div class="panel-heading text-center " style=""><h3><?= substr($produto[0]->produto_nome, 0, 22) ?></h3></div>
                                    <img src="<?= base_url(); ?>images/etiqueta-preco.png" class="img-rounded" width="70" style="margin-top: -85px; margin-left: 40px">
                                    <div class="panel-body">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="col-lg-6">
                                                <img src="<?= base_url(); ?>images/<?= $produto[0]->produto_foto; ?>" class="img-rounded" width="250">
                                            </div>
                                            <div class="col-lg-6">
                                                <strike><h3 class="text-center" style="color: black;">R$ <?= $produto[0]->produto_preco_velho ?></h3></strike>
                                            </div>
                                            <div class="col-lg-6">
                                                <h2 class="text-center" style="color: slategrey;">R$ <?= $produto[0]->produto_preco_venda ?></h2>
                                            </div>
                                       
                                            

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3" >
                <div class="panel " style="color: white; border-color:#4e8621;">
                    <!-- Default panel contents -->
                    <div class="panel-heading text-center" style="color: white;background-color:#4e8621;"><h3> Destaque </h3></div>
                    <div class="panel-body">
                        <?php foreach ($produto_destaque as $prodd) { ?>
                            <div class="col-lg-12" style=" height: 400px; margin: 0px;">

                                <div class="panel panel-default">
                                    <div class="panel-heading text-center " style=""><?= substr($prodd->produto_nome, 0, 22) ?></div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <img src="<?= base_url(); ?>images/etiqueta-preco.png" class="img-rounded" width="40" style="margin-top: -60px; margin-left: -10px">

                                                <div class="thumbnail">
                                                    <img src="<?= base_url(); ?>images/<?= $prodd->produto_foto; ?>" class="img-rounded" width="120">

                                                    <div class="caption">
                                                        <h3 class="text-center" style="color: red;">R$ <?= $prodd->produto_preco_venda; ?></h3>
                                                        <br>
                                                        <p class="text-center" ><a href="<?= base_url('produto/formUpdate/' . $prodd->produto_id) ?>" class="btn btn-lg btn-group" style="background-color:#4e8621; color: white">Comprar</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </section>
    </section>
</section>