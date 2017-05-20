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
                <div class="col-lg-11 main-chart">

                    <div class="alert alert-info" role="alert"><h3><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Dica: Adicione Categoria Para os Usuários</h3></div>

                    <form method="post" action="<?= base_url('user/tipoUserSalvar') ?>"
                          enctype="multipart/form-data">

                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="user_tipo_nome"> Nome </label>
                                <input type="text" id="user_tipo_nome" name="user_tipo_nome" 
                                       class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-2" align="right">
                            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
                        </div>    

                    </form>

                </div><!-- /col-lg-3 -->
            </div>
        </section>
    </section>
</section>