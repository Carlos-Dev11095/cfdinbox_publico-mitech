<?php
// Usa una ruta absoluta para incluir datos.php
include $_SERVER['DOCUMENT_ROOT'] . '/cfdinbox_publico/bin/datos.php';
?>

<!--====================  header area ====================-->
<div class="header-area">
    <div class="header-top-bar-info bg-gray d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-bar-wrap">
                        <div class="top-bar-left">
                            <a class="font-medium display-inline">¡Factura con Nosotros!</a>
                            <p>Descubre lo fácil y conveniente que es administrar tus facturas con <?php echo $nombreProyecto; ?></p>
                        </div>
                        <div class="top-bar-right">
                            <ul class="top-bar-info">
                                <li class="info-item">
                                    <a href="tel:<?php echo $numeroTelefonico; ?>" class="info-link">
                                        <i class="info-icon fa fa-phone"></i>
                                        <span class="info-text"><strong><?php echo $numeroTelefonico; ?></strong></span>
                                    </a>
                                </li>
                                <li class="info-item">
                                    <i class="info-icon fa fa-map-marker-alt"></i>
                                    <span class="info-text"><?php echo $direccion; ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-bottom-wrap header-sticky bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="<?php echo $ROOT_PATH; ?>/">
                                <img src="<?php echo $ROOT_PATH; ?>/assets/images/logo/cfdinbox-logo.png" aria-label="Mitech Logo" width="160" height="48" class="img-fluid" alt="">
                            </a>
                        </div>

                        <div class="header-right">

                            <!-- navigation menu -->
                            <div class="header__navigation menu-style-three d-none d-xl-block">
                                <nav class="navigation-menu">

                                    <ul>
                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/"><span>Inicio</span></a>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="<?php echo $ROOT_PATH; ?>/servicios/"><span>Servicios</span></a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo $ROOT_PATH; ?>/servicios/facturacion_electronica/"><span>Facturación Electrónica</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_de_nomina/"><span>Timbrado de Nomina</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/servicios/almacenamiento/"><span>Almacenamiento</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/servicios/validacion/"><span>Validación de XML</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/servicios/administracion_de_xml/"><span>Administración de XML</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_masivo_e_integracion/"><span>Timbrado masivo e integración</span></a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/precios/"><span>Precios</span></a>
                                        </li>

                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="#"><span>A cerca de</span></a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo $ROOT_PATH; ?>/nosotros/"><span>Nosotros</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/contacto/"><span>contacto</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/faqs/"><span>Preguntas Frecuentes</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/terminos/"><span>Términos y Condiciones</span></a></li>
                                                <li><a href="<?php echo $ROOT_PATH; ?>/politica_de_privacidad/"><span>Políticas de Privacidad</span></a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/noticias/"><span>Noticias</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <a href="#" class="ht-btn ht-btn-xs">registrarse </a> | <a href="#" class="ht-btn ht-btn-xs"> Ingresar</a>
                            <!-- mobile menu -->
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!--====================  End of header area  ====================-->
