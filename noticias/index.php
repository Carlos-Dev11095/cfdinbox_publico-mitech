<?php $ROOT_PATH = '/cfdinbox_publico'; ?>
<!DOCTYPE html>
<html class="no-js" lang="es" dir="ltr">

<head>
    <?php include '../bin/metadatos.php'; ?>
    <!-- CSS
        ============================================ -->
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
    <?php include '../bin/encabezado_plegable.php'; ?>
    <!--====================  End of header area  ====================-->
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Noticias</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo $ROOT_PATH; ?>/">Inicio</a></li>
                            <li class="breadcrumb-item active">Noticias</li>
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

                        <div class="col-lg-4 order-lg-2 order-2">
                            <div class="page-sidebar-content-wrapper page-sidebar-right small-mt__40 tablet-mt__40">

                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-blog-recent-post wow move-up">

                                    <h4 class="sidebar-widget-title">categorias</h4>

                                    <ul>
                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/servicios/facturacion_electronica/"><span>Facturación Electrónica</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_de_nomina/"><span>Timbrado de Nomina</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/servicios/timbrado_masivo_e_integracion/"><span>Timbrado masivo e integración</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/precios/"   id="etiquetas"><span>Precios</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/nosotros/"><span>Nosotros</span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $ROOT_PATH; ?>/contacto/"><span>Contacto</span></a>
                                        </li>


                                    </ul>

                                </div>
                                <!-- === Sidebar Widget End === -->

                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-tag wow move-up">
                                    <h4 class="sidebar-widget-title">Etiquetas</h4>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">CFDINBOX</a>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">facturación electrónica</a>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">CFDI</a>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">sistema de facturación</a>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">facturación en línea</a>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">contabilidad</a>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">impuestos</a>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">Timbrado de Nomina</a>
                                    <a href="javascript:void(0);" disabled="" class="ht-btn ht-btn-xs">Timbrado masivo e integración</a>

                                </div>
                                <!-- === Sidebar Widget End === -->
                            </div>
                        </div>
                        <div class="col-lg-8 order-lg-1 order-1">
                            <div class="main-blog-wrap">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item">
                                    <!-- Post Feature Start -->
                                    <div class="post-feature blog-thumbnail  wow move-up">
                                        <img class="img-fluid" src="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-07-770x400.webp" alt="Blog Images">
                                    </div>
                                    <!-- Post Feature End -->

                                    <!-- Post info Start -->
                                    <div class="post-info lg-blog-post-info  wow move-up">
                                        <div class="post-categories">
                                            <a href="javascript:void(0);" disabled="">Historia de Éxito</a>
                                        </div>

                                        <h3 class="post-title">Sistema En Línea de Administración, Emisión y Recepción de Comprobantes Fiscales Digitales Por Internet</h3>

                                        <div class="post-meta mt-20">
                                            <div class="post-author">
                                                <a href="javascript:void(0);" disabled="">
                                                    <img class="img-fluid avatar-96" src="<?php echo $ROOT_PATH; ?>/assets/images/team/admin.webp" alt=""> Harry Ferguson
                                                </a>
                                            </div>
                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                14 de enero de 2019
                                            </div>
                                            <div class="post-view">
                                                <span class="meta-icon far fa-eye"></span>
                                                346 vistas
                                            </div>
                                            <div class="post-comments">
                                                <span class="far fa-comment-alt meta-icon"></span>
                                                <a href="javascript:void(0);" disabled="" class="smooth-scroll-link">4 comentarios</a>
                                            </div>
                                        </div>

                                        <div class="post-excerpt mt-15">
                                            <p>Se ha dicho un millón de veces antes, si no más, pero la tecnología ha revolucionado nuestras vidas de una manera que nunca esperábamos. Desde el hogar hasta la oficina, no hay rincón de nuestro día a día que no se haya visto afectado por el boom tecnológico.</p>

                                            <blockquote>
                                                <p class="p1">La tecnología inalámbrica también cambia cada año y seguirá cambiando mientras podamos ver. A continuación, analizamos algunas formas en que la tecnología inalámbrica ha cambiado las empresas hasta ahora.</p>
                                            </blockquote>

                                            <p>Offset Dublin ha revelado algunos de sus oradores para 2019, entre los que se incluyen el ilustrador político Edel Rodríguez y el recién nombrado socio de Pentagram, Yuri Suzuki.</p>

                                            <p>La conferencia anual de tres días se lleva a cabo desde 2010 y desde entonces se ha ampliado con conferencias más pequeñas en Sheffield y Londres.</p>

                                            <p>Offset Dublin es la rama original de la marca del festival y se llevará a cabo del 5 al 7 de abril, trasladándose desde su sede anterior, el Bord Gáis Energy Theatre, a The Point Square. Habrá dos escenarios con 100 ponentes en total.</p>
                                            <p>Fuente: designweek.co.uk</p>
                                            <div class="entry-post-share-wrap  border-bottom">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="entry-post-tags">
                                                            <div class="tagcloud-icon">
                                                                <i class="far fa-tags"></i>
                                                            </div>
                                                            <div class="tagcloud">
                                                                <a href="javascript:void(0);" disabled="">empresa</a>, <a href="javascript:void(0);" disabled="">seguridad de TI</a>, <a href="javascript:void(0);" disabled="">servicios de TI</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="entry-post-share">
                                                            <div class="share-label">
                                                                Compartir esta publicacion </div>
                                                            <div class="share-media">
                                                                <span class="share-icon fas fa-share-alt"></span>

                                                                <div class="share-list">
                                                                    <a class="hint--bounce hint--top hint--primary twitter" target="_blank" aria-label="Twitter" href="https://twitter.com/">
                                                                        <i class="fab fa-twitter"></i>
                                                                    </a>
                                                                    <a class="hint--bounce hint--top hint--primary facebook" target="_blank" aria-label="Facebook" href="https://facebook.com">
                                                                        <i class="fab fa-facebook-f"></i>
                                                                    </a>
                                                                    <a class="hint--bounce hint--top hint--primary linkedin" target="_blank" aria-label="Linkedin" href="https://mx.linkedin.com/">
                                                                        <i class="fab fa-linkedin"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry-author">
                                                <div class="author-info">
                                                    <div class="author-avatar">
                                                        <img src="<?php echo $ROOT_PATH; ?>/assets/images/team/avatar-06-90x90.webp" alt="">
                                                        <div class="author-social-networks">
                                                            <div class="inner">
                                                                <a class="hint--bounce hint--top hint--primary" aria-label="Twitter" href="https://twitter.com" target="_blank">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>

                                                                <a class="hint--bounce hint--top hint--primary" aria-label="Facebook" href="https://facebook.com" target="_blank">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>

                                                                <a class="hint--bounce hint--top hint--primary" aria-label="Instagram" href="https://instagram.com" target="_blank">
                                                                    <i class="fab fa-instagram"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-description">
                                                        <h6 class="author-name">Owen Christ</h6>

                                                        <div class="author-biographical-info">
                                                            Harry Ferguson es un autor, bloguero y diseñador que vive en un suburbio de Washington, DC. Cuando no está diseñando, escribiendo en un blog o escribiendo, se puede encontrar a Ferguson con la cabeza metida en un libro o apuntando como un loco. </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="related-posts-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <!-- Single Valid Post Start -->
                                                        <a class="single-valid-post-wrapper" href="#">
                                                            <div class="single-blog__item">
                                                                <div class="single-valid__thum bg-img" data-bg="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-03-370x120.webp">
                                                                </div>

                                                                <div class="post-content">
                                                                    <h6 class="post-title font-weight--bold">Las identidades de los diseñadores y el sesgo social inconsciente</h6>
                                                                </div>

                                                            </div>
                                                        </a>
                                                        <!-- Single Valid Post End -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- Single Valid Post Start -->
                                                        <a class="single-valid-post-wrapper" href="#">
                                                            <div class="single-blog__item">
                                                                <div class="single-valid__thum bg-img" data-bg="<?php echo $ROOT_PATH; ?>/assets/images/blog/blog-05-370x120.webp">
                                                                </div>

                                                                <div class="post-content">
                                                                    <h6 class="post-title font-weight--bold">Las identidades de los diseñadores y el sesgo social inconsciente</h6>
                                                                </div>

                                                            </div>
                                                        </a>
                                                        <!-- Single Valid Post End -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="comment-list-wrapper">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4 class="widget-title section-space--mb_50">Comentarios (3)</h4>
                                                    </div>
                                                    <div class="col-lg-12">

                                                        <ol class="comment-list">
                                                            <li class="comment border-bottom">
                                                                <div class="comment-2">
                                                                    <div class="comment-author vcard">
                                                                        <img alt="" src="<?php echo $ROOT_PATH; ?>/assets/images/team/coment.webp">
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <div class="meta">
                                                                            <h6 class="fn">Edna Watson</h6>
                                                                        </div>
                                                                        <div class="comment-text">
                                                                            <p>Gracias por mantener siempre actualizada su plantilla HTML. Su nivel de apoyo y dedicación es insuperable.</p>
                                                                        </div>

                                                                        <div class="comment-actions">
                                                                            <div class="comment-datetime"> 16 de noviembre de 2018 a las 4:31 am </div><span> | </span> <a class="comment-reply-link" href="#">Responder</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><!-- comment End-->
                                                            <li class="comment border-bottom">
                                                                <div class="comment-2">
                                                                    <div class="comment-author vcard">
                                                                        <img alt="" src="<?php echo $ROOT_PATH; ?>/assets/images/team/comment-2.webp">
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <div class="meta">
                                                                            <h6 class="fn">Owen Christ</h6>
                                                                        </div>
                                                                        <div class="comment-text">
                                                                            <p>Gracias por mantener siempre actualizada su plantilla HTML. Su nivel de apoyo y dedicación es insuperable.</p>
                                                                        </div>

                                                                        <div class="comment-actions">
                                                                            <div class="comment-datetime"> 19 de noviembre de 2018 a las 4:31 am </div><span> | </span> <a class="comment-reply-link" href="#">Reply</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li><!-- comment End-->
                                                            <li class="comment">
                                                                <div class="comment-5">
                                                                    <div class="comment-author vcard">
                                                                        <img alt="" src="<?php echo $ROOT_PATH; ?>/assets/images/team/comment-3.webp">
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <div class="meta">
                                                                            <h6 class="fn">James Scott</h6>
                                                                            <div class="comment-datetime">
                                                                                13 de noviembre de 2018 a las 4:50 am </div>
                                                                        </div>
                                                                        <div class="comment-text">
                                                                            <p>Gracias por mantener siempre actualizada su plantilla HTML. Su nivel de apoyo y dedicación es insuperable.</p>
                                                                        </div>

                                                                        <div class="comment-actions">
                                                                            <div class="comment-datetime"> 12 de febrero de 2018 a las 6:31 am </div><span> | </span> <a class="comment-reply-link" href="#">Responder</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ol class="children">
                                                                    <li class="comment ">
                                                                        <div class="comment-6">
                                                                            <div class="comment-author vcard">
                                                                                <img alt="" src="<?php echo $ROOT_PATH; ?>/assets/images/team/reply-comm.webp">
                                                                            </div>
                                                                            <div class="comment-content">
                                                                                <div class="meta">
                                                                                    <h6 class="fn">Harry Ferguson</h6>
                                                                                    <div class="comment-datetime">
                                                                                        13 de febrero de 2019 a las 4:51 </div>
                                                                                </div>
                                                                                <div class="comment-text">
                                                                                    <p>Gracias por mantener siempre actualizada su plantilla HTML. Su nivel de apoyo y dedicación es insuperable.</p>
                                                                                </div>

                                                                                <div class="comment-actions">
                                                                                    <div class="comment-datetime"> 13 de noviembre de 2018 a las 4:31 am </div><span> | </span> <a class="comment-reply-link" href="#">Responder</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li><!-- comment End -->
                                                                </ol><!-- children End -->
                                                            </li><!-- comment End-->
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="comment-list-wrapper">

                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <h4 class="widget-title mb-20">Deja tu opinión aquí </h4>
                                                        <p>Su dirección de correo electrónico no será publicada. Los campos obligatorios están marcados *</p>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="contact-from-wrapper section-space--mt_30">
                                                            <form action="#" method="post">
                                                                <div class="contact-page-form">
                                                                    <div class="contact-input">
                                                                        <div class="contact-inner">
                                                                            <input name="name" type="text" placeholder="Tu Comentario *">
                                                                        </div>
                                                                        <div class="contact-inner">
                                                                            <input name="email" type="email" placeholder="Tu Correo *">
                                                                        </div>

                                                                    </div>
                                                                    <div class="contact-inner contact-message">
                                                                        <textarea name="comment" placeholder="Tu Comentario"></textarea>
                                                                    </div>
                                                                    <p class="comment-form-cookies-consent">
                                                                        <input type="checkbox">
                                                                        <label>Guardar mi nombre, correo electrónico y sitio web en este navegador para la próxima vez que comente.</label>
                                                                    </p>
                                                                    <div class="comment-submit-btn">
                                                                        <botón class="ht-btn ht-btn-md" type="submit">Enviar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
            <?php include '../bin/banner_registro.php'; ?>
            <!--========== Call to Action Area End ============-->
        </div>
        <!--====================  footer area ====================-->
        <?php include '../bin/footer.php'; ?>
        <!--====================  End of footer area  ====================-->
    </div>
    <!--====================  End of search overlay  ====================-->
    <!-- JS
    ============================================ -->
    <?php include '../bin/js.php'; ?>
</body>

</html>