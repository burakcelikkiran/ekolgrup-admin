<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Güvenlik Danışmanlık Hizmetleri</title>
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
                        <?php include ('menu-korumaguvenlik.php')?>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="services-details__text-box1 metin-hizala">
                                <h2 class="text-center">Güvenlik Danışmanlık Hizmetleri</h2>
                                <ul>
                                    <li>Güvenlik tedbirleri ile ilgili bilgi vermek, risk analizi yapmak, planlama ve kontrol hizmetleri sağlamak.</li>
                                    <li>Kendi bünyelerinde güvenlik birimi oluşturacak kurum veya kuruluşlara; 5188 sayılı yasaya uygun özel güvenlik teşkilatını kurmak, eğitim, kontrol ve atış hizmetleri vermek.</li>
                                    <li>Kanun ve Yönetmeliklerde değişen maddelere uygun olarak mevcut planlarda gerekli düzenlemeleri yapmak ve bu planları geliştirmek.</li>
                                    <li>Bina ve tesislerin inşaat başlangıcı ile birlikte kullanılacak güvenlik sistemlerini belirlemek, planlarını yaparak montajını yapmak.</li>
                                    <li>Elektronik güvenlik de dahil olmak üzere kullanılacak her türlü güvenlik malzemesini temin etmek.</li>
                                </ul>
                                <p><br>
                                    Bu hizmetimiz, kurumların güvenlik risklerinin saptanması, prosedürlerinin belirlenmesi ve uygulanması aşamasında, kurumla işbirliği içerisinde çalışmasını içeriyor. İhtiyaç duyulan güvenlik altyapısını saptıyor ve 5188 sayılı yasaya uyumu konularında danışmanlık hizmeti sunuyoruz.<br>
                                    <br>
                                    <strong>Güvenlik Danışmanlığı Hizmetlerimiz;</strong></p>
                                <ul>
                                    <li>Tehdit Değerlendirmesi</li>
                                    <li>Risk Analizi</li>
                                    <li>Güvenlik Planlarının Hazırlanması</li>
                                    <li>Güvenlik Sistemleri Konusunda Öneriler</li>
                                    <li>Kimyasal-Biyolojik-Radyolojik Tehdit Değerlendirmesi</li>
                                    <li>Güvenlik Denetimi</li>
                                    <li>Güvenlik Personeli Seviye Tespiti</li>
                                    <li>Sivil Savunma Planlarının Hazırlanması</li>
                                </ul>
                                <p><br>
                                    Ekol Grup kişi ve kurumlara güvenlik danışmanlığı hizmetleri verir. Özel ekipler koşulları ayrıntılı olarak inceler, gerekli önerileri hazırlar, ve her proje tam bir gizlilik içinde yürütülür.<br>
                                    &nbsp;</p>
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