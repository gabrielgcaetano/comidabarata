<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="#"><?= $produto[0]->tipo_produto_sub_nome ?></a></li>
                <li class='active'><?= $produto[0]->produto_nome ?></li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-md-3 sidebar'>
                <div class="sidebar-module-container">
                    <div class="home-banner outer-top-n">
                        <?php
                        if (isset($produto[0]->user_foto) && $produto[0]->user_foto != "") {
                            ?>
                            <img src="<?= base_url() ?>images/empresa/<?= $produto[0]->user_foto; ?>" alt="Image">
                            <?php
                        } else {
                            ?>
                            <img src="<?= base_url() ?>images/empresa/empresa-sem-logo.png" alt="Image">
                            <?php
                        }
                        ?>
                    </div>		
                    <!-- ============================================== HOT DEALS ============================================== -->
                    <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
                        <h3 class="section-title">Destaques</h3>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
                            <?php foreach ($produto_destaque as $prodd) { ?>
                                <div class="item">
                                    <div class="products">
                                        <div class="hot-deal-wrapper">
                                            <div class="image">
                                                <img  src="<?= base_url(); ?>images/produto/<?= $prodd->produto_foto; ?>" alt="" width="250" height="250">
                                            </div>
                                        </div>
                                    </div><!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="<?= base_url(); ?>produto/detalheProduto/<?= $prodd->produto_id ?>"><?= substr($prodd->produto_nome, 0, 22) ?></a></h3>

                                        <div class="product-price">	
                                            <span class="price">R$ <?= number_format($prodd->produto_preco_venda, 2); ?></span>

                                            <span class="price-before-discount">R$ <?= number_format($prodd->produto_preco_velho, 2); ?></span>					

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">

                                            <div class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                    <i class="fa fa-shopping-cart"></i>													
                                                </button>
                                                <button class="btn btn-primary cart-btn" type="button">Adicione</button>

                                            </div>

                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div>	
                            <?php } ?>      		        
                        </div><!-- /.sidebar-widget -->
                    </div>
                    <!-- ============================================== HOT DEALS: END ============================================== -->					<!-- ============================================== 
                    
                    <!-- ============================================== NEWSLETTER ============================================== -->
                    <div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small outer-top-vs">
                        <h3 class="section-title">Newsletters</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <p>Sign Up for Our Newsletter!</p>
                            <form method="post" action="<?= base_url('user/newsletter') ?>">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="newsletter_email" name="newsletter_email" placeholder="Subscribe to our newsletter">
                                </div>
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div><!-- /.sidebar-widget-body -->
                    </div><!-- /.sidebar-widget -->
                    <!-- ============================================== NEWSLETTER: END ============================================== -->

                </div>
            </div><!-- /.sidebar -->
            <div class='col-md-9'>

                <div class="detail-block">
                    <div class="row  wow fadeInUp">
                        <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                            <div class="product-item-holder size-big single-product-gallery small-gallery">
                                <div id="owl-single-product">
                                    <div class="single-product-gallery-item" id="slide1">
                                        <a data-lightbox="image-1" data-title="<?= $produto[0]->produto_nome ?>" href="<?= base_url(); ?>images/<?= $produto[0]->produto_foto; ?>">
                                            <img class="img-responsive" alt="" height="350" width="350" src="<?= base_url(); ?>images/produto/<?= $produto[0]->produto_foto; ?>" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                </div><!-- /.single-product-slider -->
                            </div><!-- /.single-product-gallery -->
                        </div><!-- /.gallery-holder -->        			
                        <div class='col-sm-6 col-md-7 product-info-block'>
                            <div class="product-info">
                                <form method="post" action="<?= base_url('produto/carrinho') ?>"
                                      enctype="multipart/form-data">
                                    <h1 class="name"><?= $produto[0]->produto_nome ?></h1>
                                    <input type="hidden" id="produto_id" name="produto_id" value="<?= $produto[0]->produto_id ?>">
                                    <input type="hidden" id="produto_empresa_id" name="transacao_empresa_id" value="<?= $produto[0]->produto_user_id ?>">
                                    <div class="rating-reviews m-t-20">
                                    </div><!-- /.rating-reviews -->
                                    <div class="price-container info-container m-t-20">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="price-box">
                                                    <span class="price">R$ <?= number_format($produto[0]->produto_preco_venda, 2); ?></span>
                                                    <span class="price-strike">R$ <?= number_format($produto[0]->produto_preco_velho, 2); ?></span>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="favorite-button m-t-10">
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
                                                        <i class="fa fa-signal"></i>
                                                    </a>
                                                    <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </div>
                                            </div>

                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    <div class="quantity-container info-container">
                                        <div class="row">

                                            <div class="col-sm-2">
                                                <span class="label">Quant. :</span>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="cart-quantity">
                                                    <div class="quant-input">
                                                        <div class="arrows">
                                                            <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                            <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                        </div>
                                                        <input type="text" value="1" name="transacao_produto_quantidade" id="transacao_produto_quantidade">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-7">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> Adicionar ao Carrinho</button>
                                            </div>
                                        </div><!-- /.row -->
                                    </div><!-- /.quantity-container -->
                                </form>
                            </div><!-- /.product-info -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div>

                <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">Descrição</a></li>
                                <li class=""><a data-toggle="tab" href="#vendedor">Vendedor</a></li>
                                <li class=""><a data-toggle="tab" href="#denuncia">Denúncia</a></li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-9">
                            <div class="tab-content">
                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text"><?= $produto[0]->produto_descricao ?></p>
                                    </div>	
                                </div><!-- /.tab-pane -->
                                <div id="vendedor" class="tab-pane in">
                                    <div class="product-tab">
                                        <p class="text"><?= $produto[0]->user_nome ?></p>
                                    </div>	
                                </div><!-- /.tab-pane -->
                                <div id="denuncia" class="tab-pane in">
                                    <div class="product-tab">
                                        <form method="post" action="<?= base_url('insert') ?>"
                                              enctype="multipart/form-data">
                                            <input type="hidden" id="denuncia_produto_id" name="denuncia_produto_id" value="<?= $produto[0]->produto_id ?>">
                                            <input type="hidden" id="denuncia_user_id_empresa" name="denuncia_user_id_empresa" value="<?= $produto[0]->produto_user_id ?>">
                                            <div class="col-sm-12">
                                                <div class="col-sm-8">
                                                    <p>Título</p>
                                                    <input type="text" value="" name="denuncia_titulo" id="denuncia_titulo" placeholder="Digite titulo da mensagem ..." size="40">
                                                </div>
                                                <div class="col-sm-4">

                                                </div>
                                                
                                                <div class="col-sm-8">
                                                    <br>
                                                    <p>Mensagem</p>
                                                    <input type="text" value="" name="denuncia_descricao" id="denuncia_descricao" placeholder="Digite a mensagem aqui ..." size="40">
                                                    <br>
                                                    <br>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>	
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.product-tabs -->

                <!-- ============================================== UPSELL PRODUCTS ============================================== -->
                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Produtos do mesmo vendedor</h3>
                    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                        <?php foreach ($anunciosEmpresa as $aEmpresa) { ?>
                            <div class="item item-carousel">
                                <div class="products">
                                    <div class="product">		
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="<?= base_url(); ?>produto/detalheProduto/<?= $aEmpresa->produto_id ?>"><img  src="<?= base_url(); ?>images/produto/<?= $aEmpresa->produto_foto; ?>" alt="" width="250" height="250"></a>
                                            </div><!-- /.image -->			
                                        </div><!-- /.product-image -->
                                        <div class="product-info text-left">
                                            <h3 class="name"><a href="<?= base_url(); ?>produto/detalheProduto/<?= $aEmpresa->produto_id ?>"><?= substr($aEmpresa->produto_nome, 0, 22) ?></a></h3>
                                            <div class="description"></div>
                                            <div class="product-price">	
                                                <span class="price"> R$ <?= number_format($aEmpresa->produto_preco_venda, 2); ?> </span>
                                                <span class="price-before-discount"> R$ <?= number_format($aEmpresa->produto_preco_velho, 2); ?> </span>
                                            </div><!-- /.product-price -->
                                        </div><!-- /.product-info -->
                                    </div><!-- /.product -->
                                </div><!-- /.products -->
                            </div><!-- /.item -->
                        <?php } ?>
                    </div><!-- /.home-owl-carousel -->
                </section><!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div><!-- /.col -->
            <div class="clearfix"></div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.body-content -->