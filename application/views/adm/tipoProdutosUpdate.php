<section id="container" >
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            
            <!--           Menu Superior                 -->
            <div>
                <ul class="nav nav-pills nav-justified" style="background-color: white">
                    <li role="presentation" class="active"><a href="<?= base_url(); ?>user/tipoProdutosLista">Lista</a></li>
                    <li role="presentation"><a></a></li>
                    <li role="presentation"><a></a></li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-6 main-chart col-lg-offset-3">

                    <form method="post" action="<?= base_url('produto/tipoProdutosUpdateSalvar') ?>"
                          enctype="multipart/form-data">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Atualizando Tipo de Produtos </h3>
                            </div>
                            <div class="panel-body">
                                <input type="hidden" id="tipo_produto_id" name="tipo_produto_id" value="<?= $tipo_produto[0]->tipo_produto_id ?>">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="tipo_produto_nome"> Nome </label>
                                        <input type="text" id="tipo_produto_nome" name="tipo_produto_nome" 
                                               class="form-control" value="<?= $tipo_produto[0]->tipo_produto_nome ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="tipo_produto_status"> Status Tipo Produto </label>
                                    <select class="form-control" id="tipo_produto_status" name="tipo_produto_status" >
                                        <option value="1">Ativo</option>
                                        <option value="0">Inativo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="panel-footer">                       
                                <button type="submit" class="btn btn-lg btn-info col-lg-offset-10">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
</section>