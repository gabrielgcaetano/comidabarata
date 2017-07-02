<div class="row">
    <div class="col-md-6 col-md-offset-7">
        <div class="painel">
            <form class="form-pre-acesso" method="post" action="<?= base_url() ?>user/register_save" enctype="multipart/form-data">
                <div class="form-group text-center">
                    <label for="user_nome"><h3 class="bordas">Nome Completo</h3></label>
                    <input type="text" class="form-control" id="user_nome" name="user_nome" placeholder="Nome Completo">
                </div>
                <div class="form-group text-center">
                    <label for="user_documento"><h3 class="bordas">CPF/CNPJ</h3></label>
                    <input type="text" class="form-control" id="user_documento" name="user_documento" placeholder="CPF/CNPJ">
                </div>
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
                        <h5 class="bordas"> <input type="checkbox">  Lembre-me </h5>
                    </label>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-default btn-lg">Criar Conta</button>
                </div>
                <br>
                <div class="text-center">
                    <h4 class="bordas"> Já tem cadastro? <a href="<?= base_url() ?>user/login"> click aqui </a> </h4>
                </div>

            </form>
        </div>
    </div>
</div>