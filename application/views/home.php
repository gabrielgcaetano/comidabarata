<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    /*Esconde a dive de classe Overlay caso seja identificado que o width Mobile maximo deseja igual ou menor que 980px*/
    @media only screen and (max-width: 980px){
        .overlay { display: none; }
    }
</style>

<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->	
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar overlay">

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


                <!-- ============================================== PRODUCT TAGS ============================================== -->
                <div class="sidebar-widget product-tag wow fadeInUp">
                    <h3 class="section-title">Produtos tags</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="tag-list">					
                            <a class="item" title="Phone" href="#">Açucar</a>
                            <a class="item active" title="Vest" href="#">Arroz</a>
                            <a class="item" title="Smartphone" href="#">Bolacha</a>
                            <a class="item" title="Furniture" href="#">Fejão</a>
                            <a class="item" title="T-shirt" href="#">Massa</a>
                            <a class="item" title="Sweatpants" href="#">Biscoito</a>
                            <a class="item" title="Sneaker" href="#">Oleo</a>
                            <a class="item" title="Toys" href="#">Tempero</a>
                            <a class="item" title="Rose" href="#">Ração</a>
                        </div><!-- /.tag-list -->
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== PRODUCT TAGS : END ============================================== -->

                <!-- ============================================== NEWSLETTER ============================================== -->
                <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
                    <h3 class="section-title">Newsletters</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <p>Assine e receba ofertas por email!</p>
                        <form method="post" action="<?= base_url('user/newsletter') ?>">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="newsletter_email" name="newsletter_email" placeholder="Coloque seu E-mail">
                            </div>
                            <button type="submit" class="btn btn-primary">Inscreva-se</button>
                        </form>
                    </div><!-- /.sidebar-widget-body -->
                </div><!-- /.sidebar-widget -->
                <!-- ============================================== NEWSLETTER: END ============================================== -->

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


            </div><!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->
                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="item" style="background-image: url(<?= base_url('assets/images/banners/banner_super-ofertas.png'); ?>">

                        </div><!-- /.item -->

                    </div><!-- /.owl-carousel -->
                </div>
                <!-- ========================================= SECTION – HERO : END ========================================= -->	

                <!-- ============================================== Ultimos Anúncios TABS ============================================== -->
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Ultimos Anúncios</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">Todas Categorias</a></li>
                        </ul><!-- /.nav-tabs -->
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">			
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                    <?php foreach ($produto as $prod) { ?>
                                        <div class="item item-carousel">
                                            <div class="products">

                                                <div class="product">		
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="<?= base_url(); ?>produto/detalheProduto/<?= $prod->produto_id ?>"><img width="200" height="220"  src="<?= base_url(); ?>images/produto/<?= $prod->produto_foto; ?>" alt=""></a>
                                                        </div><!-- /.image -->			                       		   
                                                    </div><!-- /.product-image -->

                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="<?= base_url(); ?>produto/detalheProduto/<?= $prod->produto_id ?>"><?= substr($prod->produto_nome, 0, 22) ?></a></h3>
                                                        <div class="description"></div>

                                                        <div class="product-price">	
                                                            <span class="price">
                                                                R$ <?= number_format($prod->produto_preco_venda, 2); ?></span>
                                                            <span class="price-before-discount">R$ <?= number_format($prod->produto_preco_velho, 2); ?></span>

                                                        </div><!-- /.product-price -->

                                                    </div><!-- /.product-info -->
                                                </div><!-- /.product -->

                                            </div><!-- /.products -->
                                        </div><!-- /.item -->
                                    <?php } ?>
                                </div><!-- /.home-owl-carousel -->
                            </div><!-- /.product-slider -->
                        </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->
                </div><!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->

                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section wow fadeInUp new-arriavls">
                    <h3 class="section-title">Ofertas do Dia</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <?php foreach ($produto_destaque as $prodd) { ?>
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">		
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="<?= base_url(); ?>produto/detalheProduto/<?= $prodd->produto_id ?>"><img width="250" height="250" src="<?= base_url(); ?>images/produto/<?= $prodd->produto_foto; ?>" alt=""></a>
                                            </div><!-- /.image -->			
                                        </div><!-- /.product-image -->
                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="<?= base_url(); ?>produto/detalheProduto/<?= $prodd->produto_id ?>"><?= substr($prodd->produto_nome, 0, 22) ?></a></h3>
                                            <div class="description"></div>

                                            <div class="product-price">	
                                                <span class="price">
                                                    R$ <?= number_format($prodd->produto_preco_venda, 2); ?>				</span>
                                                <span class="price-before-discount">R$ <?= number_format($prodd->produto_preco_velho, 2); ?></span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->
                        <?php } ?>
                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
                <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->
                <div class="wide-banners wow fadeInUp outer-bottom-xs">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="wide-banner cnt-strip">
                                <div class="image">
                                    <img class="img-responsive" src="assets/images/banners/home-banner.jpg" alt="">
                                </div>	
                            </div><!-- /.wide-banner -->
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.wide-banners -->
                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

                <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                <section class="section wow fadeInUp new-arriavls">
                    <h3 class="section-title">Ofertas de Sustentabilidade</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                        <?php foreach ($produto_validade as $prod_val) { ?>
                            <div class="item item-carousel">
                                <div class="products">

                                    <div class="product">		
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="<?= base_url(); ?>produto/detalheProduto/<?= $prod_val->produto_id ?>"><img width="250" height="250" src="<?= base_url(); ?>images/produto/<?= $prod_val->produto_foto; ?>" alt=""></a>
                                            </div><!-- /.image -->			
                                        </div><!-- /.product-image -->


                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="<?= base_url(); ?>produto/detalheProduto/<?= $prod_val->produto_id ?>"><?= substr($prod_val->produto_nome, 0, 22) ?></a></h3>
                                            <div class="description"></div>
                                            <div class="product-price">	
                                                <span class="price">
                                                    R$ <?= number_format($prod_val->produto_preco_venda, 2); ?>				</span>
                                                <span class="price-before-discount">R$ <?= number_format($prod_val->produto_preco_velho, 2); ?></span>

                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </div><!-- /.item -->
                        <?php } ?>

                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
            </div><!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div><!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <div class="logo-slider-inner" style="margin-top: 100px;">	
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">

                </div> 
            </div> 

        </div> 
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->