<section id="container" >
    <section id="main-content">
        <section class="wrapper">


        </section>
    </section>
</section>
<section id="container" >
    <section id="main-content">
        <section class="wrapper col-sm-12 col-lg-pull-1">
            <div class="row" style="margin-top: -35px">
                <div class="col-lg-12 main-chart">
                    <div class="panel" style="color: white; border-color:#4e8621">
                        <div class="panel-heading" style="background-color:#4e8621">Pesquisar</div>
                        <div class="panel-body">
                            <form method="post" action="<?= base_url('produto/produtoPesquisa') ?>"
                                  enctype="multipart/form-data" style="margin-top: 20px;">
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <input type="text" id="produto_nome" name="produto_nome" 
                                               class="form-control" placeholder="Pesquisar nome de produto..." >
                                    </div>
                                </div>
                                <div class="col-md-1" align="" style="margin-left: 40px">
                                    <button type="submit" class="btn btn-lg" style="background-color:#4e8621; color: white">Pesquisar</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <h1>Valor Vendido: <?php echo $valorTotal  ?></h1>
            <h1>Comissão Para o Site: <?php echo $valorComissao  ?></h1>

        </section>
    </section>
</section>