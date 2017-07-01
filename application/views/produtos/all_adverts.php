<section id="container" >
    <section id="main-content">
        <section class="wrapper">
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-1 main-chart">

                    <div class="panel panel-primary">
                        <div class="panel-heading">Pesquisar</div>
                        <div class="panel-body">
                            <form method="post" action="<?= base_url('produto/produtoPesquisa') ?>"
                                  enctype="multipart/form-data" style="margin-top: 20px;">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="produto_nome" name="produto_nome" 
                                               class="form-control" placeholder="Pesquisar nome de produto..." >
                                    </div>
                                </div>
                                <div class="col-md-3" align="right">
                                    <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-8 col-lg-offset-1" >

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading"><h3> Ofertas </h3></div>
                        <div class="panel-body">
                            <?php foreach ($produto as $prod) { ?>
                                <div class="col-lg-4" style=" height: 400px; margin: 0px;">

                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center " style=""><?= substr($prod->produto_nome, 0, 22) ?></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="thumbnail">
                                                        <img src="<?= base_url(); ?>images/<?= $prod->produto_foto; ?>" class="img-rounded" width="120">
                                                        <div class="caption">
                                                            <h3 class="text-center" style="color: red;">R$ <?= $prod->produto_preco_novo; ?></h3>
                                                            <br>
                                                            <p class="text-center" ><a href="<?= base_url('produto/formUpdate/' . $prod->produto_id) ?>" class="btn btn-lg btn-primary btn-group">Comprar</a></p>
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
            </div>
            
            
        </section>
    </section>

</section>