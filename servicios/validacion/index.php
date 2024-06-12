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
                        <h2 class="breadcrumb-title">Validación de XML</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                            <li class="breadcrumb-item active">Validación de XML</li>
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

                                    <h4 class="sidebar-widget-title">Validación</h4>

                                    <ul>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Es de vital importancia</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">verificar la validez de las facturas que recibimos es crucial para mantener la integridad y legalidad de nuestras transacciones comerciales. Esto no solo garantiza el cumplimiento fiscal, sino que también protege nuestra empresa de posibles problemas legales.</p>
                                        </li>
                                        <li>
                                            <a href="#" style="pointer-events: none;">En CDFInbox incluimos:</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">Un servicio de validación de XML al recibir facturas, para que desde el momento de su recepción, nuestros clientes sepan si el comprobante es válido y puedan tomar las acciones pertinentes lo antes posible. Esto les proporciona una mayor tranquilidad y eficiencia en su gestión de documentos fiscales.</p>
                                        </li>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Sin Costo Adicional:</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">Este servicio se ofrece sin costo adicional para nuestros clientes. Pueden verificar la autenticidad de las facturas de manera rápida y eficiente, optimizando procesos y mitigando riesgos financieros y administrativos. Además, está incluido en nuestra plataforma, lo que significa que los usuarios pueden acceder a él de manera instantánea y sin necesidad de pagar tarifas adicionales.</p>
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
                                            <p class="post-title" style="text-align: justify;">Al validar las facturas de forma automática, ayudamos a nuestros clientes a optimizar sus procesos administrativos, reduciendo el tiempo y los recursos necesarios para gestionar documentos fiscales.</p>
                                            <p class="post-title" style="text-align: justify;">Al detectar de manera temprana posibles irregularidades en las facturas recibidas, contribuimos a mitigar los riesgos financieros y legales asociados con la gestión de documentos fiscales.</p>
                                            <blockquote>
                                                <p class="p1" style="text-align: justify;"> Al proporcionar a nuestros clientes una herramienta confiable para verificar la autenticidad de las facturas, promovemos la transparencia y la confianza en sus relaciones comerciales con proveedores y autoridades fiscales.</p>
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
