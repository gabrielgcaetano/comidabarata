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
            <div class="row">
                <div class="col-sm-9 " >
                    <div class="panel" style="border-color:#4e8621">
                        <!-- Default panel contents -->
                        <div class="panel-body" >
                            <?php foreach ($produto as $prod) { ?>
                                <div class="col-lg-4" style=" height: 400px; margin: 0px;">

                                    <div class="panel panel-default" style="border-color:#4e8621">
                                        <div class="panel-heading text-center " style=""><?= substr($prod->produto_nome, 0, 22) ?></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <?php
                                                    if ($prod->produto_validade_Bol == 0) {
                                                        ?>
                                                        <img src="<?= base_url(); ?>images/etiqueta-preco.png" class="img-rounded" width="40" style="margin-top: -60px; margin-left: -10px">
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?= base_url(); ?>images/etiqueta-validade.png" class="img-rounded" width="40" style="margin-top: -60px; margin-left: -10px">
                                                    <?php } ?>
                                                    <div class="thumbnail">
                                                        <img src="<?= base_url(); ?>images/<?= $prod->produto_foto; ?>" class="img-rounded" width="120">
                                                        <div class="caption">
                                                            <h6 class="text-center" style="">De R$ <s><?= $prod->produto_preco_velho; ?></s></h6>
                                                            <h3 class="text-center" style="color: red;">R$ <?= $prod->produto_preco_venda; ?></h3>
                                                            <br>
                                                            <p class="text-center" ><a href="<?= base_url('produto/comprarProduto/' . $prod->produto_id) ?>" class="btn btn-lg btn-group" style="background-color:#4e8621; color: white">Comprar</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                <li>
                                    <a href="<?= base_url('produto/pagTodosProdutos/' . ($value - $reg_p_pag)) ?>" aria-label="Anterior" style="<?= $btnA ?>">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <?php
                                $n_pag = 1;
                                for ($i = 1; $i <= $qtd_botoes; $i++) {
                                    ?>
                                    <li><a href="<?= base_url('produto/pagTodosProdutos/' . $n_pag) ?>"><?= $i ?></a></li>
                                    <?php
                                    $n_pag += $reg_p_pag;
                                }
                                ?>
                                <li>
                                    <a href="<?= base_url('produto/pagTodosProdutos/' . ($value + $reg_p_pag)) ?>" aria-label="Próximo" style="<?= $btnP ?>">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel " style="color: white; border-color:#4e8621;">
                        <!-- Default panel contents -->
                        <div class="panel-heading text-center" style="color: white;background-color:#4e8621;"><h3> Destaque </h3></div>
                        <div class="panel-body">
                            <?php foreach ($produto_destaque as $prodd) { ?>
                                <div class="col-lg-12" style=" height: 400px; margin: 0px;">

                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center " style=""><?= substr($prodd->produto_nome, 0, 22) ?></div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <?php
                                                    if ($prodd->produto_validade_Bol == 0) {
                                                        ?>
                                                        <img src="<?= base_url(); ?>images/etiqueta-preco.png" class="img-rounded" width="40" style="margin-top: -60px; margin-left: -10px">
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <img src="<?= base_url(); ?>images/etiqueta-validade.png" class="img-rounded" width="40" style="margin-top: -60px; margin-left: -10px">
                                                    <?php } ?>
                                                    <div class="thumbnail">
                                                        <img src="<?= base_url(); ?>images/<?= $prodd->produto_foto; ?>" class="img-rounded" width="120">

                                                        <div class="caption">
                                                            <h3 class="text-center" style="color: red;">R$ <?= $prodd->produto_preco_venda; ?></h3>
                                                            <br>
                                                            <p class="text-center" ><a href="<?= base_url('produto/formUpdate/' . $prodd->produto_id) ?>" class="btn btn-lg btn-group" style="background-color:#4e8621; color: white">Comprar</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>