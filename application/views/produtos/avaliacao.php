<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="#"><?= $itensCupom[0]->tipo_produto_sub_nome ?></a></li>
                <li class='active'><?= $itensCupom[0]->produto_nome ?></li>
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
                                        <a data-lightbox="image-1" data-title="<?= $itensCupom[0]->produto_nome ?>" href="<?= base_url(); ?>images/<?= $itensCupom[0]->produto_foto; ?>">
                                            <img class="img-responsive" alt="" height="350" width="350" src="<?= base_url(); ?>images/produto/<?= $itensCupom[0]->produto_foto; ?>" />
                                        </a>
                                    </div><!-- /.single-product-gallery-item -->
                                </div><!-- /.single-product-slider -->
                            </div><!-- /.single-product-gallery -->
                        </div><!-- /.gallery-holder -->        			
                        <div class='col-sm-6 col-md-7 product-info-block'>
                            <div class="product-info">
                                <h1 class="name"><?= $itensCupom[0]->produto_nome ?></h1>
                                <div class="price-container info-container m-t-20">
                                    <div class="row">
                                        <h3>Descrição</h3>
                                        <br/>
                                        <?= $itensCupom[0]->produto_descricao ?>

                                    </div><!-- /.row -->
                                </div><!-- /.price-container -->
                                <div class="price-container info-container m-t-20">
                                    <div class="row">
                                        <h3>Empresa</h3>
                                        <br/>
                                        <?= $itensCupom[0]->user_nome ?>

                                    </div><!-- /.row -->
                                </div><!-- /.price-container -->
                            </div><!-- /.product-info -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div>

                <div class="product-tabs inner-bottom-xs  wow fadeInUp" style="height:500px">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="tab-content">
                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <div class='col-sm-12 col-md-12 product-info-block'>
                                            <div class="product-info">
                                                <form method="post" action="<?= base_url('produto/avaliarUpdate') ?>"
                                                      enctype="multipart/form-data">
                                                    <input type="hidden" id="transacao_id" name="transacao_id" value="<?= $itensCupom[0]->transacao_id; ?>">
                                                    <h1>Avaliação</h1>
                                                    <span>Considerando a nota 1 Péssimo e 10 Ótimo preencha o formulário a seguir. </span>
                                                    <div class="quantity-container info-container">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <span class="label">Qualidade do Produto</span>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="cart-quantity">
                                                                    <div class="quant-input">
                                                                        <select class="form-control" id="transacao_avaliacao_produto" name="transacao_avaliacao_produto">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.row -->
                                                    </div><!-- /.quantity-container -->
                                                    <div class="quantity-container info-container">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <span class="label">Atendimento no estabelecimento do produto</span>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="cart-quantity">
                                                                    <div class="quant-input">
                                                                        <select class="form-control" id="transacao_avaliacao_empresa" name="transacao_avaliacao_empresa">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.row -->
                                                    </div><!-- /.quantity-container -->
                                                    <div class="quantity-container info-container">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <span class="label">Qual as chances de você recomendar o ComidaBarata a alguém que você conhece?</span>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="cart-quantity">
                                                                    <div class="quant-input">
                                                                        <select class="form-control" id="transacao_avaliacao_site" name="transacao_avaliacao_site">
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                        </select>    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.row -->
                                                    </div><!-- /.quantity-container -->
                                                    <div class="col-sm-7">
                                                        <button type="submit" class="btn btn-primary"><i class="inner-left-xs btn btn-lg"></i> Enviar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>	
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.product-tabs -->
            </div><!-- /.col -->
            <div class="clearfix"></div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.body-content -->