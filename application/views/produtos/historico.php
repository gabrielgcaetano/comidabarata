<section id="container" >
    <!--header end-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-12 main-chart">

                    <!--main content start-->
                    <section class="wrapper">
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="content-panel">
                                    <h4><i class="fa fa-angle-right"></i> Historico</h4>
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
                                                <?php foreach ($transacao as $prod) { ?>
                                                    <tr>
                                                        <td><p class="centered"><a href="#"><img src="<?= base_url(); ?>images/<?= $prod->foto; ?>" class="img-circle" width="80"></a></p></td>
                                                        <td><br><br><p class=""> <?= $prod->name; ?> </p></td>
                                                        <td><br><br><p class=""> <?= $prod->price; ?> </p></td>
                                                        <td><br><a href="<?= base_url('produto/formProduct/' . $prod->id) ?>" class="btn btn-lg btn-primary btn-group">Detalhes</a> </td> 
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