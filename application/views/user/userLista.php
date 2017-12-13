<section id="container" >
    <section id="main-content">
        <section class="wrapper">
            <!--           Menu Superior                 -->
            <div>
                <div class="row">
                    <div class="col-lg-10 main-chart col-lg-offset-1">
                        <div class="panel panel-verde">
                            <div class="panel-heading panel-heading-verde">Pesquisar</div>
                            <div class="panel-body">
                                <form method="post" action="<?= base_url('produto/meusProdutoPesquisa') ?>"
                                      enctype="multipart/form-data" style="margin-top: 20px;">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="text" id="usuario_nome" name="usuario_nome" 
                                                   class="form-control" placeholder="Pesquisar nome de Usuário..." >
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
                        <div class="panel-heading panel-heading-verde"><h3>Usuário</h3></div>
                        <div class="panel-body">

                        </div>
                        <table class="table table-responsive table-verde">                    
                            <thead>
                                <tr>
                                    <th class="col-lg-9">Nome</th>
                                    <th class="col-lg-3"></th>
                                </tr>
                            </thead>
                            <tbody>    
                                <!-- Busca todos os dados que tem no banco atravez da controler -->
                                <?php foreach ($user as $us) { ?>
                                    <tr>
                                        <td><br><br><p class=""> <?= $us->user_nome; ?> </p></td>
                                        <td><br><a href="<?= base_url('User/updateUserNivelView/' . $us->user_id) ?>" class="btn btn-lg btn-group bottom-verde">Alterar</a> </td> 
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