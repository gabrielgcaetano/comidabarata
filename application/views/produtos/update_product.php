<section id="container" >
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
                                <label for="produto_preco_venda"> Preço </label>
                                <input type="text" id="produto_preco_venda" name="produto_preco_venda" 
                                       class="form-control" value="<?= $produto[0]->produto_preco_venda ?>" required>
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
</section>