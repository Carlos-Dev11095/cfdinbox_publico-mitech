<?php $ROOT_PATH = '/cfdinbox_publico'; ?>

<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">

<head>
    <?php include '../bin/metadatos.php'; ?>

    <!-- CSS
        ============================================ -->
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
                        <h2 class="breadcrumb-title">Servicios</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                            <li class="breadcrumb-item active">Servicios</li>
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
            <!--====================   Blog Area Start ====================-->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 order-lg-2 order-1">
                            <div class="section-title-wrap text-center section-space--mb_60">
                                <h3 class="heading">Nuestros servicios<span class="text-color-primary"> que ofrecemos</span></h3>
                            </div>
                            <div class="main-blog-wrap">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item post-list-wrapper xs-list-blog-item border-bottom wow move-up">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <!-- Post Feature Start -->
                                            <div class="post-feature blog-thumbnail">
                                                <a href="<?php echo $ROOT_PATH; ?>/servicios/facturacion_electronica/">
                                                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-01-540x330.jpg" alt="Blog Images">
                                                </a>
                                            </div>
                                            <!-- Post Feature End -->
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Post info Start -->
                                            <div class="post-info lg-blog-post-info">
                                                <h4 class="post-title">
                                                    <a href="<?php echo $ROOT_PATH; ?>/servicios/facturacion_electronica/">Facturación Electrónica</a>
                                                </h4>

                                                <div class="post-excerpt mt-15">
                                                    <p style="text-align: justify; font-size: 18px">Emite los tipos de comprobantes más usados como son las facturas electronicas 4.0 y 3.3, recibos de honorarios, recibos de arrendamiento, donatarias, servicios parciales de contruccion, recibo electronico de pago, INE, notarios publicos, entre otros.</p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-book"></i> Factura electronica CFDI 4.0 y 3.3 </p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-book"></i> Recibo de nómina, honorarios, etc... </p>
                                                </div>


                                                <div class="read-post-share-wrap mt-30">
                                                    <div class="post-read-more">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/facturacion_electronica/" class="ht-btn ht-btn-md">Leer Más </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post info End -->
                                        </div>
                                    </div>
                                </div>
                                <!--===== Single Blog Item End =========-->

                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item post-list-wrapper xs-list-blog-item border-bottom wow move-up">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <!-- Post Feature Start -->
                                            <div class="post-feature blog-thumbnail">
                                                <a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_de_nomina/">
                                                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-08-540x330.jpeg" alt="Blog Images">
                                                </a>
                                            </div>
                                            <!-- Post Feature End -->
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Post info Start -->
                                            <div class="post-info lg-blog-post-info">
                                                <h4 class="post-title">
                                                    <a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_de_nomina/">Timbrado de Nómina</a>
                                                </h4>
                                                <div class="post-excerpt mt-15">
                                                    <p style="text-align: justify; font-size: 18px">Contamos con la última versión de nómina, donde con la primer nómina, la información de los empleados quedará almacenada para un un futuro para solo solo mandarlas timbrar.</p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-calculator"></i> Con <?php echo $nombreProyecto; ?> podrás generar la nómina de tus empleados en segundos</p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-calculator"></i> <?php echo $nombreProyecto; ?> permite llevar a cabo la administración de sus empleados y su nómina</p>
                                                </div>


                                                <div class="read-post-share-wrap mt-30">
                                                    <div class="post-read-more">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_de_nomina/" class="ht-btn ht-btn-md">Leer Más </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post info End -->
                                        </div>
                                    </div>
                                </div>
                                <!--===== Single Blog Item End =========-->

                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item post-list-wrapper xs-list-blog-item border-bottom wow move-up">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <!-- Post Feature Start -->
                                            <div class="post-feature blog-thumbnail">
                                                <a href="<?php echo $ROOT_PATH; ?>/servicios/almacenamiento/">
                                                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-07-540x330.jpg" alt="Blog Images">
                                                </a>
                                            </div>
                                            <!-- Post Feature End -->
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Post info Start -->
                                            <div class="post-info lg-blog-post-info">
                                                <h4 class="post-title">
                                                    <a href="<?php echo $ROOT_PATH; ?>/servicios/almacenamiento/">Almacenamiento</a>
                                                </h4>
                                                <div class="post-excerpt mt-15">
                                                    <p style="text-align: justify; font-size: 18px">No te preocupes por tus comprobantes emitidos y recibidos, nosotros los almacenamos durante 5 años, tal como lo exige el SAT. Solo necesitas contar con tu cuenta activa con alguno de nuestros planes .</p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-save"></i> <?php echo $nombreProyecto; ?> le ayudará a cumplir con las normas que el SAT establece</p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-save"></i> Por medio de nuestra plataforma usted podrá enviar los comprobantes a sus clientes</p>
                                                </div>
                                                <div class="read-post-share-wrap mt-30">
                                                    <div class="post-read-more">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/almacenamiento/" class="ht-btn ht-btn-md">Leer Más </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post info End -->
                                        </div>
                                    </div>
                                </div>
                                <!--===== Single Blog Item End =========-->

                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item post-list-wrapper xs-list-blog-item border-bottom wow move-up">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <!-- Post Feature Start -->
                                            <div class="post-feature blog-thumbnail">
                                                <a href="<?php echo $ROOT_PATH; ?>/servicios/validacion/">
                                                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-02-540x330.webp" alt="Blog Images">
                                                </a>
                                            </div>
                                            <!-- Post Feature End -->
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Post info Start -->
                                            <div class="post-info lg-blog-post-info">
                                                <h4 class="post-title">
                                                    <a href="<?php echo $ROOT_PATH; ?>/servicios/validacion/">Validación</a>
                                                </h4>

                                                <div class="post-excerpt mt-15">
                                                    <p style="text-align: justify; font-size: 18px">Nos aseguramos que los XML que recibes sean válidos ante el SAT desde el momento en que son importados al sistema.</p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-clipboard-check"></i> Es de vital importancia saber si las facturas que recibimos de nuestros clientes son válidas</p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-clipboard-check"></i> En CDFINBOX incluimos el servicio de validación de XML al recibir facturas</p>
                                                </div>


                                                <div class="read-post-share-wrap mt-30">
                                                    <div class="post-read-more">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/validacion/" class="ht-btn ht-btn-md">Leer Más </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post info End -->
                                        </div>
                                    </div>
                                </div>
                                <!--===== Single Blog Item End =========-->

                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item post-list-wrapper xs-list-blog-item border-bottom wow move-up">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <!-- Post Feature Start -->
                                            <div class="post-feature blog-thumbnail">
                                                <a href="<?php echo $ROOT_PATH; ?>/servicios/administracion_de_xml/">
                                                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-07-540x330.webp" alt="Blog Images">
                                                </a>
                                            </div>
                                            <!-- Post Feature End -->
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Post info Start -->
                                            <div class="post-info lg-blog-post-info">
                                                <h4 class="post-title">
                                                    <a href="<?php echo $ROOT_PATH; ?>/servicios/administracion_de_xml/">Administración de XML</a>
                                                </h4>

                                                <div class="post-excerpt mt-15">
                                                    <p style="text-align: justify; font-size: 18px">Algunas de las acciones que <?php echo $nombreProyecto; ?> permite realizar son: </p>
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-file"></i> Enviar por correo al generar la factura
                                                    <p style="text-align: justify; font-size: 18px"><i class="fas fa-file"></i> Generar plantillas para facturar de forma mas rápida</p>
                                                </div>


                                                <div class="read-post-share-wrap mt-30">
                                                    <div class="post-read-more">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/administracion_de_xml/" class="ht-btn ht-btn-md">Leer Más </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post info End -->
                                        </div>
                                    </div>
                                </div>
                                <!--===== Single Blog Item End =========-->

                                <div class="ht-pagination mt-30 pagination justify-content-center">
                                    <div class="pagination-wrapper">
                                        <ul class="page-pagination">
                                            <li><a class="prev page-numbers" href="#">Anterior</a></li>
                                            <li><a class="page-numbers current" href="#">1</a></li>
                                            <li><a class="page-numbers" href="#">2</a></li>
                                            <li><a class="next page-numbers" href="#">Siguiente</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Blog Area End  ====================-->
            <!--========== Call to Action Area Start ============-->
            <?php include '../bin/banner_registro.php'; ?>
            <!--========== Call to Action Area End ============-->
        </div>
        <!--====================  footer area ====================-->
        <?php include '../bin/footer.php'; ?>
        <!--====================  End of footer area  ====================-->
    </div>
    <!-- Start Toolbar -->
    <div class="demo-option-container">
        <!-- Start Toolbar -->
        <div class="aeroland__toolbar">
            <div class="inner">
                <a class="quick-option hint--bounce hint--left hint--black primary-color-hover-important" href="#" aria-label="Quick Options">
                    <i class="fas fa-project-diagram"></i>
                </a>
                <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://hasthemes.com/contact-us/" aria-label="Support Center">
                    <i class="far fa-life-ring"></i>
                </a>
                <a class="hint--bounce hint--left hint--black primary-color-hover-important" target="_blank" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&subId2=mitech-preview&subId3=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource&u=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource" aria-label="Purchase Mitech">
                    <i class="fas fa-shopping-cart"></i>
                </a>
            </div>
        </div>
        <!-- End Toolbar -->
        <!-- Start Quick Link -->
        <div class="demo-option-wrapper">
            <div class="demo-panel-header">
                <div class="title">
                    <h6 class="heading mt-30">IT Solutions Mitech - Technology, IT Solutions & Services Html5 Template</h6>
                </div>

                <div class="panel-btn mt-20">
                    <a class="ht-btn ht-btn-md" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&subId2=mitech-preview&subId3=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource&u=https%3A%2F%2Fthemeforest.net%2Fcart%2Fconfigure_before_adding%2F24906742%3Flicense%3Dregular%26size%3Dsource"><i class="fa fa-shopping-cart me-2"></i> Buy Now </a>
                </div>
            </div>
            <div class="demo-quick-option-list">
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-appointment.html" aria-label="Appointment">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/home-01.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-infotechno.html" aria-label="Infotechno">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/home-02.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-processing.html" aria-label="Processing">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/home-03.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-services.html" aria-label="Services">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/home-04.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-resolutions.html" aria-label="Resolutions">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/home-05.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-cybersecurity.html" aria-label="Cybersecurity">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/home-06.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-modern-it-company.html" aria-label="Modern IT Company">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/modern-it-company.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-machine-learning.html" aria-label="Machine Learning">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/machine-learning.webp" alt="Images">
                </a>
                <a class="link hint--bounce hint--black hint--top hint--dark" href="index-software-innovation.html" aria-label="Software Innovation">
                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/demo-images/software-innovation.webp" alt="Images">
                </a>
            </div>
        </div>
        <!-- End Quick Link -->
    </div>
    <!-- End Toolbar -->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    <!--====================  mobile menu overlay ====================-->
    <?php include '../bin/encabezado_plegable.php'; ?>
    <!--====================  End of search overlay  ====================-->
    <?php include '../bin/js.php'; ?>
    <!-- JS
    ============================================ -->
</body>

</html>
