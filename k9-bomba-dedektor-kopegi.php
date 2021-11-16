<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - K9 Bomba Dedektör Köpekleri</title>
    <?php include ('head.php')?>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="">
    </div>
    <div class="page-wrapper">
        <div class="ic-sayfa">
        <?php include ('header.php')?>
        </div>
        <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            <div class="container">
                <div class="page-header__inner clearfix">
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Hizmetlerimiz</h2>
                </div>
            </div>
        </section>

        <section class="services-details">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-4 col-lg-8">
                        <?php include ('menu-sinir-guvenligi.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-8">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1 metin-hizala">
                                <h2 class="text-center">K9 Bomba Dedektör Köpekleri</h2>
                                <p>Gerek önleyici tedbir, gerekse bomba ihbarlarında arama yapmak ve ortamın güvenli hale getirilmesi hususunda her türlü el yapısı ve fabrikasyon patlayıcı maddeyi tanıma kabiliyetine sahip nitelikli bomba arama köpekleri ve idarecilerini yetiştirmek, ihtiyaç duyulması halinde her türlü organizasyon, toplantı ve konser alanlarında K-9 köpekler ve personel ile birlikte gerekli emniyet tedbirleri almak.</p>

                                <p>Süre : 13 Hafta ( 1 Hafta Teorik Eğitim, 12 Hafta Uygulamalı Eğitim)</p>

                                <p><img alt="" class="img-responsive" height="400" src="assets/doc/hizmet/sinir/5h45h4h_w900_h400.jpg" width="754"></p>

                                <p>&nbsp;</p>

                                <table border="1" cellpadding="1" cellspacing="1" style="width:500px;">
                                    <tbody>
                                    <tr>
                                        <td><img alt="" class="img-responsive" height="150" src="assets/doc/hizmet/sinir/k92-150x150.jpg" width="150"></td>
                                        <td><img alt="" class="img-responsive" height="150" src="assets/doc/hizmet/sinir/k9-150x150.jpg" width="150"></td>
                                        <td><img alt="" class="img-responsive" height="150" src="assets/doc/hizmet/sinir/qe3fqf-150x150.jpg" width="150"></td>
                                        <td><img alt="" class="img-responsive" height="150" src="assets/doc/hizmet/sinir/wegfwqe-150x150.jpg" width="150"></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <p>&nbsp;</p>
                            </div>

                        </div>
                    </div>
                    <!--End Services Details Content-->
                </div>
            </div>
        </section>

        <?php include ('footer.php')?>
        <?php include ('mobile-nav.php')?>
        <?php include ('script.php')?>
    </div><!-- /.page-wrapper -->
</body>

</html>