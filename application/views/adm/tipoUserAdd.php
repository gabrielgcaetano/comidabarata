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
                    <li role="presentation"><a href="<?= base_url(); ?>user/tipoUserLista">Lista</a></li>
                    <li role="presentation" class="active"><a href="<?= base_url(); ?>user/tipoUserAdd">Adicionar</a></li>
                    <li role="presentation"><a href="#"></a></li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-6 main-chart col-lg-offset-3">

                    <div class="alert alert-info" role="alert"><h3><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Dica: Adicione Categoria Para os Usuários</h3></div>
                    <form method="post" action="<?= base_url('user/tipoUserSalvar') ?>"
                          enctype="multipart/form-data">
                        <div class="panel panel-default">

                            <div class="panel-heading">Tipos de Usuários</div>
                            <div class="panel-body">
                                <form method="post" action="<?= base_url('user/tipoUserSalvar') ?>"
                                      enctype="multipart/form-data">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="user_tipo_nome"> Nome </label>
                                            <input type="text" id="user_tipo_nome" name="user_tipo_nome" 
                                                   class="form-control" required>
                                        </div>
                                    </div>
                            </div>
                            <div class="panel-footer" style="">                       
                                <button type="submit" class="btn btn-lg btn-info col-lg-offset-10">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
</section>