<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->			
                <div class="col-md-6 col-sm-6 sign-in">
                    <h4 class="">Login</h4>
                    <p class="">Olá, bem-vindo à sua conta.</p>
                    <div class="social-sign-in outer-top-xs">
                        <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Login com Facebook</a>
                        <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Login com Twitter</a>
                    </div>
                    <form class="register-form outer-top-xs" role="form" method="post" action="<?= base_url() ?>user/login_entry" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="user_email" name="user_email" >
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputPassword1">Senha <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="user_senha" name="user_senha" >
                        </div>
                        <div class="radio outer-xs">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Lembre me!
                            </label>
                            <a href="#" class="forgot-password pull-right">Esqueceu sua Senha?</a>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                    </form>					
                </div>
                <!-- Sign-in -->

                <!-- create a new account -->
                <div class="col-md-6 col-sm-6 create-new-account">
                    <h4 class="checkout-subtitle">Crie uma nova conta</h4>
                    <p class="text title-tag-line">Crie sua nova conta.</p>
                    <form class="register-form outer-top-xs" role="form" method="post" action="<?= base_url() ?>user/register_save" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="user_email" name="user_email">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Nome <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" id="user_nome" name="user_nome">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Telefone <span>*</span></label>
                            <input type="number" class="form-control unicase-form-control text-input" id="user_tel_1" name="user_tel_1">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Senha <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input" id="user_senha" name="user_senha">
                        </div>
<!--                        <div class="form-group">
                            <label class="info-title" for="exampleInputEmail1">Confirme Senha <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="">
                        </div>-->
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Cadastre-se</button>
                    </form>


                </div>	
                <!-- create a new account -->
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->
    </div><!-- /.container -->
</div><!-- /.body-content -->