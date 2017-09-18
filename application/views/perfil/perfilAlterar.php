
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class='active'>Perfil</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="checkout-box ">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel-group checkout-steps" id="accordion">
                        <!-- checkout-step-01  -->
                        <div class="panel panel-default checkout-step-01">

                            <!-- panel-heading -->
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
                                        <span>1</span> Dados Pessoais
                                    </a>
                                </h4>
                            </div>
                            <!-- panel-heading -->

                            <div id="collapseOne" class="panel-collapse collapse in">
                                <!-- panel-body  -->
                                <div class="panel-body">
                                    <div class="row">		
                                        <!-- already-registered-login -->
                                        <div class="col-md-12 col-sm-12 already-registered-login">
                                            <form class="register-form" role="form" method="post" action="<?= base_url('user/alterarPerfilDadosPessoaisSalvar') ?>"
                                                  enctype="multipart/form-data">

                                                <div class="form-group">
                                                    <label class="info-title" for="user_email"> Email <span>*</span></label>
                                                    <input type="email" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_email ?>" id="user_email" name="user_email" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="user_senha"> Senha <span>*</span></label>
                                                    <input type="password" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_senha ?>" id="user_senha" name="user_senha" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="user_nome"> Nome <span>*</span></label>
                                                    <input type="text" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_nome ?>" id="user_nome" name="user_nome" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="user_documento"> CPF/CNPJ <span>*</span></label>
                                                    <input type="text" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_documento ?>" id="user_documento" name="user_documento" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="user_dt_aniversario"> Data Aniversário <span>*</span></label>
                                                    <input type="date" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_dt_aniversario ?>" id="user_dt_aniversario" name="user_dt_aniversario" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="info-title" for="user_sexo"> Sexo <span>*</span></label>
                                                    <select class="form-control" id="user_sexo" name="user_sexo" >
                                                        <option value="1">Masculino</option>
                                                        <option value="0">Feminino</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Salvar</button>
                                            </form>
                                        </div>	
                                        <!-- already-registered-login -->		
                                    </div>			
                                </div>
                                <!-- panel-body  -->

                            </div><!-- row -->
                        </div>
                        <!-- checkout-step-01  -->
                        <!-- checkout-step-02  -->
                        <div class="panel panel-default checkout-step-02">
                            <div class="panel-heading">
                                <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                        <span>2</span> Contato
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">		
                                        <!-- already-registered-login -->
                                        <div class="col-md-12 col-sm-12 already-registered-login">
                                            <form class="register-form" role="form" method="post" action="<?= base_url('user/alterarPerfilContatoSalvar') ?>"
                                                  enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <div class="col-sm-2">
                                                        <label class="info-title" for="user_ddd_1"> DDD <span>*</span></label>
                                                        <input type="tel" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_ddd_1 ?>" id="user_ddd_1" name="user_ddd_1" maxlength="2" placeholder="">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <label class="info-title" for="user_tel_1"> Telefone Residencial <span>*</span></label>
                                                        <input type="tel" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_tel_1 ?>" id="user_tel_1" name="user_tel_1" minlength="8" maxlength="8 placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-2">
                                                        <label class="info-title" for="user_ddd_2"> DDD <span>*</span></label>
                                                        <input type="tel" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_ddd_2 ?>" id="user_ddd_2" name="user_ddd_2" maxlength="2" placeholder="">
                                                    </div>
                                                    <div class="col-sm-10">
                                                        <label class="info-title" for="user_tel_2"> Telefone Celular <span>*</span></label>
                                                        <input type="tel" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_tel_2 ?>" id="user_tel_2" name="user_tel_2" minlength="8" maxlength="9" placeholder="">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button" style="margin-top: 30px;">Salvar</button>
                                            </form>
                                        </div>	
                                        <!-- already-registered-login -->		
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- checkout-step-02  -->

                        <!-- checkout-step-03  -->
                        <!--                        <div class="panel panel-default checkout-step-03">
                                                    <div class="panel-heading">
                                                        <h4 class="unicase-checkout-title">
                                                            <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                                                                <span>3</span>Endereço
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <div class="row">		
                                                                 already-registered-login 
                                                                <div class="col-md-12 col-sm-12 already-registered-login">
                                                                    <form class="register-form" role="form">
                                                                        <div class="form-group">
                                                                            <label class="info-title" for="user_email"> Email <span>*</span></label>
                                                                            <input type="email" class="form-control unicase-form-control text-input" id="user_email" name="user_email" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="info-title" for="user_senha"> Senha <span>*</span></label>
                                                                            <input type="password" class="form-control unicase-form-control text-input" id="user_senha" name="user_senha" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="info-title" for="user_nome"> Nome <span>*</span></label>
                                                                            <input type="text" class="form-control unicase-form-control text-input" id="user_nome" name="user_nome" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="info-title" for="user_documento"> CPF/CNPJ <span>*</span></label>
                                                                            <input type="text" class="form-control unicase-form-control text-input" id="user_documento" name="user_documento" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="info-title" for="user_dt_aniversario"> Data Aniversário <span>*</span></label>
                                                                            <input type="date" class="form-control unicase-form-control text-input" id="user_dt_aniversario" name="user_dt_aniversario" placeholder="">
                                                                        </div>
                                                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Salvar</button>
                                                                    </form>
                                                                </div>	
                                                                 already-registered-login 		
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                        <!-- checkout-step-03  -->
                    </div><!-- /.checkout-steps -->
                </div>
                <div class="col-md-4">
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
    </div><!-- /.container -->
</div><!-- /.body-content -->