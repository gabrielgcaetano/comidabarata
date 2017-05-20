<!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="profile.html"><img src="<?= base_url(); ?>assets-adm/img/milho.png" class="img-circle" width="60"></a></p>
                <h5 class="centered">Gabriel Caetano</h5>

                <li class="mt">
                    <a class="active" href="<?= base_url(); ?>produto/all_adverts">
                        <i class="fa fa-dashboard"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-desktop"></i>
                        <span>Meus Produtos</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="<?= base_url(); ?>produto/my_adverts">Lista Produtos</a></li>
                        <li><a  href="<?= base_url(); ?>produto/registerProduct">Adicionar Produtos</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-desktop"></i>
                        <span>Administrativo</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="<?= base_url(); ?>produto/tipoProdutoLista">Categoria de Produtos</a></li>
                        <li><a  href="<?= base_url(); ?>user/tipoUserLista">Categoria de Usuário</a></li>
                        
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->