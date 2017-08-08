<section id="container" >
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="alert alert-info text-center" role="alert"><h3><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> Dica: Mantenha sempre seu cadastro atualizado. </h3></div>

            <div class="row">
                <div class="col-lg-6 main-chart col-lg-offset-3">
                    <form method="post" action="<?= base_url('user/UserUpdateSalvar') ?>"
                          enctype="multipart/form-data">

                        <input type="hidden" id="user_id" name="user_id" value="<?= $user[0]->user_id ?>">

                        <div class="panel panel-default" style="border-color:#4e8621">
                            <div class="panel-heading" style="color: white; background-color:#4e8621"> Dados Acesso </div>
                            <div class="panel-body">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="user_email"> E-mail </label>
                                        <input type="email" id="user_email" name="user_email" 
                                               class="form-control" value="<?= $user[0]->user_email ?>" required>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="user_senha"> Senha </label>
                                        <input type="password" placeholder="Senha" id="user_senha" name="user_senha" 
                                               class="form-control" value="<?= $user[0]->user_senha ?>"  required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="border-color:#4e8621">
                            <div class="panel-heading" style="color: white; background-color:#4e8621"> Dados Pessoais</div>
                            <div class="panel-body">
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label for="user_nome"> Nome </label>
                                        <input type="text" id="user_nome" name="user_nome" 
                                               class="form-control" value="<?= $user[0]->user_nome ?>" required>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label for="user_sexo"> Sexo </label>
                                    <select class="form-control" id="user_sexo" name="user_sexo" >
                                        <option value="1">Masculino</option>
                                        <option value="0">Feminino</option>
                                    </select>
                                </div>

                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="user_documento"> CPF/CNPJ </label>
                                        <input type="text" id="user_documento" name="user_documento" 
                                               class="form-control" value="<?= $user[0]->user_documento ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="user_data"> Data Aniversário </label>
                                        <input type="date" id="user_dt_aniversario" name="user_dt_aniversario" 
                                               class="form-control" value="<?= $user[0]->user_dt_aniversario ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="user_ddd_1"> DDD </label>
                                        <input type="tel" id="user_ddd_1" name="user_ddd_1" maxlength="2"
                                               class="form-control" value="<?= $user[0]->user_ddd_1 ?>">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="user_tel_1"> Telefone Residencial </label>
                                        <input type="tel" id="user_tel_1" name="user_tel_1" onkeyup="maskTel1(this)" maxlength="9"
                                               class="form-control" value="<?= $user[0]->user_tel_1 ?>">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="user_ddd_2"> DDD </label>
                                        <input type="tel" id="user_ddd_2" name="user_ddd_2"  maxlength="2"
                                               class="form-control" value="<?= $user[0]->user_ddd_2 ?>">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="user_tel_2"> Telefone Celular </label>
                                        <input type="tel" id="user_tel_2" name="user_tel_2" onkeyup="maskTel2(this)" maxlength="10"
                                               class="form-control" value="<?= $user[0]->user_tel_2 ?>">
                                    </div>
                                </div>



                                <div class="col-sm-3">
                                    <label for="user_status"> Desativar Conta </label>
                                    <select class="form-control" id="user_status" name="user_status" >
                                        <option value="0"> Não </option>
                                        <option value="1"> Sim </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default" style="border-color:#4e8621">
                            <div class="panel-heading" style="color: white; background-color:#4e8621"> Endereço </div>
                            <div class="panel-body">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="user_cep"> CEP </label>
                                        <input type="text" id="user_cep" name="user_cep" onkeyup="maskCEP(this)" maxlength="9"
                                               class="form-control" value="<?= $user[0]->user_cep ?>">
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="col-sm-12" align="right">
                            <button type="submit" class="btn btn-lg btn-info">Salvar</button>
                        </div>    
                        <div style="height:150px">
                            <br>
                        </div>
                            
                        <script>
                            function vCampo(el, er) {
                                var e = $(el).val().replace(er, '');
                                $(el).val(e);
                            }

                            function num(el) {
                                vCampo(el, /[^0-9]/g);
                            }

                            function maskTel1(el) {
                                vCampo(el, /[^0-9\-]/g);

                                var e = $(el).val();

                                if (event.keyCode != 8) {
                                    if (e.length == 4) {
                                        $(el).val(e + '-');
                                    }
                                }
                            }
                            function maskTel2(el) {
                                vCampo(el, /[^0-9\-]/g);

                                var e = $(el).val();

                                if (event.keyCode != 8) {
                                    if (e.length == 5) {
                                        $(el).val(e + '-');
                                    }
                                }
                            }
                            function maskCEP(el) {
                                vCampo(el, /[^0-9\-]/g);

                                var e = $(el).val();

                                if (event.keyCode != 8) {
                                    if (e.length == 5) {
                                        $(el).val(e + '-');
                                    }
                                }
                            }

                        </script>
                    </form>
                </div>
            </div>
        </section>
    </section>
</section>