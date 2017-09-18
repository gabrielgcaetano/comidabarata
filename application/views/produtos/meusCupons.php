<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li class='active'>Meus Cupons</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="checkout-box faq-page">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading-title">Meus Cupons Ativos</h2>
                    <span class="title-tag">Anote o número do seu cupom e informe no caixa do estbelecimento participante e garanta o seu desconto.</span>
                    <div class="panel-group checkout-steps" id="accordion">

                        <?php foreach ($cupom as $c) { ?>

                            <div class="panel panel-default checkout-step-01">

                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <h4 class="unicase-checkout-title">
                                        <a data-toggle="collapse" class="" data-parent="#accordion" href="">
                                            <span><?= $c->cupom_token ?></span> Cupom Gerado ( <?= date('d/m/Y h:m:s', strtotime($c->cupom_data));        ?> )
                                        </a>
                                    </h4>
                                </div>
                                <!-- panel-heading -->

                                <div id="" class="panel-collapse collapse in">
                                    <!-- panel-body  -->
                                    <div class="panel-body">

                                        <table class="table table-responsive table-verde">                    
                                            <thead>
                                                <tr>
                                                    <th><p class="" style="margin-left: 40px;">Imagem</p></th>
                                                    <th><p class="text-left">Produto</p></th>
                                                    <th><p class="text-center">Quantidade</p></th>
                                                    <th><p class="text-center">Preço Unitário</p></th>
                                                    <th><p class="text-center">Preço Total</p></th>
                                                    <th><p class="text-center">Valor Economizado</p></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>    
                                                <!-- Busca todos os dados que tem no banco atravez da controler -->
                                                <?php
                                                foreach ($itensCupom as $item) {
                                                    if ($c->cupom_token == $item->transacao_token) {
                                                        ?>
                                                        <tr>
                                                            <td><p class="centered"><a href="#"><img src="<?= base_url(); ?>images/produto/<?= $item->produto_foto; ?>" class="img-responsive" width="80"></a></p></td>
                                                            <td><br><br><p class="text-left"> <?= $item->produto_nome; ?> </p></td>
                                                            <td><br><br><p class="text-center"> <?= $item->transacao_produto_quantidade; ?> </p></td>
                                                            <td>
                                                                <ul><p><s><?= number_format($item->produto_preco_velho, 2); ?> </s></p></ul>
                                                                <ul><p><?= number_format($item->produto_preco_novo, 2); ?></p></ul>
                                                            <td><br><br><p class="text-center"> <?= number_format(($item->transacao_produto_quantidade * $item->produto_preco_novo), 2); ?> </p></td>
                                                            <td><br><br><p class="text-center"><?= number_format(($item->transacao_produto_quantidade * $item->produto_preco_velho) - (($item->transacao_produto_quantidade * $item->produto_preco_novo)), 2); ?> </p></td>
                                                        </tr>    
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- panel-body  -->
                                </div><!-- row -->
                            </div>
                        <p style="margin-top: 100px;"/>
                        <?php } ?>  
                    </div><!-- /.checkout-steps -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.checkout-box -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <div id="brands-carousel" class="logo-slider wow fadeInUp">

            <div class="logo-slider-inner">	
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->

                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->

        </div><!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
