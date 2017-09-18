<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="<?= base_url(); ?>assets-adm/img/milho.png" class="img-circle" width="60"></a></p>
            <h5 class="centered"> <?php echo $_SESSION['user_nomee'] ?> </h5>

            <li class="mt">
                <a class="active" href="<?= base_url(); ?>produto/">
                    <i class="fa fa-dashboard"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="sub-menu">
                <a  href="<?= base_url(); ?>produto/tipoProdutoLista">Tipo de Produtos</a>
            </li>
        </ul>
    </div>
</aside>

<div class="col-lg-9 col-lg-offset-1">
