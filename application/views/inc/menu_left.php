<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="#"><img src="<?= base_url(); ?>assets-adm/img/milho.png" class="img-circle" width="60"></a></p>
            <h5 class="centered"> <?php echo $_SESSION['user_nomee'] ?> </h5>

            <li class="mt">
                <a class="active" href="#">
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
                    <li><a  href="<?= base_url(); ?>produto/meusProdutosLista">Lista Produtos</a></li>
                    <li><a  href="<?= base_url(); ?>produto/meusProdutosAdd">Adicionar Produtos</a></li>

                </ul>
            </li>
            
            <li class="mt">
                <a class="" href="<?= base_url(); ?>produto/cupomPorEmpresa">
                    <i class="fa fa-dashboard"></i>
                    <span>Baixa Cupom</span>
                </a>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Gerencial</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= base_url(); ?>Gerencial/vendas">Total Vendas</a></li>
                </ul>
            </li>
            
<!--            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Administrativo</span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= base_url(); ?>produto/tipoProdutoLista">Tipo de Produtos</a></li>
                    <li><a  href="<?= base_url(); ?>user/tipoUserLista">Tipo de Usuário</a></li>

                </ul>
            </li>-->

<!--            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span> Gerencial </span>
                </a>
                <ul class="sub">
                    <li><a  href="<?= base_url(); ?>gerencial/grafico_marcas_piechart"> Gráficos Marcas </a></li>
                    <li><a  href="<?= base_url(); ?>gerencial/grafico_view_barra"> Gráficos de Produtos Populares </a></li>

                </ul>
            </li>-->

        </ul>
    </div>
</aside>

<div class="col-lg-9 col-lg-offset-1">
