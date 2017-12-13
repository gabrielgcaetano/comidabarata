<section id="container" >
    <section id="main-content">
        <section class="wrapper">
            <!--           Menu Superior                 -->
            <div>
                <ul class="nav nav-pills nav-justified" style="background-color: white; border-radius: 10px;">
                    <li role="presentation" class="active-verde"><a style="color: white;" href="<?= base_url(); ?>denunciasMinhaEmpresa">Denúncia Ativa</a></li>
                    <li role="presentation"><a style="color: black;" href="<?= base_url(); ?>denunciasMinhaEmpresaOn">Denúncia Concluída</a></li>
                </ul>

                <div class="row">
                    <div class="col-lg-10 main-chart col-lg-offset-1">
                        <div class="panel panel-verde">
                            <div class="panel-heading panel-heading-verde">Pesquisar</div>
                            <div class="panel-body">
                                <form method="post" action="<?= base_url('denunciasPesquisa') ?>"
                                      enctype="multipart/form-data" style="margin-top: 20px;">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="denuncia_titulo" name="denuncia_titulo" 
                                                   class="form-control" placeholder="Pesquisar título de Denúncia..." >
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
            </div>

            <div class="row">
                <div class="col-lg-10 col-lg-offset-1" >

                    <div class="panel panel-verde">
                        <!-- Default panel contents -->
                        <div class="panel-heading panel-heading-verde"><h3> Denúncias Encerradas</h3></div>
                        <div class="panel-body">

                        </div>
                        <table class="table table-responsive table-verde">                    
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Descrição</th>
                                    <th>Produto</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>    
                                <!-- Busca todos os dados que tem no banco atravez da controler -->
                                <?php foreach ($denuncia as $den) { ?>
                                    <tr>
                                        <td><br><br><p class=""> <?= $den->denuncia_titulo; ?> </p></td>
                                        <td><br><br><p class=""> <?= $den->denuncia_descricao; ?> </p></td>
                                        <td><br><br><p class=""> <?= $den->produto_nome; ?> (Código <?= $den->produto_id; ?> )</p></td>
                                        <td>
                                            <br>
                                        </td> 
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