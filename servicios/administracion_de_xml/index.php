<?php $ROOT_PATH = '/cfdinbox_publico'; ?>

<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">

<head>
    <?php include '../../bin/metadatos.php'; ?>
    <!-- CSS
        ============================================ -->
    <?php include '../../bin/css.php'; ?>
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

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--======== careers-experts Start ==========-->
            <div class="feature-images-wrapper bg-gray section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center">
                                <h6 class="section-sub-title mb-20"> Servicios </h6>
                                <h3 class="heading">Administración de <span class="text-color-primary"> XML</span></h3>
                            </div>
                            <p class="text" style="text-align: center; font-size: 22px;"><?php echo $nombreProyecto; ?> permite realizar las siguientes acciones:</p>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="feature-images__one">
                                <div class="row" style="display: flex; justify-content: center;">
                                    <div class="col-lg-4 col-md-6 wow move-up animated" style="visibility: visible;">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid" src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-box-image-style-01-image-02-100x108.webp" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Para Las Facturas Emitidas </h5>
                                                    <div class="text" style="text-align: left;">
                                                        <ul>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Enviar Por Correo al Generar la Factura </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Generar Plantillas Para Facturar de Forma Más Rápida </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Generar borradores para emitir la factura en otro momento </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Reenviar los archivos del comprobante CFDI (XML y PDF) al cliente </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Cancelar facturas </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i>Importar XMLs emitidos en otros sistemas </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 wow move-up animated" style="visibility: visible;">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-01">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img class="img-fulid" src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-box-image-style-01-image-03-100x108.webp" alt="">
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Para Las Facturas Recibidas</h5>
                                                    <div class="text" style="text-align: left;">
                                                        <ul>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Almacenamiento </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Reenvío por correo </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Lista de los productos comprados y sus precios </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Lista de los emisores de los CFDIs recibidos </li>
                                                            <li style="font-size: 16px;"><i class="fas fa-check" style="color: blue;"></i> Importar XMLs recibidos </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--======== careers-experts End ==========-->

            <!--========== Call to Action Area Start ============-->
            <?php include '../../bin/banner_registro.php'; ?>
            <!--========== Call to Action Area End ============-->
            <!--====================  Conact us Section End  ====================-->
        </div>
        <!--====================  footer area ====================-->
        <?php include '../../bin/footer.php' ?>
        <!--====================  End of footer area  ====================-->
        <!-- =================== mobile menu -===========>
    <?php include '../../bin/encabezado_plegable.php'; ?>
    <!--====================  scroll top ====================-->
        <!-- JS
    <?php include '../../bin/js.php'; ?>
    ============================================ -->

</body>

</html>
