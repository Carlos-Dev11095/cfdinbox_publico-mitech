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
                        <h2 class="breadcrumb-title">Timbrado de Nómina</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                            <li class="breadcrumb-item active">Timbrado de Nómina</li>
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

                                    <h4 class="sidebar-widget-title">Timbrado de Nómina</h4>

                                    <ul>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Con <?php echo $nombreProyecto; ?></a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">Podrás generar la nómina de tus empleados en segundos, con la implementación de herramientas que permiten realizar este proceso en segundos.</p>
                                        </li>
                                        <li>
                                            <a href="#" style="pointer-events: none;"><?php echo $nombreProyecto; ?> permite</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">Llevar a cabo la administración de sus empleados y su nómina, generando un catalogo de administración de empleados, esta herramienta facilita la emisión de los recibos de nómina guardando las percepciones, deducciones, por lo que los cálculos no se tienen que realizar cada que emita una nomina.</p>
                                        </li>
                                        <li>
                                            <a href="#" style="pointer-events: none;">Todas estas funciones están disponibles</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify;">En nuestra pagina web, no es necesario descargar ninguna herramienta de Internet, de esta forma aseguramos la seguridad de los datos de su empresa y sus trabajadores.</p>
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
                                            <p class="post-title" style="text-align: justify;">El timbrado de nómina es un proceso crucial en la gestión empresarial, especialmente en lo que respecta al cumplimiento de obligaciones fiscales y laborales. Con <?php echo $nombreProyecto; ?>, esta tarea se simplifica considerablemente, ofreciendo una solución eficiente y segura para la generación de recibos de nómina.</p>
                                            <blockquote>
                                                <p class="p1" style="text-align: justify;">Al tener todas estas funciones disponibles en la página web de <?php echo $nombreProyecto; ?>, se simplifica aún más el proceso para los usuarios, ya que pueden acceder a la plataforma desde cualquier lugar con conexión a internet, sin necesidad de instalar software adicional. Esto brinda flexibilidad y comodidad en la gestión de la nómina, permitiendo a las empresas concentrarse en otras áreas de su operación.</p>
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
