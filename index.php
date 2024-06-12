<?php $ROOT_PATH = '/cfdinbox_publico'; ?>

<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">

<head>
    <?php include 'bin/metadatos.php'; ?>
    <?php include 'bin/css.php'; ?>
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

    <?php include 'bin/encabezado.php'; ?>

    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--============ Infotechno Hero Start ============-->
            <div class="processing-hero processing-hero-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7">
                            <div class="processing-hero-text wow move-up">
                                <h6>SISTEMA DE FACTURACIÓN ELECTRÓNICA </h6>
                                <h1 class="font-weight--reguler mb-15" style="font-size: 30px;">Bienvenido a <?php echo $nombreProyecto; ?>, donde combinamos tecnología avanzada que <span class="text-color-secondary"> simplifica tus procesos y haz crecer tu negocio con nosotros.</span></h1>
                                <div class="hero-button mt-30">
                                    <a href="#" class="btn btn--secondary">Muestra Gratuita</a>
                                    <div class="hero-popup-video video-popup">
                                        <a href="https://www.youtube.com/watch?v=Zmqso4uwJTM&t=40s" class="video-link">
                                            <div class="video-content">
                                                <div class="video-play">
                                                    <span class="video-play-icon">
                                                        <i class="fa fa-play"></i>
                                                    </span>
                                                </div>
                                                <div class="video-text">¿Cómo entrar a <?php echo $nombreProyecto; ?> ?</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="processing-hero-images-wrap wow move-up">
                                <div class="processing-hero-images">
                                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/hero/slider-processing-slide-01-image-01.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="machine-learning-about-company-area machine-learning-about-bg section-space--ptb_120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-left section-space--mb_30">
                                <h6 class="section-sub-title mb-20">A CERCA DE</h6>
                                <h2 class="heading">Factura fácilmente con <span class="text-color-primary"><?php echo $nombreProyecto; ?></span>
                                </h2>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="image-inner-video-section">
                                <div class="main-video-box video-popup">
                                    <a href="https://www.youtube.com/watch?v=-viaLkyWNBk&list=PLs_wbrIq7XMDxyGe42L1stF-G_HB4toqN&index=1" class="video-link  mt-30">
                                        <div class="single-popup-wrap">
                                            <img class="img-fluid border-radus-5" src="<?php echo $ROOT_PATH; ?>/assets/images/banners/n-popup.png" alt="">
                                            <div class="ht-popup-video video-button">
                                                <div class="video-mark">
                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                </div>
                                                <div class="video-button__two">
                                                    <div class="video-play">
                                                        <span class="video-play-icon"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="machine-learning-mark-text mt-30">
                                    <p class="dec-text mt-20"> <?php echo $nombreProyecto; ?> ha mejorado la experiencia del cliente con la facturación gracias a la implementación de CFDI 4.0 y Reteneciones 3.0 y complemetos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto mt-30">
                            <div class="machine-learning-about-content">
                                <div class="section-title mb-20">
                                    <h4>¿Qué es <?php echo $nombreProyecto; ?>?</h4>
                                    <p class="dec-text mt-20" style="text-align: justify;"><?php echo $nombreProyecto; ?> es un sistema en línea de administración, emisión y recepción de comprobantes fiscales digitales por internet (CFDI) diseñado para ayudar a los contribuyentes a realizar la facturación electrónica de una manera fácil, rápida y al precio más económico del mercado.</p>
                                    <div class="button-box mt-30">
                                        <a href="#" class="ht-btn ht-btn-md">Prueba Gratuita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-images-wrapper bg-gradient section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_60">
                                <h2 class="heading">Nuestros servicios<br> <span class="text-color-primary"> ¿Qué servicios brindamos? </span></h2>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="image-l-r-box">
                        <div class="row">
                            <div class="col image-box-area">
                                <div class="row image-box-boder-box">
                                    <div class="col-lg-4 col-md-6 image-box-boder">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-09">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-processing-service-image-01-100x104.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Facturación Electrónica</h6>
                                                    <div class="text">Emite los tipos de comprobantes más usados como son las facturas electronicas, recibos de honorarios.
                                                    </div>
                                                    <div class="more-arrow-link">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/facturacion_electronica/">
                                                            Leer Más <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 image-box-boder">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-09">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-processing-service-image-02-100x104.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Timbrado de Nómina</h6>
                                                    <div class="text">Con <?php echo $nombreProyecto; ?> podrás generar la nómina de tus empleados en segundos.
                                                    </div>
                                                    <div class="more-arrow-link">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_de_nomina/">
                                                            Leer Más <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 image-box-boder">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-09">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-processing-service-image-03-100x104.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Almacenamiento</h6>
                                                    <div class="text">No te preocupes por tus comprobantes emitidos y recibidos, nosotros los almacenamos.
                                                    </div>
                                                    <div class="more-arrow-link">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/almacenamiento/">
                                                            Leer Más <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 image-box-boder">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-09">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-processing-service-image-06-100x104.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Validación</h6>
                                                    <div class="text">Nos aseguramos que los XML que recibes sean válidos ante el SAT desde que son importados al sistema.
                                                    </div>
                                                    <div class="more-arrow-link">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/validacion">
                                                            Leer Más <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 image-box-boder">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-09">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-processing-service-image-01-100x104.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Administración de XML</h6>
                                                    <div class="text"><?php echo $nombreProyecto; ?> permite realizar múltiples acciones para las facturas emitidas.
                                                    </div>
                                                    <div class="more-arrow-link">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/administracion_de_xml">
                                                            Leer Más <i class="fas fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6 image-box-boder">
                                        <!-- ht-box-icon Start -->
                                        <div class="ht-box-images style-09">
                                            <div class="image-box-wrap">
                                                <div class="box-image">
                                                    <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-processing-service-image-04-80x83.webp" class="img-fluid" alt="">
                                                </div>
                                                <div class="content">
                                                    <h6 class="heading">Tibrado Masivo e Integración</h6>
                                                    <div class="text"><?php echo $nombreProyecto; ?> permite envíos masivos de facturas integrándose con sistemas contables, y ofrece funciones avanzadas para optimizar procesos financieros.
                                                    </div>
                                                    <div class="more-arrow-link">
                                                        <a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_masivo_e_integracion/">
                                                            Leer Más <i class="fas fa-arrow-right"></i>
                                                        </a>
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


            <!--============ Infotechno Hero End ============-->
            <!--====================  Accordion area ====================-->
            <div class="accordion-wrapper section-space--ptb_100">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="faq-wrapper faq-custom-col">

                                <div class="section-title section-space--mb_40">
                                    <h6 class="section-sub-title mb-20"> USO DE <?php echo $nombreProyecto; ?></h6>
                                    <h3 class="heading">¿Quién Puede Usar <span class="text-color-primary"><?php echo $nombreProyecto; ?>? </span></h3>

                                </div>

                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    ¿Quién Puede Usar <?php echo $nombreProyecto; ?>? <span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                            <div class="card-body" style="text-align: justify;">
                                                <p><?php echo $nombreProyecto; ?> Está pensado para todos aquellos contriubyentes que necesiten un sistema sencillo y fácil de usar para emitir facturas y retenciones con cualquier complemento. No importa cuantas facturas o de que tipo, contamos con un plan hecho a la medida para tus necesidades.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    What are the advantages of Mitech?<span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p>Mitech takes into consideration every little detail to make sure the system run smoothly and responsively. Mitech employs a new technique called Minified Technology for securing customers' database & building up highly confidential firewalls. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    working process is simpHow lified? <span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p>We reduce redundant complex calculations and lengthy erroneous code texts with simpler ones to ensure Mitech would run seamlessly and the design is reserved in its best form when viewed from a wide range of mobile devices & browsers. </p>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="rv-video-section">

                                <div class="ht-banner-01 ">
                                    <img class="img-fluid border-radus-5 animation_images one wow fadeInDown animated" src="<?php echo $ROOT_PATH; ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-02.webp" alt="" style="visibility: visible; animation-name: animateUpDown;">
                                </div>

                                <div class="ht-banner-02">
                                    <img class="img-fluid border-radus-5 animation_images two wow fadeInDown animated" src="<?php echo $ROOT_PATH; ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-03.webp" alt="" style="visibility: visible; animation-name: animateUpDown;">
                                </div>

                                <div class="main-video-box video-popup">
                                    <a href="https://www.youtube.com/watch?v=Zmqso4uwJTM&t=44s" class="video-link  mt-30">
                                        <div class="single-popup-wrap">
                                            <img class="img-fluid border-radus-5" src="<?php echo $ROOT_PATH; ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-01.webp" alt="">
                                            <div class="ht-popup-video video-button">
                                                <div class="video-mark">
                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                </div>
                                                <div class="video-button__two">
                                                    <div class="video-play">
                                                        <span class="video-play-icon"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="ht-banner-03">
                                    <img class="img-fluid border-radus-5 animation_images three wow fadeInDown animated" src="<?php echo $ROOT_PATH; ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-04.webp" alt="" style="visibility: visible; animation-name: animateUpDown;">
                                </div>

                                <div class="ht-banner-04">
                                    <img class="img-fluid border-radus-5 animation_images four wow fadeInDown animated" src="<?php echo $ROOT_PATH; ?>/assets/images/banners/home-processing-video-intro-slider-slide-01-image-05.webp" alt="" style="visibility: visible; animation-name: animateUpDown;">
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Accordion area  ====================-->

            <div class="tabs-wrapper bg-gray section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrapper text-center section-space--mb_60 wow move-up animated" style="visibility: visible;">
                                <h6 class="section-sub-title mb-20">¿Porque elegirnos?</h6>
                                <h3 class="section-title">¿Por qué facturar<span class="text-color-primary"> con <?php echo $nombreProyecto; ?> ?</span> </h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 ht-tab-wrap">
                            <div class="text-center  ">
                                <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist">
                                    <li class="tab__item nav-item active" role="presentation">
                                        <a class="nav-link active" id="nav-tab1" data-bs-toggle="tab" href="#tab_list_06" role="tab" aria-selected="true">¿Por qué Elegirnos?</a>
                                    </li>
                                    <li class="tab__item nav-item" role="presentation">
                                        <a class="nav-link" id="nav-tab2" data-bs-toggle="tab" href="#tab_list_07" role="tab" aria-selected="false" tabindex="-1">¿Por qué facturar con <?php echo $nombreProyecto; ?>?</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content ht-tab__content">

                                <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel" aria-labelledby="nav-tab1">
                                    <div class="tab-history-wrap section-space--mt_40">
                                        <div class="row">
                                            <div class="col-lg-6 ">
                                                <div class="tab-history-image video-popup mt-30">
                                                    <a href="https://www.youtube.com/watch?v=Zmqso4uwJTM&t=44s" aria-label="Video Button" class="video-link">
                                                        <div class="single-popup-wrap">
                                                            <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/bg/faqs-video-poster.webp" alt="">
                                                            <div class="ht-popup-video video-button">
                                                                <div class="video-mark">
                                                                    <div class="wave-pulse wave-pulse-1"></div>
                                                                    <div class="wave-pulse wave-pulse-2"></div>
                                                                </div>
                                                                <div class="video-button__two">
                                                                    <div class="video-play">
                                                                        <span class="video-play-icon"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 offset-lg-1 ">
                                                <div class="tab-content-inner  mt-30">
                                                    <div class="text mb-30" style="text-align: justify;">Nuestra prioridad es asegurar la satisfacción del cliente mediante actualizaciones constantes según los lineamientos del SAT y ofreciendo precios accesibles en nuestros servicios de timbrado con <?php echo $nombreProyecto; ?>.</div>

                                                    <p class="section-title" style="text-align: justify; font-size: 16px; font-weight: bold">Los beneficios de utilizar <?php echo $nombreProyecto; ?> incluyen:</p>

                                                    <ul class="check-list section-space--mb_40">
                                                        <li class="list-item">Cumplimiento fiscal: Mantente al día con las regulaciones del SAT gracias a nuestras actualizaciones constantes. </li>
                                                        <li class="list-item">Ahorro económico: Ofrecemos precios competitivos en nuestros servicios de timbrado, ayudándote a reducir costos.
                                                        <li class="list-item">Timbrado de facturas y recibos. </li>
                                                        <li class="list-item">Facturación de pagos. </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab_list_07" role="tabpanel" aria-labelledby="nav-tab2">
                                    <div class="tab-history-wrap section-space--mt_60">
                                        <div class="row">

                                            <div class="col-lg-4 col-md-6">
                                                <!-- ht-box-icon Start -->
                                                <a href="#" class="ht-large-box-images style-04">
                                                    <div class="large-image-box">
                                                        <div class="box-image">
                                                            <div class="default-image">
                                                                <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/box-image/blog-01-480x298.webp" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading">Fácil de Usar</h5>
                                                            <div class="text" style="text-align: justify;">No necesitas ser un experto en computación para manejar <php echo $nombreProyecto; ?>. Es muy intuitivo y amigable, con menús simples y claros que facilitan su uso para cualquier usuario.
                                                            </div>
                                                            <!-- <div class="box-images-arrow">
                                                                <span class="button-text">Decubrir Más</span>
                                                                <i class="fas fa-arrow-right"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <!-- ht-box-icon Start -->
                                                <a href="#" class="ht-large-box-images style-04">
                                                    <div class="large-image-box">
                                                        <div class="box-image">
                                                            <div class="default-image">
                                                                <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/box-image/mitech-home-infotechno-box-large-image-03-480x298.webp" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading">Disponibilidad 24/7</h5>
                                                            <div class="text" style="text-align: justify;">Con <?php echo $nombreProyecto; ?>, puedes facturar en cualquier momento y en cualquier lugar. El único requisito es tener un dispositivo con acceso a internet, lo que te brinda flexibilidad y conveniencia para gestionar tus facturas según tu horario y necesidades.
                                                            </div>
                                                            <!-- <div class="box-images-arrow">
                                                                <span class="button-text">Decubrir Más</span>
                                                                <i class="fas fa-arrow-right"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- ht-box-icon End -->
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <!-- ht-box-icon Start -->
                                                <a href="#" class="ht-large-box-images style-04">
                                                    <div class="large-image-box">
                                                        <div class="box-image">
                                                            <div class="default-image">
                                                                <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/box-image/mitech-home-infotechno-box-large-image-02-480x298.webp" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="heading">Seguridad y Soporte</h5>
                                                            <div class="text" style="text-align: justify;">
                                                                <?php echo $nombreProyecto; ?> garantiza tu seguridad con medidas rigurosas y cumplimiento de estándares internacionales para proteger tus datos financieros. Nuestro equipo de soporte está disponible las 24/7 para brindarte ayuda en cada paso. Priorizamos una experiencia sin problemas, respaldándote en todo momento.
                                                            </div>
                                                            <!-- <div class="box-images-arrow">
                                                                <span class="button-text">Decubrir Más</span>
                                                                <i class="fas fa-arrow-right"></i>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- ht-box-icon End -->
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab_list_08" role="tabpanel" aria-labelledby="nav-tab3">
                                    <div class="tab-history-wrap section-space--mt_60 brand-logo-slider__one">
                                        <div class="modern-grid--6">


                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-01.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-01-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-02.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-02-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-03.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-03-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-04.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-04-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-05.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-05-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-06.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-06-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-07.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-07-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-08.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="assets/images/brand/mitech-client-logo-08-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="brand-logo brand-logo--slider">
                                                <a href="#">
                                                    <div class="brand-logo__image">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-09.webp" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="brand-logo__image-hover">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/brand/mitech-client-logo-09-hover.webp" class="img-fluid" alt="">
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--=========== fun fact Wrapper Start ==========-->

<div class="service-projects-wrapper section-space--pt_100 mb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_60">
                                <h6 class="section-sub-title mb-20"><a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank">DESCARGA LA APP</a></h6>
                                <h3 class="heading">¿Listo para simplificar tu <span class="text-color-primary">proceso de facturación</span>?</h3>                            </div>
                        </div>
                    </div>
                    <div class="swiper-container service-slider__project-active swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper service-slider__project" style="transform: translate3d(-696px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 696px;">
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 696px;">
                                <div class="row">
                                    <div class="slide-content col-lg-6 col-xl-5 order-2 order-lg-1">
                                        <div class="service-project-slide-info">
                                            <h4 class="heading font-weight--reguler mb-10"> Descubre cómo <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank"> <?php echo $nombreProyecto; ?> </a> puede simplificarlo para ti.</h4>
                                            <p class="sub-text text-color-primary"> <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank"> DESCARGA NUESTRA APP </a> </p>
                                            <div class="text" style="text-align: justify;"><a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank"> <?php echo $nombreProyecto; ?></a> está disponible en múltiples plataformas, incluyendo <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank"> en Google Play</a>. Descarga nuestra aplicación ahora y lleva el control de tu facturación a donde quiera que vayas.</div><br>

                                            <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&amp;pcampaignid=web_share" class="image_btn" aria-label="Google play Button" target="_blank"><img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/icons/aeroland-black-button-google-play.webp" alt=""></a>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                                        <div class="slide-image">
                                            <div class="image-wrap">
                                                <div class="image">
                                                    <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank">
                                                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/features/app_android.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="1" style="width: 696px;">
                                <div class="row">
                                    <div class="slide-content col-lg-6 col-xl-5 order-2 order-lg-1">
                                        <div class="service-project-slide-info">
                                            <h4 class="heading font-weight--reguler mb-10"> Descubre cómo <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank"> <?php echo $nombreProyecto; ?> </a> puede simplificarlo para ti.</h4>
                                            <p class="sub-text text-color-primary"> <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank"> DESCARGA NUESTRA APP </a>
                                            </p>
                                            <div class="text" style="text-align: justify;"><a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank"> <?php echo $nombreProyecto; ?></a> está disponible en múltiples plataformas, incluyendo <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&pcampaignid=web_share" target="_blank"> en Google Play</a>. Descarga nuestra aplicación ahora y lleva el control de tu facturación a donde quiera que vayas.</div><br>

                                            <a href="https://play.google.com/store/apps/details?id=co.median.android.qjlkqo&amp;pcampaignid=web_share" class="image_btn" aria-label="Google play Button" target="_blank"><img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/icons/aeroland-black-button-google-play.webp" alt=""></a>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-xl-7 order-1 order-lg-2">
                                        <div class="slide-image">
                                            <div class="image-wrap">
                                                <div class="image">
                                                    <a href="https://app.cfdinbox.com/registro/" target="_blank">
                                                    <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/features/home-services-case-study-slide-image-01.webp" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>

            <!--=========== fun fact Wrapper End ==========-->

            <!--=========== pasos Start ===============-->
            <div class="gradation-process-area section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="gradation-title-wrapper section-space--mb_60">
                                <div class="gradation-title-wrap ">
                                    <h6 class="section-sub-title text-black mb-20">Cómo Funciona</h6>
                                    <h4 class="heading">Comienza a <span class="text-color-primary">usar <br> <?php echo $nombreProyecto; ?> </span></h4>
                                </div>


                                <div class="gradation-sub-heading">
                                    <h3 class="heading"><mark>04</mark> Sencillos Pasos</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ht-gradation style-01">
                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">1 paso</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h6 class="heading">01. Registro</h6>

                                        <div class="text" style="text-align: left;"><strong>REGISTRESE en <?php echo $nombreProyecto; ?>. </strong><br> Es necesario registrar una cuenta de correo para obtener acceso a nuestra plataforma, el proceso es rápido, fácil y sin costo.</div>
                                    </div>
                                </div>
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.15s" style="visibility: visible; animation-delay: 0.15s; animation-name: fadeInRight;">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">2 paso</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h6 class="heading">02. Negocio</h6>

                                        <div class="text" style="text-align: left;"><strong>REGISTRE UNA EMPRESA.</strong> Registre una empresa con los datos que va a facturar. Como son su Razón social, RFC, etc.</div>
                                    </div>
                                </div>
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.20s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">3 paso</h6>
                                    </div>

                                    <div class="content-wrap">

                                        <h6 class="heading">03. Certificado</h6>

                                        <div class="text" style="text-align: left;"><strong>SUBA SU CSD. </strong> Suba los archivos de su Certificado de Sello Digital (archivo.cer, archivo.key y contraseña). No se preocupe, están en buenas manos.</div>
                                    </div>
                                </div>
                                <!-- Single item gradation End -->

                                <!-- Single item gradation Start -->
                                <div class="item item-1 animate wow fadeInRight" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                                    <div class="line"></div>
                                    <div class="circle-wrap">
                                        <div class="mask">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                            <div class="wave-pulse wave-pulse-3"></div>
                                        </div>

                                        <h6 class="circle">4 paso</h6>
                                    </div>

                                    <div class="content-wrap">
                                        <h6 class="heading">04. Facturar</h6>
                                        <div class="text" style="text-align: left;"><strong>COMIENCE A FACTURAR.</strong> A partir de este momento, podrá emitir facturas con solo unos clics. ¿Verdad que es muy fácil? No espere mas y comience hoy mismo.</div>
                                    </div>
                                </div>
                                <!-- Single item gradation End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--=========== pasos End ===============-->


            <!--====================  testimonial section ====================-->
            <div class="testimonial-slider-area bg-gray section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h6 class="section-sub-title mb-20">Opiniones</h6>
                                <h3 class="heading">¿Qué dice la gente sobre <span class="text-color-primary"> <?php echo $nombreProyecto; ?>?</span></h3>
                            </div>
                            <div class="testimonial-slider">
                                <div class="swiper-container testimonial-slider__container">
                                    <div class="swiper-wrapper testimonial-slider__wrapper">
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/testimonial/mitech-testimonial-avata-02-90x90.webp" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">Pedro García</h6>
                                                            <span class="designation">Desarrollador web</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="testimonial-slider__text">"<?php echo $nombreProyecto; ?> es una excelente herramienta para la facturación electrónica en México. Su interfaz intuitiva y su eficiencia en el proceso de emisión de facturas han optimizado nuestro flujo de trabajo."</div>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/testimonial/mitech-testimonial-avata-03-90x90.webp" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">María Fernanda López</h6>
                                                            <span class="designation">Contadora</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="testimonial-slider__text">"Me encanta la simplicidad de <?php echo $nombreProyecto; ?>. Como contadora, necesito una solución de facturación confiable y fácil de usar, y esta plataforma cumple con todas mis expectativas."</div>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/testimonial/mitech-testimonial-avata-01-90x90.webp" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">Luis Suáez</h6>
                                                            <span class="designation">Gerente de ventas</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="testimonial-slider__text"> "<?php echo $nombreProyecto; ?> ha simplificado enormemente nuestra gestión de facturación. Además, el soporte al cliente es excepcional; siempre están dispuestos a ayudar y resolver cualquier duda que tengamos."</div>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="testimonial-slider__one wow move-up">

                                                <div class="testimonial-slider--info">
                                                    <div class="testimonial-slider__media">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/testimonial/mitech-testimonial-avata-04-90x90.webp" class="img-fluid" alt="">
                                                    </div>

                                                    <div class="testimonial-slider__author">
                                                        <div class="testimonial-rating">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="author-info">
                                                            <h6 class="name">Ana Sofía Martínez</h6>
                                                            <span class="designation">Dueña de negocio</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="testimonial-slider__text">"Como dueña de un pequeño negocio, valoro mucho la accesibilidad y la asequibilidad de los servicios. <?php echo $nombreProyecto; ?> ofrece una solución de facturación de alta calidad a un precio justo, lo cual es fundamental para mí."</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  End of testimonial section  ====================-->

            <!--====================  banner Section Start ====================-->
            <?php include 'bin/banner_registro.php'; ?>
            <!--====================  banner Section End  ====================-->
        </div>

        <?php include 'bin/footer.php'; ?>
    </div>
    <!--====================  menu mobile overlay ====================-->
    <?php include 'bin/encabezado_plegable.php'; ?>
    <!--====================  js ====================-->
    <?php include 'bin/js.php'; ?>
    <!--====================  End of js file  ====================-->

</body>

</html>
