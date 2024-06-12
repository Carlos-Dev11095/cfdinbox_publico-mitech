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
                        <h2 class="breadcrumb-title">Preguntas Frecuentes</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                            <li class="breadcrumb-item active">Preguntas Frecuentes</li>
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
            <!--====================  Accordion area ====================-->
            <div class="accordion-wrapper section-space--ptb_100">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- section-title-wrap Start -->
                            <div class="section-title-wrap text-center section-space--mb_20">
                                <h6 class="section-sub-title mb-20">FAQ's</h6>
                                <h3 class="heading">¿Tienes Alguna Pregunta?</h3>
                            </div>
                            <!-- section-title-wrap Start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="faq-wrapper  section-space--mt_40">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    1. ¿Cómo facturo a público en general?<span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p style="text-align: justify;">Para facturar al publico en general el SAT proporciona un RFC generico: XAXX010101000 Fundamento legal: Art. 29- A, fracción IV del CFF y la regla I.2.7.1.5 de la RMF.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    2. ¿Qué necesito para poder facturar? <span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p style="text-align: justify;">Para poder facturar electronicamente es necesario contar con tu Certificado de Sello Digital (CSD). El cual esta compuesto por 2 archivos, uno con extencion .key otro con extencion .cer y una contraseña. Si no cuentas con un CSD, te sugerimos lo tramites ante el SAT. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingFour">
                                            <h5 class="mb-0">
                                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    3. ¿Que es un CFDI?<span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                            <div class="card-body">
                                                <p style="text-align: justify;">Un Comprobante Fiscal Digital por Internet (CFDI), se refiere a cualquier tipo de comprobante fiscal de forma digital, como son las facturas, nota de crédito, recibo de honorarios, carta porte, entre otros, el cual debe de cumplir con los requisitos que indica el SAT en el Anexo 20. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="faq_2">
                                            <h5 class="mb-0">
                                                <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq_two" aria-expanded="false" aria-controls="faq_two">
                                                    4. ¿Que es la FIEL o Firma Electrónica?<span> <i class="fas fa-chevron-down"></i>
                                                        <i class="fas fa-chevron-up"></i> </span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="faq_two" class="collapse" aria-labelledby="faq_2">
                                            <div class="card-body">
                                                <p style="text-align: justify;">Es un archivo digital que te identifica al realizar trámites por internet en el SAT e incluso en otras dependencias del Gobierno de la República. Es unica y ségura y garantiza tu identidad. Esta compuesta por dos archivos( con extension .key y .cer ) y una contraseña.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Start toggles -->
                            <div class="toggles-wrapper section-space--mt_40">
                                <div class="faq-wrapper">
                                    <div id="faq-toggles">
                                        <div class="card">
                                            <div class="card-header" id="faq_3">
                                                <h5 class="mb-0">
                                                    <button class="btn-link collapsed" data-bs-toggle="collapse" data-bs-target="#faq_three" aria-expanded="false" aria-controls="faq_three">
                                                        5. ¿Que es el Certificado de Sello Digital o CSD? <span> <i class="fas fa-chevron-down"></i>
                                                            <i class="fas fa-chevron-up"></i> </span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="faq_three" class="collapse" aria-labelledby="faq_3">
                                                <div class="card-body">
                                                    <p style="text-align: justify;">Es un conjunto de archivos(.key , .cer) generados con la FIEL desde la pagina del SAT, los cuales se usan específicamente para la generación de Comprobantes Fiscales Digitales por Internet (CFDI). Este sello digital permitirá acreditar la autoría de los comprobantes fiscales digitales que usted emita, y de esta manera sus clientes sabrán que usted fue el autor de dicho comprobante.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="faq_4">
                                                <h5 class="mb-0">
                                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq_four" aria-expanded="false" aria-controls="faq_four">
                                                        6. ¿Cuál es la diferencia entre la FIEL y el CSD? <span> <i class="fas fa-chevron-down"></i>
                                                            <i class="fas fa-chevron-up"></i> </span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="faq_four" class="collapse" aria-labelledby="faq_4" data-bs-parent="#faq-toggles">
                                                <div class="card-body">
                                                    <p style="text-align: justify;">La Firma Electrónica le sirve al contribuyente para validarse e identificarse dentro de algunas paginas, entre ellas el SAT, gubernamentales y algunas otras que asi lo requieren. Por otro lado, el Certificado de Sello Digital es exclusivamente para sellar sus Comprobantes Fiscales Digitales por Internet(CFDI).</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faq_5">
                                                <h5 class="mb-0">
                                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq_five" aria-expanded="false" aria-controls="faq_five">
                                                        7. ¿Como se mis archivos son FIEL o son CSD?<span> <i class="fas fa-chevron-down"></i>
                                                            <i class="fas fa-chevron-up"></i> </span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="faq_five" class="collapse" aria-labelledby="faq_5" data-bs-parent="#faq-toggles">
                                                <div class="card-body">
                                                    <p style="text-align: justify;">Al ser un mismo conjunto de archivos compuestos por un archivo .key y otro .cer y la contraseña, es facil cofundiser, para esto, el SAT pone a disposicion en su pagina un validador que te permite identificarlos. Es necesario ir al siguiente enlace y teclear el RFC y los codigos de verificacion. <br> <a class="btn btn--secondary" href="https://portalsat.plataforma.sat.gob.mx/RecuperacionDeCertificados/faces/index.xhtml">Ir al validador</a></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="faq_6">
                                                <h5 class="mb-0">
                                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq_six" aria-expanded="false" aria-controls="faq_six">
                                                        8. ¿Que es y para que sirve el archivo XML?<span> <i class="fas fa-chevron-down"></i>
                                                            <i class="fas fa-chevron-up"></i> </span>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="faq_six" class="collapse" aria-labelledby="faq_6" data-bs-parent="#faq-toggles">
                                                <div class="card-body">
                                                    <p style="text-align: justify;">El archivo xml es un formato estandar para representar información capaz de ser interpretada por una gran variedad de software y sistemas. Y que en nuestro caso, el SAT representa la información de nuestro CFDI. El CFDI viene a ser ahora nuestro comprobante(antes factura en papel), mismos que debemos conservar en medios de almacenamiento informático (CD, DVD, Disco Duro, etc.), durante 5 años.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End toggles -->
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Accordion area  ====================-->

            <!--====================  Conact us Section Start ====================-->
            <?php include '../bin/banner_registro.php'; ?>
            <!--====================  Conact us Section End  ====================-->
        </div>
        <!--====================  footer area ====================-->
        <?php include '../bin/footer.php'; ?>
        <!--====================  End of footer area  ====================-->

    </div>

    <!--====================  encabezado plegable ====================-->
    <?php include '../bin/encabezado_plegable.php'; ?>

    <!-- JS============================================ -->
    <?php include '../bin/js.php'; ?>
    <!--====================  End of js file  ====================-->
</body>

</html>