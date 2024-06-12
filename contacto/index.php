<?php $ROOT_PATH = '/cfdinbox_publico'; ?>

<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">

<head>
    <?php include '../bin/metadatos.php'; ?>
    <?php include '../bin/css.php'; ?>

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->
    <?php include '../bin/encabezado.php'; ?>
    <!--====================  End of header area  ====================-->

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Contáctanos</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/cfdinbox/">Inicio</a></li>
                            <li class="breadcrumb-item active">Contáctanos</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-lg-6">
                            <div class="conact-us-wrap-one mb-30">
                                <h3 class="heading" style="text-align:left; font-size: 35px">Para más información, <br><span class="text-color-primary">Contáctanos</span> a través de este formulario o en nuestros medios de contacto. </h3>
                                <div class="sub-heading">Para obtener más información, por favor contáctenos a través de este formulario o utilizando nuestros medios de contacto.¡Nos comprometemos a responder lo más pronto posible.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">

                                <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                                <form id="contact-form" action="<?php echo $ROOT_PATH; ?>/assets/php/mail.php" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Nombre *" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Correo Electrónico *" required>
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_subject" type="text" placeholder="Asunto *" required>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Por favor describe lo que necesitas." required></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Enviar Mensaje</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--====================  Conact us info Start ====================-->
            <div class="contact-us-info-wrappaer section-space--pb_100">
                <div class="container">
                        <h5 class="heading mb-20">Morelia, Michoacán</h5>
                        <ul class="conact-info__list">
                            <li><?php echo $direccion; ?></li>
                            <li><a href="mailto:<?php echo $correoElectronico; ?>" class="hover-style-link text-black font-weight--bold"><?php echo $correoElectronico; ?></a></li>
                            <li><a href="tel:<?php echo $numeroTelefono; ?>" class="hover-style-link text-black font-weight--bold"><?php echo $numeroTelefono; ?></a></li>
                        </ul>
                </div>
            </div>
            <!--====================  Conact us info End  ====================-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120202.66378531628!2d-101.29534536018554!3d19.698431571932534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0ba2b29da7e3%3A0x4016978679c8620!2sMorelia%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1714574676821!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <!--========== Call to Action Area Start ============-->
            <?php include '../bin/banner_registro.php'; ?>
            <!--========== Call to Action Area End ============-->
        </div>
        <!--====================  footer area ====================-->
        <?php include '../bin/footer.php'; ?>
        <!--====================  End of footer area  ====================-->
    </div>

    <!--====================  menu mobile overlay ====================-->
    <?php include '../bin/encabezado_plegable.php'; ?>
    <!--====================  js ====================-->

    <?php include '../bin/js.php'; ?>
</body>

</html>