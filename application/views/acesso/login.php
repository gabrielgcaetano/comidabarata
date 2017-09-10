<div class="row">
    <div class="col-md-6 col-md-offset-7">
        <div class="painel">
            <form class="form-pre-acesso" method="post" action="<?= base_url() ?>user/login_entry" enctype="multipart/form-data" >
                 
                <div class="form-group text-center">
                    <label for="user_email"><h3 class="bordas">Email</h3></label>
                    <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email">
                </div>
                <div class="form-group text-center">
                    <label for="user_senha"><h3 class="bordas">Senha</h3></label>
                    <input type="password" class="form-control" id="user_senha" name="user_senha" placeholder="Password">
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