<section id="container" >
    <section id="main-content">
        <section class="wrapper">


        </section>
    </section>
</section>
<section id="container" >
    <section id="main-content">
        <section class="wrapper col-sm-12">
            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                
                <div class="row">
                    <div class="col-lg-12 main-chart">
                        <div class="panel panel-verde">
                            <div class="panel-heading panel-heading-verde">Pesquisar</div>
                            <div class="panel-body">
                                <form method="post" action="<?= base_url('gerencial/vendas') ?>"
                                      enctype="multipart/form-data" style="margin-top: 20px;">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="date" id="data_inicio" name="data_inicio" 
                                                   class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="date" id="data_final" name="data_final" 
                                                   class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-3" align="right">
                                        <button type="submit" class="btn btn-lg bottom-verde">Pesquisar</button>
                                    </div>    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 main-chart">
                        <form method="post" action="<?= base_url('produto/meusProdutosSalvar') ?>"
                              enctype="multipart/form-data">
                            <div class="panel panel-verde">
                                <div class="panel-heading panel-heading-verde">Relatório Vendas</div>
                                <div class="panel-body panel-body-verde">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="produto_nome"> Valor Vendido </label>
                                            <input type="text" id="produto_nome" name="produto_nome" 
                                                   class="form-control"  value="<?php echo number_format($valorTotal, 2); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="produto_nome"> Comissão do Sistema </label>
                                            <input type="text" id="produto_nome" name="produto_nome" 
                                                   class="form-control" value="<?php echo number_format($valorComissao, 2); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="produto_nome"> Lucro </label>
                                            <input type="text" id="produto_nome" name="produto_nome" 
                                                   class="form-control" value="<?php echo number_format($lucro, 2); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="produto_nome"> Quantidade Itens Vendidos </label>
                                            <input type="text" id="produto_nome" name="produto_nome" 
                                                   class="form-control" value="<?php echo number_format($quantidadeItes, 0); ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

<!--                <h1>Valor Vendido: <?php echo number_format($valorTotal, 2); ?></h1>
                <h1>Comissão Para o Site: <?php echo number_format($valorComissao, 2); ?></h1>-->
            </section>
        </section>
    </section>