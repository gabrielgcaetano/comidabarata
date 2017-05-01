<div class="row">
    <div class="col-md-6 col-md-offset-7">
        <div class="painel">
            <form class="form-pre-acesso" method="post" action="<?= base_url() ?>user/login_entry" enctype="multipart/form-data" >
                 
                <div class="form-group text-center">
                    <label for="email_user"><h3 class="bordas">Email</h3></label>
                    <input type="email" class="form-control" id="email_user" name="email_user" placeholder="Email">
                </div>
                <div class="form-group text-center">
                    <label for="exampleInputPassword1"><h3 class="bordas">Senha</h3></label>
                    <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Password">
                </div>
                <div class="checkbox text-right">
                    <label>
                       <h5 class="bordas"> <input type="checkbox">  Check me out </h5>
                    </label>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-default btn-lg">Entrar</a></button>
                </div>
                <br>
                <div class="text-center">
                    <h4 class="bordas"> Ainda não tem cadastro? <a href="<?= base_url(); ?>user/register">click aqui</a> </h4>
                </div>
                
            </form>
        </div>
    </div>
</div>