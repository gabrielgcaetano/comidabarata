<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li class='active'>Carrinho</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <form method="post" action="<?= base_url('produto/geraCupom') ?>">
                <div class="shopping-cart">
                    <?php
                    $total = 0;
                    $totalItens = 0;
                    ?>
                    <div class="shopping-cart-table ">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-romove item">Remove</th>
                                        <th class="cart-description item">Imagem</th>
                                        <th class="cart-product-name item">Produto Nome</th>
                                        <th class="cart-qty item">Quantidade</th>
                                        <th class="cart-sub-total item">Subtotal</th>
                                        <th class="cart-total last-item">Total</th>
                                    </tr>
                                </thead><!-- /thead -->
                                <tfoot>
                                    <tr>
                                        <td colspan="7">
                                            <div class="shopping-cart-btn">
                                                <span class="">
                                                    <a href="<?= base_url(); ?>" class="btn btn-upper btn-primary outer-left-xs">Continue Comprando</a>
                                                    <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Atualizar Carrinho</a>
                                                </span>
                                            </div><!-- /.shopping-cart-btn -->
                                        </td>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    foreach ($carrinho as $car) {
                                        $total = $total + ($car->transacao_produto_quantidade * $car->produto_preco_novo);
                                        $totalItens = $totalItens + $car->transacao_produto_quantidade;
                                    }
                                    ?>

                                    <?php foreach ($carrinho as $car) { ?>
                                        
                                   <input type="hidden" id="produto_id" name="produto_user_id" value="<?= $carrinho[0]->produto_user_id ?>">
                                        <tr>
                                            <td class="romove-item"><a href="<?= base_url(); ?>produto/removeItemCarrinho/<?= $car->transacao_id ?>" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="cart-image">
                                                <a class="entry-thumbnail" href="<?= base_url(); ?>produto/detalheProduto/<?= $car->produto_id ?>">
                                                    <img src="<?= base_url(); ?>images/produto/<?= $car->produto_foto; ?>" alt="">
                                                </a>
                                            </td>
                                            <td class="cart-product-name-info">
                                                <h4 class='cart-product-description'><a href="<?= base_url(); ?>produto/detalheProduto/<?= $car->produto_id ?>"><?= substr($car->produto_nome, 0, 22) ?></a></h4>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="rating rateit-small"></div>
                                                    </div>
                                                    <div class="col-sm-8">

                                                    </div>
                                                </div><!-- /.row -->
                                                <div class="cart-product-info">
                                                    <span class="product-color">Empresa:<span><?= $car->user_nome ?></span></span>
                                                </div>
                                            </td>

                                            <td class="cart-product-quantity">
                                                <div class="quant-input">
                                                    <div class="arrows">
                                                        <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                        <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                    </div>
                                                    <input type="text" value="<?= $car->transacao_produto_quantidade ?>">
                                                </div>
                                            </td>
                                            <td class="cart-product-sub-total"><span class="cart-sub-total-price"> R$ <?= number_format($car->produto_preco_novo , 2); ?> </span></td>
                                            <td class="cart-product-grand-total"><span class="cart-grand-total-price"> R$ <?= number_format(($car->transacao_produto_quantidade * $car->produto_preco_novo), 2); ?></span></td>
                                        </tr>
                                    <?php } ?>  
                                </tbody><!-- /tbody -->
                            </table><!-- /table -->
                        </div>
                    </div><!-- /.shopping-cart-table -->
                    <div class="col-md-4 col-sm-12 estimate-ship-tax">

                    </div><!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 estimate-ship-tax">

                    </div><!-- /.estimate-ship-tax -->

                    <div class="col-md-4 col-sm-12 cart-shopping-total">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            Subtotal<span class="inner-left-md">R$ <?= number_format($total, 2); ?> </span>
                                        </div>
                                        <div class="cart-grand-total">
                                            Total<span class="inner-left-md">R$ <?= number_format($total, 2); ?></span>
                                        </div>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                            <button type="submit"  class="btn btn-primary checkout-btn">GERAR CUPOM</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /table -->
                    </div><!-- /.cart-shopping-total -->
                </div><!-- /.shopping-cart -->
            </form>
        </div> <!-- /.row -->
    </div><!-- /.logo-slider -->
</div><!-- /.body-content -->