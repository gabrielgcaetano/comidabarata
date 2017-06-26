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

                </div>
            </div>
        </section>
    </section>
</section>