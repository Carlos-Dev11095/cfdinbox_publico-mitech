<?php $ROOT_PATH = '/cfdinbox_publico'; ?>

<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">

<head>
    <?php include '../../../bin/metadatos.php'; ?>

    <!-- CSS
        ============================================ -->
    <?php include '../../../bin/css.php'; ?>

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
    <?php include '../../../bin/encabezado.php'; ?>
    <!--====================  End of header area  ====================-->
    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <div class="about-banner-wrap banner-space about-us-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="about-banner-content text-center">
                                <h1 class="mb-15 text-white">Comercio Exterior</h1>
                                <h5 class="font-weight--normal text-white" style="text-align: justify;">Proporciona información detallada sobre estas transacciones, permite verificar y controlar adecuadamente las operaciones de comercio exterior, así como facilitar el cumplimiento de las obligaciones fiscales y aduaneras por parte de los contribuyentes. </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===========  feature-large-images-wrapper  Start =============-->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 order-lg-1 order-2">
                            <div class="page-sidebar-content-wrapper page-sidebar-left  small-mt__40 tablet-mt__40">

                                <!--=== Sidebar Widget Start ===-->
                                <div class="sidebar-widget search-post wow move-up animated" style="visibility: visible;">
                                    <div class="widget-title">
                                        <h6 class="sidebar-widget-title">COMPLEMENTO</h6>
                                    </div>
                                </div>
                                <!--=== Sidebar Widget End ===-->

                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-blog-recent-post wow move-up animated" style="visibility: visible;">

                                    <h4 class="sidebar-widget-title">Comercio Exterior</h4>

                                    <ul>
                                        <li>
                                            <a href="#" style="pointer-events: none;" style="text-align: justify;">¿Qué información se puede incorporar en la factura con complemento de comercio exterior?</a>
                                        </li>

                                        <p class="post-title" style="text-align: justify;">
                                            <li style="text-align: justify; font-size: 16px;">Nombre, RFC y domicilio del emisor, receptor del CFDI.</li>
                                        </p>

                                        <p class="post-title" style="text-align: justify;">
                                            <li style="text-align: justify; font-size: 16px;">Pais, domicilio y Tax ID del receptor/destinatario de la factura.</li>
                                        </p>

                                        <p class="post-title" style="text-align: justify;">
                                            <li style="text-align: justify; font-size: 16px;">Llevar a cabo la administración de sus empleados y su nómina, generando un catalogo de administración de empleados, esta herramienta facilita la emisión de los recibos de nómina guardando las percepciones, deducciones, por lo que los cálculos no se tienen que realizar cada que emita una nomina.</li>
                                        </p>

                                        <li>
                                            <a href="#" style="pointer-events: none;">¿Quienes deben emitir la Factura de Comercio Exterior?</a>
                                        </li>
                                        <li>
                                            <p class="post-title" style="text-align: justify; font-size: 16px;">
                                                Las personas físicas o morales que realicen exportaciones con clave de pedimento A1, y que involucren la enajenación de mercancía, están sujetas a ciertas regulaciones y requisitos establecidos por las autoridades aduaneras. La clave A1 se utiliza para identificar aquellas exportaciones en las que se realiza la venta de productos fuera del país de origen.</p>
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
                                    <div class="post-feature blog-thumbnail wow move-up animated" style="visibility: visible;">
                                        <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-ce-770x400.jpeg" alt="Blog Images">
                                    </div>
                                    <!-- Post Feature End -->

                                    <!-- Post info Start -->
                                    <div class="post-info lg-blog-post-info  wow move-up animated" style="visibility: visible;">
                                        <div class="post-excerpt mt-15">
                                            <p class="post-title" style="text-align: justify; font-size: 16px;">
                                                El comercio exterior es el intercambio de bienes, servicios y productos entre países o regiones económicas, siendo esencial para la economía global. Facilita la especialización productiva y la optimización de recursos, permitiendo que los países se centren en la producción de bienes y servicios en los que tienen ventajas comparativas.</p>
                                            <blockquote>
                                                <p class="p1" style="text-align: justify;">En este proceso, las exportaciones representan bienes y servicios enviados al extranjero, mientras que las importaciones son productos adquiridos del exterior para satisfacer necesidades locales o para su reventa, formando así un entramado económico interconectado a escala mundial.</p>
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
            <!--===========  feature-large-images-wrapper  End =============-->
            <!--=========== banner ==========-->
            <?php include '../../../bin/banner_registro.php'; ?>
            <!--=========== banner End ==========-->
        </div>
        <!--====================  footer area ====================-->
        <?php include '../../../bin/footer.php'; ?>
        <!--====================  End of footer area  ====================-->
    </div>
    <?php include '../../../bin/encabezado_plegable.php'; ?>
    <!--====================  JS  ====================-->
    <?php include '../../../bin/js.php'; ?>
    <!-- JS ============================================ -->
</body>

</html>
