<div class="row">
    <div class="col-md-6 col-md-offset-7">
        <div class="painel">
            <form class="form-pre-acesso" method="post" action="<?= base_url() ?>user/register_save" enctype="multipart/form-data">
                <div class="form-group text-center">
                    <label for="full_name_user"><h3 class="bordas">Nome Completo</h3></label>
                    <input type="text" class="form-control" id="full_name_user" name="full_name_user" placeholder="Nome Completo">
                </div>
                <div class="form-group text-center">
                    <label for="email_user"><h3 class="bordas">Email</h3></label>
                    <input type="email" class="form-control" id="email_user" name="email_user" placeholder="Email">
                </div>
                <div class="form-group text-center">
                    <label for="password_user"><h3 class="bordas">Senha</h3></label>
                    <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Password">
                </div>
                <div class="checkbox text-right">
                    <label>
                        <h5 class="bordas"> <input type="checkbox">  Lembre-me </h5>
                    </label>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-default btn-lg">Criar Conta</button>
                </div>
                <br>
                <div class="text-center">
                    <h4 class="bordas"> Ainda já tem cadastro? click aqui </h4>
                </div>

            </form>
        </div>
    </div>
</div>