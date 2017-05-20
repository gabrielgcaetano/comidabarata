<section id="container" >
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-11 main-chart">
                    <form method="post" action="<?= base_url('user/UserUpdateSalvar') ?>"
                          enctype="multipart/form-data">

                        <input type="hidden" id="user_id" name="user_id" value="<?= $user[0]->user_id ?>">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="user_nome"> Nome </label>
                                <input type="text" id="user_nome" name="user_nome" 
                                       class="form-control" value="<?= $user[0]->user_nome ?>" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label for="user_status"> Status Anúncio </label>
                            <select class="form-control" id="user_status" name="user_status" >
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>

                        <div class="col-sm-12" align="right">
                            <button type="submit" class="btn btn-lg btn-success">Salvar</button>
                            <button type="reset" class="btn btn-lg btn-default">Limpar</button>
                        </div>    

                    </form>

                </div><!-- /col-lg-3 -->
            </div>
        </section>
    </section>
</section>