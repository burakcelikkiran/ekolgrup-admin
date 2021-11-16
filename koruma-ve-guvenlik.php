<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Koruma ve Güvenlik</title>
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
                                <img src="assets/doc/hizmet/koruma/securityguard.jpg" alt="" style="width: 100%">

                                <p><strong>KORUMA VE GÜVENLİK</strong></p>

                                <p>Her biri alanında uzman, profesyonel, istikrarlı ve sürdürülebilir görev anlayışına sahip kadrosuyla hizmetin başlangıcından itibaren kalite devamlılığını sağlayan hizmet anlayışıyla güvenlikte mükemmelliği sağlamıştır. Ekol Grup Güvenliğin amacı; hizmet ve ürün sunduğu tüm kurum/kuruluş ve özel müşterilerimizin verimliliğini, memnuniyetini, optimum finansman kullanımını ve sürdürülebilir başarılarını sağlamak için, ilgili alanların ihtiyaç, arz/talep, personel, ekipman, zaman, kaynak ve gereklilik analizlerini yaparak son kullanıcıya en doğru ürün ve/veya hizmetleri sunmaktır.</p>

                                <ul>
                                    <li>Gemi liman ve işletme emniyet planlarının hazırlanması ve onaylanması</li>
                                    <li>Yakın koruma</li>
                                    <li>Danışmanlık</li>
                                    <li>Gözetim ve araştırma</li>
                                    <li>Bina koruma</li>
                                    <li>Özel konutların korunması</li>
                                    <li>Özel arazi ve mülkiyetlerin fiziki güvenlik hizmetleri</li>
                                    <li>CCTV güvenlik sistemleri, stadyum ve spor kompleksleri</li>
                                    <li>Radyo ve televizyon kuruluşları</li>
                                    <li>Alışveriş merkezleri</li>
                                    <li>Özel davet ve toplantılarda koruma hizmetleri</li>
                                    <li>Güvenlik danışmanlığı</li>
                                    <li>Turistik otel ve konaklama güvenliği</li>
                                    <li>Para transferi (CIT)</li>
                                    <li>Bankalar</li>
                                    <li>Toplu taşıma işletmeleri</li>
                                    <li>Adliye</li>
                                    <li>Üniversite vb.</li>
                                </ul>
                                <p>&nbsp;</p>
                                <p>Kurumların özel güvenliğin sağlanması gibi hizmetleri sunan Ekol Grup Güvenlik danışmanlıktan güvenliğe, özel korumadan organizasyonlara kadar birçok alanda faaliyet göstermektedir.</p>
                                <p><strong>EKOL GRUP</strong> olarak sizlere de ulaşabilmek ümidiyle…</p>
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