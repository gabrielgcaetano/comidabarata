<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class='active'>Todos</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row'>
            <div class='col-md-3 sidebar'>
                <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categorias</div>        
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>Alimentos</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">  
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-3">Arroz</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-4">Açúcar & Adoçantes</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-5">Feijão</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-6">Massas</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-10">Óleos, Azeites & Vinagres</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-7">Biscoitos & Salgadinhos</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-9">Molhos</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-15">Aveias</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-8">Doces e Chocolates</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-14">Fermentos e Mistura para Bolos</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-11">Condimentos</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-12">Conservas & Enlatados</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="dropdown-banner-holder">
                                            </div>

                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop" aria-hidden="true"></i>Congelados</a>
                                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-18">Carnes e Aves</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-19">Hambúrguer</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-20">Petiscos e Empanados</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-21">Sobremesas e Sucos</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->
                            </li> <!-- /.menu-item -->
                            <!-- ================================== MEGAMENU VERTICAL ================================== -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paw" aria-hidden="true"></i>Bebidas</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">  
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-22">Refrigerante</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-23">Sucos</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-24">Água e Energéticos</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-25">Sobremesas e Sucos</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->           
                            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-clock-o"></i>Higiene Pessoal</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-26">Shampoo</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-27">Sabonete</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-28">Desodorante</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->            
                            </li><!-- /.menu-item -->

                            <!--                            <li class="dropdown menu-item">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-clock-o"></i>Lacticínios</a>
                                                            <ul class="dropdown-menu mega-menu">
                                                                <li class="yamm-content">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-12 col-lg-4">
                                                                            <ul>
                                                                                <li><a href="#">Leite</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div> /.row 
                                                                </li> /.yamm-content                     
                                                            </ul> /.dropdown-menu             
                                                        </li> /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Limpeza</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">  
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-30">Limpeza em Geral</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-31">Para Cozinha</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-32">Para Banheiro</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->            
                            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-heartbeat"></i>Bebês</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-33">Fraldas</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-34">Lenços Infantil</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-35">Alimentação Infantil</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-36">Shampoo Infantil</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->            
                            </li><!-- /.menu-item -->

                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Feira</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-37">Legumes</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-38">Verduras</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-39">Frutas</a></li>
                                                    <li><a href="<?= base_url(); ?>Produto/produtoPorCategoria/0-40">Temperos</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->
                                <!-- /.dropdown-menu -->           
                            </li><!-- /.menu-item -->
                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->
                <!-- ================================== TOP NAVIGATION : END ================================== -->
                <div class="sidebar-module-container">

                    <div class="sidebar-filter">

                        <div class="home-banner">
                            <img src="<?= base_url('assets/images/banners/krolow-ads-1.png'); ?>" alt="Image">
                        </div> 
                        <div class="home-banner">
                            <img src="<?= base_url('assets/images/banners/home-banner-left.png'); ?>" alt="Image">
                        </div> 
                        <div class="home-banner">
                            <img src="<?= base_url('assets/images/banners/home-banner-left.png'); ?>" alt="Image">
                        </div> 
                        <div class="home-banner">
                            <img src="<?= base_url('assets/images/banners/home-banner-left.png'); ?>" alt="Image">
                        </div> 
                        <div class="home-banner">
                            <img src="<?= base_url('assets/images/banners/home-banner-left.png'); ?>" alt="Image">
                        </div>   
                    </div><!-- /.sidebar-filter -->
                </div><!-- /.sidebar-module-container -->
            </div><!-- /.sidebar -->
            <div class='col-md-9'>

                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-6 col-md-3">
                            <div class="filter-tabs">
                                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                    <li class="active">
                                        <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grade</a>
                                    </li>
                                    <!--                                        <li>
                                                                                <a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>Lista</a>
                                                                            </li>-->
                                </ul>
                            </div><!-- /.filter-tabs -->
                        </div><!-- /.col -->
                        <div class="col col-sm-12 col-md-5">
                            <div class="col col-sm-3 col-md-6 no-padding">
                            </div><!-- /.col -->
                            <div class="col col-sm-3 col-md-6 no-padding">
                                <div class="lbl-cnt">
                                    <div class="fld inline">
                                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                        </div>
                                    </div><!-- /.fld -->
                                </div><!-- /.lbl-cnt -->
                            </div><!-- /.col -->
                        </div><!-- /.col -->
                        <div class="col col-sm-6 col-md-4 text-right">
                            <?php
                            if ($produto_tipo_produto_sub_id != '0') {
                                ?>
                                <div class="pagination-container">
                                    <ul class="list-inline list-unstyled">
                                        <li>
                                            <a href="<?= base_url('produto/produtoPorCategoria/' . ($value - $reg_p_pag) . "-" . $produto_tipo_produto_sub_id) ?>" aria-label="Anterior" style="<?= $btnA ?>">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <?php
                                        $n_pag = 1;
                                        for ($i = 1; $i <= $qtd_botoes; $i++) {
                                            ?>
                                            <li><a href="<?= base_url('produto/produtoPorCategoria/' . ($n_pag - 1) . "-" . $produto_tipo_produto_sub_id) ?>"><?= $i ?></a></li>
                                            <?php
                                            $n_pag += $reg_p_pag;
                                        }
                                        ?>
                                        <li>
                                            <a href="<?= base_url('produto/produtoPorCategoria/' . ($value + $reg_p_pag) . "-" . $produto_tipo_produto_sub_id) ?>" aria-label="Próximo" style="<?= $btnP ?>">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul><!-- /.list-inline -->
                                </div><!-- /.pagination-container -->

                            <?php } ?>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">									
                                    <?php foreach ($produto as $prod) { ?>
                                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                                            <div class="products">
                                                <div class="product">		
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="<?= base_url(); ?>produto/detalheProduto/<?= $prod->produto_id ?>"><img width="250" height="250"  src="<?= base_url(); ?>images/produto/<?= $prod->produto_foto; ?>" alt=""></a>
                                                        </div><!-- /.image -->			                      		   
                                                    </div><!-- /.product-image -->


                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="<?= base_url(); ?>produto/detalheProduto/<?= $prod->produto_id ?>"><?= substr($prod->produto_nome, 0, 22) ?></a></h3>
                                                        <div class="description"></div>

                                                        <div class="product-price">	
                                                            <span class="price"> R$ <?= number_format($prod->produto_preco_venda, 2); ?> </span>
                                                            <span class="price-before-discount"> R$ <?= number_format($prod->produto_preco_velho, 2); ?> </span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                    <div class="cart clearfix animate-effect">
                                                        <div class="action">
                                                            <ul class="list-unstyled">
                                                                <li class="add-cart-button btn-group">
                                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                        <i class="fa fa-shopping-cart"></i>													
                                                                    </button>
                                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                                </li>

                                                                <li class="lnk wishlist">
                                                                    <a class="add-to-cart" href="#" title="Wishlist">
                                                                        <i class="icon fa fa-heart"></i>
                                                                    </a>
                                                                </li>

                                                                <li class="lnk">
                                                                    <a class="add-to-cart" href="#" title="Compare">
                                                                        <i class="fa fa-signal"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.action -->
                                                    </div><!-- /.cart -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                    <?php } ?>
                                </div><!-- /.row -->
                            </div><!-- /.category-product -->
                        </div><!-- /.tab-pane -->

                        <div class="tab-pane "  id="list-container">
                            <div class="category-product">
                                <div class="category-product-inner wow fadeInUp">
                                    <div class="products">				
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-4">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="<?= base_url(); ?>produto/detalheProduto/<?= $prod->produto_id ?>"> <img width="200" height="220" src="<?= base_url(); ?>images/<?= $prod->produto_foto; ?>" alt=""></a>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-sm-8 col-lg-8">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="<?= base_url(); ?>produto/detalheProduto/<?= $prod->produto_id ?>"><?= substr($prod->produto_nome, 0, 22) ?></a></h3>
                                                        <div class="product-price">	
                                                            <span class="price">R$ <s><?= number_format($prod->produto_preco_venda, 2); ?></s></span>
                                                            <span class="price-before-discount">R$ <?= number_format($prod->produto_preco_velho, 2); ?></span>

                                                        </div><!-- /.product-price -->
                                                        <div class="description m-t-10"><?= $prod->produto_descricao ?></div>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                                    <li class="add-cart-button btn-group">
                                                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                                            <i class="fa fa-shopping-cart"></i>													
                                                                        </button>
                                                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                                    </li>
                                                                </ul>
                                                            </div><!-- /.action -->
                                                        </div><!-- /.cart -->

                                                    </div><!-- /.product-info -->	
                                                </div><!-- /.col -->
                                            </div><!-- /.product-list-row -->
                                        </div><!-- /.products -->
                                    </div><!-- /.category-product-inner -->
                                </div><!-- /.category-product -->
                            </div><!-- /.tab-pane #list-container -->
                        </div><!-- /.tab-content -->
                        <div class="clearfix filters-container">
                            <?php
                            if ($produto_tipo_produto_sub_id != '0') {
                                ?>
                                <div class="text-right">
                                    <div class="pagination-container">
                                        <ul class="list-inline list-unstyled">
                                            <li>
                                                <a href="<?= base_url('produto/produtoPorCategoria/' . ($value - $reg_p_pag) . "-" . $produto_tipo_produto_sub_id) ?>" aria-label="Anterior" style="<?= $btnA ?>">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <?php
                                            $n_pag = 1;
                                            for ($i = 1; $i <= $qtd_botoes; $i++) {
                                                ?>
                                                <li><a href="<?= base_url('produto/produtoPorCategoria/' . $n_pag . "-" . $produto_tipo_produto_sub_id) ?>"><?= $i ?></a></li>
                                                <?php
                                                $n_pag += $reg_p_pag;
                                            }
                                            ?>
                                            <li>
                                                <a href="<?= base_url('produto/produtoPorCategoria/' . ($value + $reg_p_pag) . "-" . $produto_tipo_produto_sub_id) ?>" aria-label="Próximo" style="<?= $btnP ?>">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul><!-- /.list-inline -->
                                    </div><!-- /.pagination-container -->
                                </div><!-- /.text-right -->

                            <?php } ?>

                        </div><!-- /.filters-container -->

                    </div><!-- /.search-result-container -->

                </div><!-- /.col -->

            </div><!-- /.row -->

        </div><!-- /.body-content -->
    </div>
</div>
