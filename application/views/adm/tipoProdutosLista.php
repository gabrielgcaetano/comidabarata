<section id="container" >
    <section id="main-content">
        <section class="wrapper">

            <!--           Menu Superior                 -->

            <div>
                <ul class="nav nav-pills nav-justified" style="background-color: white">
                    <li role="presentation" class="active"><a href="<?= base_url(); ?>produto/tipoProdutoLista?situacao">Lista</a></li>
                    <li role="presentation"><a href="<?= base_url(); ?>produto/tipoProdutoAdd?situacao">Adicionar</a></li>
                    <li role="presentation"><a></a></li>
                </ul>

                <form method="post" action="<?= base_url('produto/tipoProdutoPesquisa') ?>"
                      enctype="multipart/form-data" style="margin-top: 20px;">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <input type="text" id="tipo_produto_nome" name="tipo_produto_nome" 
                                   class="form-control" placeholder="Pesquisar tipo de produto..." >
                        </div>
                    </div>
                    <div class="col-md-3" align="right">
                        <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                    </div>    
                </form>
            </div>

            <div class="row">
                <div class="col-sm-12" style="">

                    <!--main content start-->
                    <section class="wrapper">
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="content-panel">
                                    <h4><i class="fa fa-angle-right"></i> Tipos de Produtos</h4>
                                    <section id="unseen">
                                        <table class="table table-responsive">                    
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nome</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                                <!-- Busca todos os dados que tem no banco atravez da controler -->
                                                <?php foreach ($tipo_produto as $tipo) { ?>
                                                    <tr>
                                                        <td><p class="col-md-2" style="margin-top: 10px;"> <?= $tipo->tipo_produto_id; ?> </p></td>
                                                        <td><p class="col-md-8" style="margin-top: 10px;"> <?= $tipo->tipo_produto_nome; ?> </p></td>
                                                        <td><p class="col-md-2"><a href="<?= base_url('produto/formUpdate/' . $tipo->tipo_produto_id) ?>" class="btn btn-lg btn-primary btn-group ">Detalhes</a></p></td> 
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