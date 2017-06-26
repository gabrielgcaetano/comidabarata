<section id="container" >
    <!--header end-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

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
                <div class="col-lg-12 main-chart">

                    <!--main content start-->
                    <section class="wrapper">
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="content-panel">
                                    <h4><i class="fa fa-angle-right"></i> Anúncios Global</h4>
                                    <section id="unseen">
                                        <table class="table table-responsive">                    
                                            <thead>
                                                <tr>
                                                    <th><p class="centered">Imagem</p></th>
                                                    <th>Produto</th>
                                                    <th>Preço</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                                <!-- Busca todos os dados que tem no banco atravez da controler -->
                                                <?php foreach ($produto as $prod) { ?>
                                                    <tr>
                                                        <td><p class="centered"><a href="#"><img src="<?= base_url(); ?>images/<?= $prod->produto_foto; ?>" class="img-circle" width="80"></a></p></td>
                                                        <td><br><br><p class=""> <?= $prod->produto_nome; ?> </p></td>
                                                        <td><br><br><p class=""> <?= $prod->produto_preco_novo; ?> </p></td>
                                                        <td><br><a href="<?= base_url('produto/formProduct/' . $prod->produto_id) ?>" class="btn btn-lg btn-primary btn-group">Comprar</a> </td> 
                                                    </tr>    
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                    </section>
                                </div><!-- /content-panel -->
                            </div><!-- /col-lg-4 -->			
                        </div><!-- /row -->
                    </section><!-- /MAIN CONTENT -->
                </div><!-- /col-lg-3 -->
            </div>
        </section>
    </section>

</section>