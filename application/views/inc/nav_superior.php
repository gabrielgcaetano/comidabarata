<!-- ============================================== TOP MENU ============================================== -->
<div class="top-bar animate-dropdown">
    <div class="container">
        <div class="header-top-inner">
            <div class="cnt-account">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="icon fa fa-user"></i>Minha Conta</a></li>
                    <li><a href="<?= base_url(); ?>produto/carrinhoDetalhe"><i class="icon fa fa-shopping-cart"></i>Meu Carrinho</a></li>
                    <?php
                    $nomee = $_SESSION['user_nomee'];
                    if ($nomee != null) {
                        ?>
                        <li class="dropdown"><a href="#"> 
                                <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html"><?= $nomee ?><b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu" >
                                    <ul role="presentation"><a role="menuitem" tabindex="-1" href="#"></a><h5 class="text-center"> Editar Perfil</h5></ul>
                                    <hr>
                                    <ul role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url(); ?>Produto/meusCupons"><h5 class="text-center"> Meus Cumpons</h5></a></ul>
                                    <hr>
                                    <ul role="presentation"><a role="menuitem" tabindex="-1" href="<?= base_url(); ?>User/logout"><h5 class="text-center"> Sair</h5></a></ul>
                                </ul>
                            </a></li>
                        <?php
                    } else {
                        ?>
                        <li><a href="<?= base_url(); ?>User/loginView"><i class="icon fa fa-lock"></i>Login</a></li>
                    <?php } ?>
                </ul>
            </div><!-- /.cnt-account -->
            <div class="clearfix"></div>
        </div><!-- /.header-top-inner -->
    </div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo">
                    <a href="<?= base_url(); ?>">
                        <img src="<?= base_url(); ?>assets/images/logoComidaBarata.png" alt="">
                    </a>
                </div><!-- /.logo -->
                <!-- ============================================================= LOGO : END ============================================================= -->				
            </div><!-- /.logo-holder -->

            <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                <!-- /.contact-row -->
                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area">
                    <form>
                        <div class="control-group">

                            <ul class="categories-filter animate-dropdown">
                                <li class="dropdown">

                                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categorias <b class="caret"></b></a>

                                    <ul class="dropdown-menu" role="menu" >
                                        <li class="menu-header">Alimentos</li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>

                                    </ul>
                                </li>
                            </ul>

                            <input class="search-field" placeholder="Pesquise Aqui..." />

                            <a class="search-button" href="#" ></a>    

                        </div>
                    </form>
                </div><!-- /.search-area -->
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

            <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                <div class="dropdown dropdown-cart">
                    <?php
                    $total = 0;
                    $totalItens= 0;
                    foreach ($carrinho as $car) {
                    $total = $total + ($car->transacao_produto_quantidade * $car->produto_preco_novo);  
                    $totalItens = $totalItens + $car->transacao_produto_quantidade;
                    }
                    ?>

                    <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                        <div class="items-cart-inner">
                            <div class="basket">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                            </div>
                            <div class="basket-item-count"><span class="count"><?= $totalItens ?></span></div>
                            <div class="total-price-basket">
                                <span class="lbl"></span>
                                <span class="total-price">
                                    <span class="sign">R$ </span><span class="value"> <?= number_format($total, 2); ?> </span>
                                </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        
                        <?php foreach ($carrinho as $car) { ?>
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="<?= base_url(); ?>produto/detalheProduto/<?= $car->produto_id ?>"><img src="<?= base_url(); ?>images/<?= $car->produto_foto; ?>" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">

                                            <h3 class="name"><a href="<?= base_url(); ?>produto/detalheProduto/<?= $car->produto_id ?>"><?= substr($car->produto_nome, 0, 12) ?></a></h3>
                                            <div class="price">R$ <?= number_format(($car->transacao_produto_quantidade * $car->produto_preco_novo), 2); ?>  </div>
                                            <br>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="<?= base_url(); ?>produto/removeItemCarrinho/<?= $car->transacao_id ?>"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div><!-- /.cart-item -->
                                <div class="clearfix"></div>

                            </li>
                        <?php } ?>  
                        <hr>
                        <div class="clearfix cart-total">
                            <div class="pull-right">
                                <span class="text">Sub Total :</span><span class='price'>R$ <?= number_format($total, 2); ?> </span>
                            </div>
                            <div class="clearfix"></div>

                            <a href="<?= base_url(); ?>produto/carrinhoDetalhe" class="btn btn-upper btn-primary btn-block m-t-20">Comprar</a>	
                        </div><!-- /.cart-total-->
                    </ul><!-- /.dropdown-menu-->

                </div><!-- /.dropdown-cart -->

                <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
        </div><!-- /.row -->

    </div><!-- /.container -->

</div><!-- /.main-header -->

<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <li class="active dropdown yamm-fw">
                                <a href="<?= base_url(); ?>" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                            </li>
                            <li class="dropdown yamm">
                                <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Alimentos</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content ">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                    <ul class="links">
                                                        <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/1-3">Arroz</a></li>
                                                        <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/1-4">Açúcar & Adoçantes</a></li>
                                                        <li><a href="#">Feijão</a></li>
                                                        <li><a href="#">Massas</a></li>
                                                        <li><a href="#">Óleos, Azeites & Vinagres</a></li>
                                                        <li><a href="#">Biscoitos & Salgadinhos</a></li>
                                                        <li><a href="#">Molhos</a></li>
                                                        <li><a href="#">Grãos & Frutas Secas</a></li>
                                                        <li><a href="#">Aveias</a></li>
                                                        <li><a href="#">Doces e Chocolates</a></li>
                                                        <li><a href="#">Fermentos e Mistura para Bolos</a></li>
                                                        <li><a href="#">Condimentos</a></li>
                                                        <li><a href="#">Conservas & Enlatados</a></li>
                                                    </ul>
                                                </div><!-- /.col -->	
                                            </div>
                                        </div>

                                    </li>
                                </ul>

                            </li>
                            <li class="dropdown">
                                <a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Congelados </a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                    <ul class="links">
                                                        <li><a href="#">Carnes e Aves</a></li>
                                                        <li><a href="#">Hambúrguer</a></li>
                                                        <li><a href="#">Petiscos e Empanados</a></li>
                                                        <li><a href="#">Sobremesas e Sucos</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content -->					
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="category.html"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Bebidas </a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                    <ul class="links">
                                                        <li><a href="#">Refrigerante</a></li>
                                                        <li><a href="#">Sucos</a></li>
                                                        <li><a href="#">Água e Energeticos</a></li>
                                                        <li><a href="#">Sobremesas e Sucos</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content -->					
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="category.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Perfumaria</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                    <ul class="links">
                                                        <li><a href="#">Shampoo</a></li>
                                                        <li><a href="#">Sabonete</a></li>
                                                        <li><a href="#">Desodorante</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content -->					
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="contact.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Limpeza</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                    <ul class="links">
                                                        <li><a href="#">Limpeza em Geral</a></li>
                                                        <li><a href="#">Para Cozinha</a></li>
                                                        <li><a href="#">Para Banheiro</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content -->					
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="contact.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Bebês</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                    <ul class="links">
                                                        <li><a href="#">Fraldas</a></li>
                                                        <li><a href="#">Lenços Infantil</a></li>
                                                        <li><a href="#">Alimentação Infantil</a></li>
                                                        <li><a href="#">Shampoo Infantil</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content -->					
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="contact.html" data-hover="dropdown" data-toggle="dropdown">Feira</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                                                    <ul class="links">
                                                        <li><a href="#">Legumes</a></li>
                                                        <li><a href="#">Verduras</a></li>
                                                        <li><a href="#">Frutas</a></li>
                                                        <li><a href="#">Temperos</a></li>
                                                    </ul>
                                                </div><!-- /.col -->
                                            </div><!-- /.row -->
                                        </div><!-- /.yamm-content -->					
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu pages">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">

                                                <div class="col-xs-12 col-menu">
                                                    <ul class="links">
                                                        <li><a href="home.html">Home</a></li>
                                                        <li><a href="category.html">Category</a></li>
                                                        <li><a href="detail.html">Detail</a></li>
                                                        <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="blog-details.html">Blog Detail</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li><a href="sign-in.html">Sign In</a></li>
                                                        <li><a href="my-wishlist.html">Wishlist</a></li>
                                                        <li><a href="terms-conditions.html">Terms and Condition</a></li>
                                                        <li><a href="track-orders.html">Track Orders</a></li>
                                                        <li><a href="product-comparison.html">Product-Comparison</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                        <li><a href="404.html">404</a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown  navbar-right special-menu">
                                <a href="#">Super Ofertas do Dia</a>
                            </li>
                        </ul><!-- /.navbar-nav -->
                        <div class="clearfix"></div>				
                    </div><!-- /.nav-outer -->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.nav-bg-class -->
        </div><!-- /.navbar-default -->
    </div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->