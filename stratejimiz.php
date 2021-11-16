<!DOCTYPE html>
<html lang="tr">

<?php $page = 'kurumsal'; ?>

<head>
    <title>Ekol Grup - Hakkımızda</title>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Kurumsal</h2>
                </div>
            </div>
        </section>

        <section class="services-details">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-3 col-lg-8">
                        <?php include ('menu-hakkimizda.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content metin-hizala" style="margin-left: 5px;">
                            <div class="services-details__text-box1">
                                <h2 class="text-center">Stratejimiz</h2>
                                <p>Rekabet Gücüne sahip sektöre odaklanmak, Marka gücü ve Pazar payını arttırmak, değişen hukuk kurallarına uyum sağlayıp, faaliyet gösterdiğimiz alanlarda lider olmaktır.
                                    Çevreye, topluma ve çalışanlarına karşı sorumluluklarının bilincinde, teknoloji ve kalite açısından, sektörde lider bir kuruluş olarak politikamız müşterilerimize beklentilerinin üzerinde ürün ve hizmet sunarak memnuniyetlerini sağlamaktır.
                                    Bu doğrultuda amacımız, öncelikle kalite, çevre duyarlılığı ve iş güvenliğini sağlayacak işbirliği ve güven çerçevesinde çalışarak maliyetlerimizi düşürmek, verimliliğimizi ve uzun vadeli karlılığımızı arttırmak, bütün faaliyet sahalarında ve hizmet birimlerinde tüm faaliyetlerimizi sistematik ve düzenli bir şekilde değerlendirerek sürekli daha iyiye ve doğruya yönelmektir.
                                    Çalışmalarımız kapsamında başta çevre, iş sağlığı ve güvenliği olmak üzere ilgili tüm yasal şartlara uymayı, çevresel etkileri, ve kaza risklerini önlemeyi taahhüt ederiz.
                                    EKOL GRUP olarak sizlere de ulaşabilmek ümidiyle…</p>
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