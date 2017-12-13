<section id="container" >
    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

            <div class="row">
                <div class="col-lg-11 main-chart">
                    <form class="register-form" role="form" method="post" action="<?= base_url('User/updateUserNivel') ?>"
                          enctype="multipart/form-data">
                        <input type="hidden" id="user_id" name="user_id" value="<?= $user[0]->user_id ?>">
                        <div class="form-group">
                            <label class="info-title" for="user_email"> Email <span>*</span></label>
                            <input type="email" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_email ?>" id="user_email" name="user_email" placeholder="" disabled>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="user_nome"> Nome <span>*</span></label>
                            <input type="text" class="form-control unicase-form-control text-input" value="<?= $user[0]->user_nome ?>" id="user_nome" name="user_nome" placeholder="" disabled>
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="user_tipo_user_id"> Nivel Usuário <span>*</span></label>
                            <select class="form-control" id="user_tipo_user_id" name="user_tipo_user_id" >
                                <?php foreach ($user_tipo as $ut) { ?>  
                                    <?php if ($user[0]->user_tipo_user_id == $ut->user_tipo_id) { ?>
                                        <option  selected value="<?= $ut->user_tipo_id; ?>">  <?= $ut->user_tipo_id; ?> - <?= $ut->user_tipo_nome; ?>  </option>
                                    <?php } else { ?>
                                        <option value="<?= $ut->user_tipo_id; ?>">  <?= $ut->user_tipo_id; ?> - <?= $ut->user_tipo_nome; ?>  </option>
                                    <?php } ?>

                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Salvar</button>
                    </form>

                </div><!-- /col-lg-3 -->
            </div>
        </section>
    </section>
</section>