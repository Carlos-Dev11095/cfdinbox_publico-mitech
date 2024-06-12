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
                        <h1 class="breadcrumb-title text-color-primary">Planes de Precios</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                            <li class="breadcrumb-item active">Planes de Precios</li>
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
            <!--========= Pricing Table Area Start ==========-->
            <div class="pricing-table-area section-space--ptb_100 bg-gray">
                <div class="pricing-table-title-area position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                                    <h6 class="section-sub-title mb-20">Precios y Planes</h6>
                                    <h3 class="section-title">Prepago de <span class="text-color-primary">Timbres.</span> </h3>
                                    <p class="text" style="text-align: center; font-size: 20px;">
                                        Si tu consumo de timbres es variable, puedes pensar en comprar timbres por prepago, lo cuales puedes usar cuando lo requieras, ademas de que no tienen vigencia y pueden ser utilizados en múltiples negocios desde una misma cuenta. A continuación de mostramos los planes que tenemos para ti.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-table-content-area">
                    <div class="container">
                        <div class="row pricing-table-one">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up"></div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__feature-mark">
                                        <span>Elección Popular</span>
                                    </div>
                                    <div class="pricing-table__header">
                                        <h6 class="sub-title">Ilimitado</h6>
                                        <div class="pricing-table__image">
                                            <img src="<?php echo $ROOT_PATH; ?>/assets/images/icons/mitech-pricing-box-icon-02-88x88.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">119.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <div class="pricing-table__footer">
                                            <a href="#" class="ht-btn  ht-btn-md ">Comprar</a>
                                        </div>
                                        <br>
                                        <div class="text" style="text-align: center;">
                                            <ul>
                                                <li style="font-size: 16px; text-align: left;"><i class="fas fa-check" style="color: blue;"></i> Timbres Ilimitados </li>
                                                <li style="font-size: 16px; text-align: left;"><i class="fas fa-check" style="color: blue;"></i> Pago Mensual Por Negocio </li>
                                                <li style="font-size: 16px; text-align: left;"><i class="fas fa-check" style="color: blue;"></i> Módulo De Emisión De Facturas Y Todos Los Complementos Disponibles(Factura, Nómina, REP, Carta Porte, Notarios, Etc.) </li>
                                                <li style="font-size: 16px; text-align: left;"><i class="fas fa-check" style="color: blue;"></i> Modulo Recepción CFDI(Gastos) </li>
                                                <li style="font-size: 16px; text-align: left;"><i class="fas fa-check" style="color: blue;"></i> Módulo Emisión De Retenciones Y Todos Sus Complementos(Excepto Plataformas Tecnológicas) </li>
                                                <li style="font-size: 16px; text-align: left;"><i class="fas fa-check" style="color: blue;"></i> Módulo Validación De XML </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========= Pricing Table Area End ==========-->

            <!--========= Pricing Table Area Start ==========-->
            <div class="pricing-table-area section-space--ptb_100 ">
                <div class="pricing-table-title-area position-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                                    <h6 class="section-sub-title mb-20">Timbres</h6>
                                    <h3 class="section-title">Precios<span class="text-color-primary"> Por Timbres</span> </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pricing-table-content-area">
                    <div class="container">
                        <div class="row pricing-table-two">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h5 class="pricing-table__title">CF-25</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">125.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul class="pricing-table__list">
                                            <li class="timbres" style="font-size: 19px;">25 Timbres</li>
                                            <li style="font-size: 16px; text-align: center;">Potente solución con 25 timbres mensuales. </li>
                                            <li style="font-size: 16px; text-align: center;">Optimiza la experiencia del cliente.</li>
                                            <li style="font-size: 16px; text-align: center;">Prueba Gratuita</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-default btn--secondary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h5 class="pricing-table__title">CF-50</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">225.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul class="pricing-table__list">
                                            <li class="timbres" style="font-size: 19px;">50 Timbres</li>
                                            <li style="font-size: 16px; text-align: center;">Solución avanzada con 50 timbres mensuales.</li>
                                            <li style="font-size: 16px; text-align: center;">Ofrece marcación predictiva</li>
                                            <li style="font-size: 16px; text-align: center;">calidad superior y soporte 24/7.</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-default btn--secondary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table pricing-table--popular wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__feature-mark">
                                        <span>Elección Popular</span>
                                    </div>
                                    <div class="pricing-table__header">
                                        <h5 class="pricing-table__title">CF-100</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">380.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul class="pricing-table__list">
                                            <li class="timbres" style="font-size: 19px;">100 Timbres</li>
                                            <li style="font-size: 16px; text-align: center;">Ideal para mayor volumen</li>
                                            <li style="font-size: 16px; text-align: center;">de marcadores</li>
                                            <li style="font-size: 16px; text-align: center;">Mejora la comunicación con tus clientes.</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-default btn--secondary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h5 class="pricing-table__title">CF-200</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">615.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul class="pricing-table__list">
                                            <li class="timbres" style="font-size: 19px;">200 Timbres</li>
                                            <li style="font-size: 16px; text-align: center;">Eficiente con 200 timbres mensuales</li>
                                            <li style="font-size: 16px; text-align: center;">asegura resultados óptimos</li>
                                            <li style="font-size: 16px; text-align: center;">Maximiza resultados.</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-default btn--secondary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pricing-table-content-area">
                    <div class="container">
                        <div class="row pricing-table-two">
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h5 class="pricing-table__title">CF-300</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price">885.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul class="pricing-table__list">
                                            <li class="timbres" style="font-size: 19px;">300 Timbres</li>
                                            <li style="font-size: 16px; text-align: center;">Solución robusta con 300 timbres mensuales</li>
                                            <li style="font-size: 16px; text-align: center;">Mantiene calidad en</li>
                                            <li style="font-size: 16px; text-align: center;">alta demanda de marcaciones.</span></li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-default btn--secondary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h5 class="pricing-table__title">CF-500</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price" style="font-size: 50px;">1,350.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul class="pricing-table__list">
                                            <li class="timbres" style="font-size: 19px;">500 Timbres</li>
                                            <li style="font-size: 16px; text-align: center;">Completa y escalable con 500 timbres mensuales</li>
                                            <li style="font-size: 16px; text-align: center;">Equilibrio perfecto</li>
                                            <li style="font-size: 16px; text-align: center;">entre volumen y calidad.</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-default btn--secondary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h5 class="pricing-table__title">CF-1,000</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price" style="font-size: 50px;">2,300.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul class="pricing-table__list">
                                            <li class="timbres" style="font-size: 19px;">1,000 Timbres</li>
                                            <li style="font-size: 16px; text-align: center;">Alta demanda con 1,000 timbres mensuales</li>
                                            <li style="font-size: 16px; text-align: center;">R Rendimiento excepcional</li>
                                            <li style="font-size: 16px; text-align: center;">y calidad superior.</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-default btn--secondary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-3 pricing-table wow move-up">
                                <div class="pricing-table__inner">
                                    <div class="pricing-table__header">
                                        <h5 class="pricing-table__title">CF-2,000</h5>
                                        <div class="pricing-table__price-wrap">
                                            <h6 class="currency">$</h6>
                                            <h6 class="price" style="font-size: 50px;">3,650.00</h6>
                                            <h6 class="period" style="font-size: large;">/MES</h6>
                                        </div>
                                    </div>
                                    <div class="pricing-table__body">
                                        <ul class="pricing-table__list">
                                            <li class="timbres" style="font-size: 19px;">2,000 Timbres</li>
                                            <li style="font-size: 16px; text-align: center;">Excepcional capacidad con 2,000 timbres mensuales</li>
                                            <li style="font-size: 16px; text-align: center;">Potente solución</li>
                                            <li style="font-size: 16px; text-align: center;">para maximizar la eficiencia.</li>
                                        </ul>
                                    </div>
                                    <div class="pricing-table__footer">
                                        <a href="#" class="ht-btn ht-btn-default btn--secondary">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--========= Pricing Table Area End ==========-->

            <!--========== Call to Action Area Start ============-->
            <?php include '../bin/banner_registro.php'; ?>
            <!--========== Call to Action Area End ============-->
        </div>
        <!--====================  footer area ====================-->
        <?php include '../bin/footer.php'; ?>
        <!--====================  End of footer area  ====================-->
    </div>
    <!--====================  menu mobile overlay ====================-->
    <?php include '../bin/encabezado_plegable.php'; ?>
    <!--====================  js ====================-->
    <?php include '../bin/js.php'; ?>
    <!--====================  End of js  ====================-->
</body>

</html>
