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
                    <li role="presentation"><a style="color: black;" href="<?= base_url(); ?>produto/meusProdutosLista">Listar</a></li>
                    <li role="presentation" class="active-verde"><a style="color: white;" href="<?= base_url(); ?>produto/meusProdutosAdd">Adicionar</a></li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-12 main-chart">
                    <form method="post" action="<?= base_url('produto/meusProdutosSalvar') ?>"
                          enctype="multipart/form-data">
                        <div class="panel panel-verde">
                            <div class="panel-heading panel-heading-verde">Meus Produtos</div>
                            <div class="panel-body panel-body-verde">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="produto_nome"> Nome </label>
                                        <input type="text" id="produto_nome" name="produto_nome" 
                                               class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="produto_nome">Detalhes</label>
                                        <textarea class="form-control" type="text" id="produto_nome" name="produto_descricao" rows="5" required></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="produto_preco_velho"> Preço Original </label>
                                        <input type="text" id="produto_preco_velho" name="produto_preco_velho" 
                                               class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="produto_preco_novo"> Preço Atual </label>
                                        <input type="text" id="produto_preco_novo" name="produto_preco_novo" 
                                               class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label for="produto_tipo_produto"> Tipo Produto </label>

                                    <select class="form-control" id="produto_tipo_produto_sub_id" name="produto_tipo_produto_sub_id" >
                                        <?php foreach ($tipo_produto_sub as $tp) { ?>  
                                            <option value="<?= $tp->tipo_produto_sub_id; ?>">  <?= $tp->tipo_produto_nome; ?> - <?= $tp->tipo_produto_sub_nome; ?> </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="produto_preco_novo"> Data de Validade </label>
                                        <input type="date" id="produto_validade" name="produto_validade" 
                                               class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="produto_validade_Bol"> Anúncio Destaque </label>
                                    <select class="form-control" id="produto_validade_Bol" name="produto_validade_Bol" >
                                        <option value="1"> Sim </option>
                                        <option value="0"> Não </option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <label for="produto_destaque"> Anúncio Sustentabilidade </label>
                                    <select class="form-control" id="produto_destaque" name="produto_destaque" >
                                        <option value="1"> Sim </option>
                                        <option value="0"> Não </option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="produto_foto"> Foto </label>
                                        <input type="file" id="produto_foto" name="produto_foto" 
                                               accept=".gif,.jpg,.png"
                                               class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" style="">                       
                                <button type="submit" class="btn btn-lg bottom-verde col-lg-offset-10">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



















        </section>
    </section>
</section>