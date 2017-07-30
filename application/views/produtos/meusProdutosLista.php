<section id="container" >
    <section id="main-content">
        <section class="wrapper">
            <!--           Menu Superior                 -->
            <div>
                <ul class="nav nav-pills nav-justified" style="background-color: white">
                    <li role="presentation" class="active"><a href="<?= base_url(); ?>produto/tipoProdutoLista">Lista</a></li>
                    <li role="presentation"><a href="<?= base_url(); ?>produto/meusProdutosAdd">Adicionar</a></li>
                    <li role="presentation"><a></a></li>
                </ul>

                <div class="row">
                    <div class="col-lg-10 main-chart col-lg-offset-1">

                        <div class="panel panel-primary">
                            <div class="panel-heading">Pesquisar</div>
                            <div class="panel-body">
                                <form method="post" action="<?= base_url('produto/meusProdutoPesquisa') ?>"
                                      enctype="multipart/form-data" style="margin-top: 20px;">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="produto_nome" name="produto_nome" 
                                                   class="form-control" placeholder="Pesquisar nome de produto..." >
                                        </div>
                                    </div>
                                    <div class="col-md-3" align="right">
                                        <button type="submit" class="btn btn-primary btn-lg">Pesquisar</button>
                                    </div>    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1" >

                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading"><h3> Meus Anúncios</h3></div>
                        <div class="panel-body">

                        </div>
                        <table class="table table-responsive">                    
                            <thead>
                                <tr>
                                    <th><p class="centered">Imagem</p></th>
                                    <th>Produto</th>
                                    <th>Preço</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>    
                                <!-- Busca todos os dados que tem no banco atravez da controler -->
                                <?php foreach ($produto as $prod) { ?>
                                    <tr>
                                        <td><p class="centered"><a href="#"><img src="<?= base_url(); ?>images/<?= $prod->produto_foto; ?>" class="img-circle" width="80"></a></p></td>
                                        <td><br><br><p class=""> <?= $prod->produto_nome; ?> </p></td>
                                        <td><br><br><p class=""> <?= $prod->produto_preco_novo; ?> </p></td>
                                        <td><br><a href="<?= base_url('produto/formUpdate/' . $prod->produto_id) ?>" class="btn btn-lg btn-primary btn-group">Detalhes</a> </td> 
                                    </tr>    
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </section>
</section>