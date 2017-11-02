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
                        <form method="post" action="<?= base_url('gerencial/print_vendas_resumida') ?>"
                              enctype="multipart/form-data">
                            <div class="panel panel-verde">
                                <div class="panel-heading panel-heading-verde">Relatório Vendas</div>
                                <div class="panel-body panel-body-verde">
                                    <input type="hidden" id="h_data_inicio" name="h_data_inicio" 
                                                   class="form-control"  value="<?php echo date('d/m/Y', strtotime($h_data_inicio)); ?>">
                                    <input type="hidden" id="h_data_final" name="h_data_final" 
                                                   class="form-control"  value="<?php echo date('d/m/Y', strtotime($h_data_final)); ?>">
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="total_vendido"> Valor Vendido </label>
                                            <input type="text" id="total_vendido" name="total_vendido" 
                                                   class="form-control"  value="<?php echo number_format($valorTotal, 2); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="total_comissao"> Comissão do Sistema </label>
                                            <input type="text" id="total_comissao" name="total_comissao" 
                                                   class="form-control" value="<?php echo number_format($valorComissao, 2); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="total_lucro"> Lucro </label>
                                            <input type="text" id="total_lucro" name="total_lucro" 
                                                   class="form-control" value="<?php echo number_format($lucro, 2); ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="total_itens_vendidos"> Quantidade Itens Vendidos </label>
                                            <input type="text" id="total_itens_vendidos" name="total_itens_vendidos" 
                                                   class="form-control" value="<?php echo number_format($quantidadeItes, 0); ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">                       
                                    <button type="submit" class="btn btn-lg btn-info col-lg-offset-10">Imprimir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </section>