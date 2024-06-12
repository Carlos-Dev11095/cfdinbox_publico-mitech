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
                        <h2 class="breadcrumb-title">Almacenamiento</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                            <li class="breadcrumb-item active">Almacenamiento</li>
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

                                    <h4 class="sidebar-widget-title">Almacenamiento</h4>

                                    <ul>
                                        <li>
                                            <a href="#" style="pointer-events: none;"><?php echo $nombreProyecto; ?> es una solución integral</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;"><?php echo $nombreProyecto; ?> te asistirá en el cumplimiento de las normativas establecidas por el SAT, facilitando el almacenamiento de facturas emitidas y recibidas durante un periodo de 5 años, tal como lo requieren las regulaciones fiscales.</p>
                                        </li>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Por medio de nuestra plataforma</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">Usted podrá enviar los comprobantes a sus clientes, cosa que es de vital importancia, sin embargo, también debe cuidar esos comprobantes para responder ante cualquier auditoria por parte del SAT, con <?php echo $nombreProyecto; ?> podrá descargar, imprimir o enviar por correo los comprobantes en el momento que lo necesite.</p>
                                        </li>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Nuestra solución de almacenamiento</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">Esta diseñada bajo altos estándares de seguridad de datos, como es la encriptacion de datos en diferentes niveles de servicio, servicio de comunicación de datos encriptados sobre protocolos de seguridad avalados por estándares internacionales, adicionalmente contamos con planes de recuperación de datos de alto nivel, con la finalidad de no perder su información y tenga la satisfacción que sus facturas están en buenas manos.</p>
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
                                            <p class="post-title" style="text-align: justify;">Con <?php echo $nombreProyecto; ?>, puedes descargar, imprimir o enviar por correo los comprobantes en cualquier momento que lo necesites, asegurando que siempre estén a tu disposición.</p>
                                            <p class="post-title" style="text-align: justify;">Nuestra plataforma te permite gestionar tus comprobantes de manera eficiente. Puedes enviar los comprobantes a tus clientes con facilidad, lo que es crucial para mantener una buena relación comercial.</p>
                                            <blockquote>
                                                <p class="p1" style="text-align: justify;"> Nuestro sistema garantiza la seguridad de tus datos mediante la encriptación en múltiples niveles, comunicación segura respaldada por estándares internacionales y planes de recuperación de datos de alto nivel, brindándote la tranquilidad de que tu información está protegida y accesible en todo momento.</p>
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
