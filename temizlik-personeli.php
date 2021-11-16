<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Temizlik Personeli Temini</title>
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
                    <div class="col-xl-3 col-lg-8">
                        <?php include ('menu-temizlik.php')?> 
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Temizlik Personeli Temini</h2>

                                <img alt="" src="assets/doc/hizmet/temizlik/temizlik-personeli-temini.jpg" style="width: 100%;" title="">
                                <p>&nbsp;</p>
                                <p>Gelişen iş dünyasında pek çok sektörde olduğu gibi temizlik sektöründe de kurumlara temizlik firmalarından personel sağlamanın faydaları, her geçen gün daha da kanıtlanıyor.<br>
                                    <br>
                                    MNE Temizlik, tüm ölçeklerdeki otellerden, okullardan, şirketlerden hastanelere, bankalara kadar geniş bir yelpazede, temizlik öncesinde, sırasında ve sonrasında büyük bir titizlikle çalışır.<br>
                                    <br>
                                    Hizmetten önce sizin talep ve ihtiyaçlarınızı dinleyen ve sözleşme şartlarını buna göre belirleyen MNE Temizlik, hizmetin gerçekleşmesi için gereken ortamı hazırlar.<br>
                                    <br>
                                    Resmi aşamalardan hemen sonra kurumunuzun fiziksel şartlarına göre gereken donanımı, malzemeyi ve personeli temin eder. Standart bir temizlik yerine çalıştığı yerin özel şartlarını gözeterek hizmet sunar.<br>
                                    <br>
                                    Bu itinaya son derece önem veren MNE Temizlik, ne kadar tecrübeli ve uzman olsa da kadrosuna, kurumunuzun şartlarını anlatan özel bir kısa eğitim verir.<br>
                                    <br>
                                    Temizlik öncesi anlaşılan şartlar ne olursa olsun MNE Temizlik, kurumunuzla kurduğu ilişkiyi kesmez ve ihtiyacınız olan her zaman ve periyotta sizinle çalışmak için hazır bekler.<br>
                                    <br>
                                    <strong>Kurumunuzda temizlik personeli çalıştırmak neden bu kadar önemli?</strong><br>
                                    <br>
                                    Her şeyden önce sabit bir temizlik kadrosu kurmak için personel arama, eleme ve çalıştırma gibi süreçler söz konusu olur. Bu süreçlerin her biri zaman, zahmet ve maliyet gerektiren işlerdir.<br>
                                    <br>
                                    Aldığınız personelin sosyal güvencesi, vergisi, tazminatları ve maaşları gibi resmi yükümlülükleri de bu süreçlerin önemli bir noktasıdır.&nbsp;<br>
                                    <br>
                                    İşte bu ve benzeri tüm yükümlülük ve zahmetler nedeniyle MNE Temizlik`in personeliyle çalışmak hem size zamandan ve maliyetten kazandırır hem de yıllanmış güvencesi ve kalitesiyle MNE Temizlik`in hizmetinden faydalanmanızı sağlar.</p>
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