<!DOCTYPE html>
<html lang="tr">

<?php $page = 'hizmetlerimiz'; ?>

<head>
    <title>Ekol Grup - Eğitim Talep Formu</title>
    <?php include('head.php') ?>
</head>

<body>
<div class="preloader">
    <img class="preloader__image" width="60" src="assets/images/loader.png" alt="">
</div>
<div class="page-wrapper">
    <div class="ic-sayfa">
        <?php include('header.php') ?>
    </div>
    <section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner clearfix">
                <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Hizmetlerimiz</h2>
            </div>
        </div>
    </section>

    <div class="container">
        <?php error_reporting(E_ALL & ~E_NOTICE);
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        parse_str(parse_url($url)['query'], $params);

        if ($params['q']=='basarili')
        {
            ?>
            <div class="alert alert-success text-center" id="mydiv21" role="alert" style="margin-top: 20px;">
                Form Gönderme İşlemi Başarılı
            </div>
            <?php
        }
        if ($params['q']=='basarisiz')
        {
            ?>
            <div class="alert alert-danger text-center" id="mydiv22" role="alert" style="margin-top: 20px;">
                Form Gönderme İşlemi Başarısız
            </div>
            <?php
        }
        ?>
    </div>
    <section class="services-details">
        <div class="container">

            <div class="row">
                <!--Start Services Details Sidebar-->
                <div class="col-xl-4 col-lg-8">
                    <?php include('menu-egitim.php') ?>
                </div>
                <!--End Services Details Sidebar-->

                <!--Start Services Details Content-->
                <div class="col-xl-8">
                    <div class="services-details-content" style="margin-left: 5px;">
                        <div class="services-details__text-box1">
                            <h2 class="text-center">Eğitim Talep Formu</h2>

                            <form action="https://alfredform.ko.com.tr/handle/hb9mNUId9Tz3vo0ccTVWEw6pRmOImbMeuTEyfiYF" method="POST">
                                <div class="row form-elem">

                                    <div class="col-sm-6 form-elem">
                                        <label for="Ad_Soyad">Adınız Soyadınız *</label>
                                        <div class="default-inp form-elem">
                                            <input type="text" name="Ad Soyad" id="user-name" required>
                                        </div>
                                        <br>
                                        <label for="Do_um_Tarihi">Doğum Tarihiniz *</label>
                                        <div class="default-inp form-elem">
                                            <input type="date" name="Doğum Tarihi" id="user-birthday"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 form-elem">
                                        <label for="Email">Email Adresiniz *</label>
                                        <div class="default-inp form-elem">
                                            <input type="email" name="Email" id="user-email" placeholder="mail@mail.com"
                                                   required>
                                        </div>
                                        <br>
                                        <label for="Telefon">Telefon Numaranız *</label>
                                        <div class="default-inp form-elem">
                                            <input name="Telefon" id="user-phone" type="tel" pattern="[0-9]{10}"
                                                   placeholder="555 444 12 34" required>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <label for="Mezuniyet_Durumu">Mezuniyet Durumunuz *</label>
                                <div class="default-inp form-elem">
                                    <select class="form-control" data-val="true"
                                            data-val-required="The field Mezuniyet Durumunuz * is required"
                                            id="Mezuniyet_Durumu" name="Mezuniyet Durumu" required>
                                        <option selected="selected" value="İlköğretim">İlköğretim</option>
                                        <option value="Lise">Lise</option>
                                        <option value="Yüksek Okul">Yüksek Okul</option>
                                        <option value="Üniversite">Üniversite</option>
                                    </select>
                                </div>
                                <br>
                                <label for="Son_Mezun_Olunan_Okul">En Son Mezun Olduğunuz Okul Adı *</label>
                                <div class="default-inp form-elem">
                                    <input class="form-control" data-val="true"
                                           data-val-required="The field En Son Mezun Olduğunuz Okul Adı * is required"
                                           id="Son_Mezun_Olunan_Okul" name="Son Mezun Olunan Okul" placeholder=""
                                           type="text" required>
                                </div>
                                <br>
                                <label for="Adres">Açık Adres *</label>
                                <div class="default-inp form-elem">
                                    <input class="form-control" data-val="true"
                                           data-val-required="The field Açık Adres * is required" id="Adres"
                                           name="Adres" placeholder="Mahalle / Cadde / Sokak / Numara / İlçe / İl"
                                           type="text" required>
                                </div>
                                <br>
                                <label for="Talep_Edilen_Egitim_Turu">Talep Edilen Eğitim Türünü Seçiniz *</label>
                                <div class="default-inp form-elem">
                                    <select class="form-control" data-val="true"
                                            data-val-required="The field Talep Edilen Eğitim Türünü Seçiniz * is required"
                                            id="Talep_Edilen_Egitim_Turu" name="Talep Edilen Eğitim Türü" required>
                                        <option selected="selected" value="Silahsız">Silahsız</option>
                                        <option value="Silahlı">Silahlı</option>
                                        <option value="Silahsız (Yenileme)">Silahsız (Yenileme)</option>
                                        <option value="Silahlı (Yenileme)">Silahlı (Yenileme)</option>
                                    </select>
                                </div>

                                <div class="form-elem default-inp mt-3">
                                    <textarea id="Message" name="Açıklama" placeholder="Mesaj"></textarea>
                                </div>
                                <div class="form-elem text-center">
                                    Gönder butonuna basarak
                                    <a href="kvkk.php" target="_blank" title="KVKK">KVKK Aydınlatma Metnini </a>okuduğunuzu
                                    ve kabul ettiğinizi onaylıyorsunuz.<br><br>
                                    <button type="submit" class="btn btn-success btn-default" style="padding:10px 50px;">Gönder</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>
    <?php include('mobile-nav.php') ?>
    <?php include('script.php') ?>
    <script type="text/javascript">
        setTimeout(function() {
            $('#mydiv21').fadeOut('slow');
        }, 6000); // <-- time in milliseconds
        setTimeout(function() {
            $('#mydiv22').fadeOut('slow');
        }, 6000); // <-- time in milliseconds
    </script>
</div><!-- /.page-wrapper -->
</body>

</html>