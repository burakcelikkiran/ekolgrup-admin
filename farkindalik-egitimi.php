<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>


<head>
    <title>Ekol Grup - Farkındalık Eğitimleri</title>
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
                                <h2 class="text-center">Farkındalık Eğitimleri</h2>


                                <h5>Savaş Bölgesi ve Kirli Alanlarda Hareket Tarzı Belirleme ve Alınabilecek Tedbirler Kursu</h5>
                                <p>Süre: 4 Gün</p>
                                <p>&nbsp;</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img alt="" src="assets/doc/hizmet/sinir/ara-bombalar-nleme_w500_h500.jpg" style="width:100% ;">
                                    </div>

                                    <div class="col-sm-6">
                                        <img alt="" src="assets/doc/hizmet/sinir/sava-blgesi-8_w500_h500.jpg" style="width:100% ;">
                                    </div>

                                    <div class="col-sm-12">
                                        <table border="1" cellpadding="1" cellspacing="1">
                                            <tbody>
                                            <tr>
                                                <td><img alt="" src="assets/doc/hizmet/sinir/sava-blgesi-1_w262_h175.jpg" style="width: 100%;"></td>
                                                <td><img alt="" src="assets/doc/hizmet/sinir/sava-blgesi-2_w262_h175.jpg" style="width: 100%;"></td>
                                                <td><img alt="" src="assets/doc/hizmet/sinir/sava-blgesi-31_w262_h175.jpg" style="width: 100%;"></td>
                                                <td><img alt="" src="assets/doc/hizmet/sinir/sava-blgesi-4_w262_h175.jpg" style="width: 100%;"></td>
                                                <td><img alt="" src="assets/doc/hizmet/sinir/sava-blgesi-5_w262_h175.jpg" style="width: 100%;"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p></p>
                                    <div class="col-sm-6">
                                        <h5>Bomba Tehdidi ve Şüpheli Paket Olay Yeri Tedbirleri Kursu</h5>
                                        <p>Süre: 4 gün</p>
                                        <img alt="" src="assets/doc/hizmet/sinir/bomba-tehtit_w500_h500.jpg" style="width: 100%;">
                                    </div>

                                    <div class="col-sm-6">
                                        <h5>Bomba İhbarlarında Hareket Tarzı ve Alınmsı Gereken Tedbirler Kursu</h5>
                                        <p>&nbsp;</p>
                                        <img alt="" src="assets/doc/hizmet/sinir/bomba-ihbar-1_w500_h500.jpg" style="width: 100%;">
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5>İntihar Saldırıları ve Araç Bombalar</h5>
                                                <img alt="" src="assets/doc/hizmet/sinir/intihar-saldrlar_w500_h500.jpg" style="width: 100%;">
                                            </div>
                                            <div class="col-sm-6">

                                                <p>Gerçekleştirilen intihar saldırıları ve araç bombalarda olay yerinin yönetilmesini, incelenmesi ve delillerin usulüne uygun olarak toplanıp muhafaza edilmesini, gerekli analizlerin yaptırılmasını ve olayla ilgili raporların düzenlenmesini sağlayacak nitelikte personel yetiştirmek .</p>
                                                <p>Süre : 1 Hafta ( Teorik ve Uygulamalı Eğitim)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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