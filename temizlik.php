<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Temizlik</title>
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
                            <div class="services-details__text-box1 metin-hizala">
                                
                                <img alt="" src="assets/doc/hizmet/temizlik/mne-temizlik.jpg" style="width: 100%;">
                                <p>&nbsp;</p>
                                <h2 class="text-center">Temizlik</h2>

                                <p>MNE Temizlik Hizmetleri olarak gayemiz daha iyi bir hizmet ve temizlik anlayışını geliştirmektir. Günümüz yaşam koşullarında hijyen en önemli konu olup hayatlarımızda büyük bir yeri vardır. Bakıldığında gayet temiz görünen yüzeyler ve cisimler ışıl ışıl tertemiz; ama gerekli hijyen sağlanmış mı? Ev ve Ofis temizliklerinizde, temizlik hizmeti yapacak olan personel çok önemlidir. Kendi konusunda uzmanlaşmış ve deneyimli personel hem müşteri memnuniyetini arttırır hem de yapılacak işin daha profesyonel şekilde yapılmasını sağlar. MNE Temizlik Hizmetleri olarak müşteri memnuniyetini herşeyden üstün tutarız.<br>
                                    <br>
                                    Firmamız, tecrübeli yöneticiler liderliğinde fabrikaların, hastanelerin, tıp merkezlerinin, alışveriş merkezlerinin, ofislerin, villaların, dairelerin tüm genel temizlik hizmetleri, periyodik temizlik hizmetleri, dış cephe hizmetlerini en iyi şekilde sunmaktadır.<br>
                                    <br>
                                    Temel Kalite politikalarımız çerçevesinde oluşturduğumuz hizmet stratejilerimiz ışığında, verdiğimiz kaliteli hizmetle ileri ve saygın bir kuruluş olarak; müşteri tercihlerinde bir numara olmak ve çalışanlarımız, müşterilerimiz, tedarikçilerimizle; güvenli, huzurlu, şeffaf ve demokratik bir ortam oluşturarak bunun sürekliliğini sağlamaktır.</p>

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