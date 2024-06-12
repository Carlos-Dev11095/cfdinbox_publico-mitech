<?php $ROOT_PATH = '/cfdinbox_publico'; ?>

<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">

<head>
    <?php include '../../bin/metadatos.php'; ?>
    <!-- CSS============================================ -->
    <?php include '../../bin/css.php'; ?>
    <!-- CSS -->

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
    <?php include '../../bin/encabezado.php'; ?>
    <!--====================  End of header area  ====================-->

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Tibrado Masivo e Integración</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                            <li class="breadcrumb-item active">Tibrado Masivo e Integración</li>
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

            <!--====================  Blog Area Start ====================-->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 order-lg-1 order-2">
                            <div class="page-sidebar-content-wrapper page-sidebar-left  small-mt__40 tablet-mt__40">

                                <!--=== Sidebar Widget Start ===-->
                                <div class="sidebar-widget search-post wow move-up">
                                    <div class="widget-title">
                                        <h6 class="sidebar-widget-title">Servicio</h6>
                                    </div>
                                </div>
                                <!--=== Sidebar Widget End ===-->

                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-blog-recent-post wow move-up">

                                    <h4 class="sidebar-widget-title">Tibrado Masivo e Integración</h4>

                                    <ul>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Simplificados con <?php echo $nombreProyecto; ?></a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">Si ya cuentas con un sistema propio que gestiona todas las reglas de negocio de tu empresa y solo necesitas la capacidad de timbrar, nuestro servicio de timbrado está diseñado para ti. También puedes utilizar <?php echo $nombreProyecto; ?> para timbrar facturas masivas.</p>
                                        </li>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Para comenzar</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">simplemente regístrate en <?php echo $nombreProyecto; ?> y utiliza nuestras API web para realizar las llamadas necesarias a nuestros servicios. Luego, gestiona el retorno de la llamada de acuerdo a tus necesidades internas.</p>
                                        </li>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Si deseas ejemplos en diferentes lenguajes de programación</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">descarga nuestro kit de pruebas desde el siguiente enlace. En caso de tener alguna duda, no dudes en ponerte en contacto con nosotros a través del chat para recibir asistencia personalizada. Estamos aquí para ayudarte en cada paso del proceso.</p>
                                        </li>
                                    </ul>


                                </div>
                                <!-- === Sidebar Widget End === -->

                            </div>
                        </div>
                        <div class="col-lg-8 order-lg-2 order-1">
                            <div class="main-blog-wrap">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item">
                                    <!-- Post Feature Start -->
                                    <div class="post-feature blog-thumbnail wow move-up">
                                        <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-02-770x400.webp" alt="Blog Images">
                                    </div>
                                    <!-- Post Feature End -->

                                    <!-- Post info Start -->
                                    <div class="post-info lg-blog-post-info  wow move-up">
                                        <div class="post-excerpt mt-15">
                                            <p class="post-title" style="text-align: justify;">Con el servicio de Timbrado Masivo de <?php echo $nombreProyecto; ?>, puedes realizar el timbrado de manera rápida y sencilla, sin la necesidad de desarrollar una infraestructura adicional.</p>
                                            <p class="post-title" style="text-align: justify;">Nuestro equipo está disponible para brindarte asistencia personalizada en cada paso del proceso, asegurando una integración fluida y exitosa.</p>
                                            <blockquote>
                                                <p class="p1" style="text-align: justify;">Para aquellas empresas que buscan una solución completa que simplifique el proceso de timbrado y gestión de facturas, <?php echo $nombreProyecto; ?> ofrece su servicio de Integración Simplificada. Con este servicio, puedes integrar fácilmente las capacidades de timbrado de <?php echo $nombreProyecto; ?> en tu sistema existente.</p>
                                            </blockquote>
                                        </div>

                                    </div>
                                    <!-- Post info End -->
                                </div>
                                <!--===== Single Blog Item End =========-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Blog Area End  ====================-->
             <!--========== Call to Action Area Start ============-->
             <?php include '../../bin/banner_registro.php'; ?>
            <!--========== Call to Action Area End ============-->
        </div>
        <!--====================  menu mobile  ====================-->
        <?php include '../../bin/encabezado_plegable.php'; ?>
        <!--====================  footer area ====================-->
        <?php include '../../bin/footer.php'; ?>
        <!--====================  End of footer area  ====================-->
    </div>
    <!-- JS============================================ -->
    <?php include '../../bin/js.php'; ?>
    <!--=========================================== -->
</body>

</html>
