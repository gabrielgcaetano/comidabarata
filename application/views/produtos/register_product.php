<section id="container" >
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-11 main-chart">

                    <form method="post" action="<?= base_url('produto/saveRegister') ?>"
                          enctype="multipart/form-data">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="produto_nome"> Nome </label>
                                <input type="text" id="produto_nome" name="produto_nome" 
                                       class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="produto_preco_venda"> Preço </label>
                                <input type="text" id="produto_preco_venda" name="produto_preco_venda
                                       " 
                                       class="form-control" required>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="produto_foto"> Foto </label>
                                <input type="file" id="produto_foto" name="produto_foto" 
                                       accept=".gif,.jpg,.png"
                                       class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="produto_tipo_produto"> Tipo Produto </label>

                            <select class="form-control" id="produto_tipo_produto" name="produto_tipo_produto" >
                                <?php foreach ($tipo_produto as $tp) { ?>  
                                    <option value="<?= $tp->tipo_produto_id; ?>">  <?= $tp->tipo_produto_id; ?>  - <?= $tp->tipo_produto_nome; ?>  </option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-sm-10" align="right">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="reset" class="btn btn-default">Limpar</button>
                        </div>    

                    </form>

                </div><!-- /col-lg-3 -->
            </div>
        </section>
    </section>
</section>