<!DOCTYPE html>
<html lang="tr">

<?php $page = 'iletisim'; ?>

<head>
    <title>Ekol Grup - İletişim</title>
    <?php include ('head.php')?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
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
                    <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">İletişim</h2>
                </div>
            </div>
        </section>
            <div id="map"></div>
        <div id="map-aciklama">
            <div class="col-md-12 col-sm-12 p-0">
                <section class="contact-box mt-1" style="padding: 0;">
                    <div class="row">
                        <div class="d-flex justify-content-center">
                            <div class="col-8 col-md-4 wow fadeInUp p-0 text-start" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <div class="section-title__tagline text-center">
                                    <span class="left"></span><h4 id="baslik">Haritadan Seçim Yapınız</h4><span class="right"></span>
                                </div>
                                <h2><a href="#"></a></h2>
                                <h6 class="mb-3" id="telefon"></h6>
                                <h6 class="mb-3 " id="konum" style="line-height: 2;"></h6>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
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
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 p-0">
                            <section class="contact-box mt-5" style="padding: 0;">
                                <div class="section-title__tagline text-center">
                                    <span class="left"></span>
                                    <h4>Anadolu Yakası (Merkez)</h4><span class="right"></span>
                                </div>
                                <div class="row">
                                    <!--Start Contact Box Single-->
                                    <div class="col-xl-5 col-lg-5 wow fadeInUp p-0" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                        <div class="contact-box__single style2 text-center">
                                            <div class="contact-box__single-icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="contact-box__single-text">
                                                <h2><a href="https://maps.google.com/?q=41.02128,29.11668" target="_blank">Adres</a></h2>
                                                <p style="padding: 0;margin: 0 20px;"><a href="https://maps.google.com/?q=41.02128,29.11668" target="_blank">Armağanevler Mah . Mithatpaşa Cad.  No:138 Kat:2,<br>Ümraniye - İstanbul</a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--End Contact Box Single-->
                                    <!--Start Contact Box Single-->
                                    <div class="col-6 col-sm-6 col-md-6 col-xxl-4 col-xl-4 col-lg-4 wow fadeInUp p-0" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                        <div class="contact-box__single style2 text-center">
                                            <div class="contact-box__single-icon">
                                                <span class="icon-letter"></span>
                                            </div>
                                            <div class="contact-box__single-text">
                                                <h2><a href="mailto:info@ekolgrup.com.tr">E - Posta</a></h2>
                                                <p><a href="mailto:info@ekolgrup.com.tr">info@ekolgrup.com.tr</a></p>

                                            </div>
                                        </div>
                                    </div>
                                    <!--End Contact Box Single-->
                                    <!--Start Contact Box Single-->
                                    <div class="col-6 col-sm-6 col-md-6 col-xxl-3 col-xl-3 col-lg-3 wow fadeInUp p-0" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                        <div class="contact-box__single style3 text-center">
                                            <div class="contact-box__single-icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <div class="contact-box__single-text">
                                                <h2><a href="tel:4449881">Telefon</a></h2>
                                                <p><a href="tel:4449881">444 9 881 </a></p>

                                            </div>
                                        </div>
                                    </div>
                                    <!--End Contact Box Single-->
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12 col-sm-12 p-0">
                            <section class="contact-box" style="padding: 0;">
                                <div class="section-title__tagline text-center">
                                    <span class="left"></span>
                                    <h4>Avrupa Yakası</h4><span class="right"></span>
                                </div>
                                <div class="row">
                                    <!--Start Contact Box Single-->
                                    <div class="col-xl-5 col-lg-4 wow fadeInUp p-0" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                        <div class="contact-box__single style2 text-center">
                                            <div class="contact-box__single-icon">
                                                <span class="icon-pin"></span>
                                            </div>
                                            <div class="contact-box__single-text">
                                                <h2><a href="https://maps.google.com/?q=40.99416619016763,28.849912855104265" target="_blank">Adres</a></h2>
                                                <p><a href="https://maps.google.com/?q=40.99416619016763,28.849912855104265" target="_blank">Şirinevler Mah. Tevfik Fikret Cad.<br>Taç İş Merkezi No: 2 Kat: 6<br>Bahçelievler / İSTANBUL</a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--End Contact Box Single-->
                                    <!--Start Contact Box Single-->
                                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6 wow fadeInUp p-0" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                        <div class="contact-box__single style2 text-center">
                                            <div class="contact-box__single-icon">
                                                <span class="icon-letter"></span>
                                            </div>
                                            <div class="contact-box__single-text">
                                                <h2><a href="mailto:info@ekolgrup.com.tr">E - Posta </a></h2>
                                                <p><a href="mailto:info@ekolgrup.com.tr">info@ekolgrup.com.tr</a></p>

                                            </div>
                                        </div>
                                    </div>
                                    <!--End Contact Box Single-->
                                    <!--Start Contact Box Single-->
                                    <div class="col-6 col-sm-6 col-md-6 col-xxl-3 col-xl-3 col-lg-3 wow fadeInUp p-0" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                        <div class="contact-box__single style3 text-center">
                                            <div class="contact-box__single-icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <div class="contact-box__single-text">
                                                <h2><a href="tel:+902122759495">Telefon </a></h2>
                                                <p><a href="tel:+902122759495">0212 275 94 95 </a></p>

                                            </div>
                                        </div>
                                    </div>
                                    <!--End Contact Box Single-->
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <section class="contact-page ">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="contact-page__inner wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="margin-top: 0; padding: 50px 10px 20px;">
                                        <div class=" text-center">
                                            <div class="section-title__tagline">
                                                <span class="left"></span>
                                                <h4>Bize Mesaj Gönderin</h4><span class="right"></span>
                                            </div>
                                            <p class="mb-0">Aşağıdaki iletişim formunu doldurarak bize istek, öneri ve şikayetlerinizi belirtebilirsiniz. "*" içeren alanların doldurulması zorunludur.</p>
                                        </div>
                                        <form action="https://alfredform.ko.com.tr/handle/6uHregjt0KnMpSnCV8aMFSPobzOz4aTSr4KCjqzJ" method="post" class="contact-page__form ">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <div class="contact-page__input-box">
                                                        <input type="text" placeholder="İsim *" name="ad" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <div class="contact-page__input-box">
                                                        <input type="text" placeholder="Soyisim *" name="soyad" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <div class="contact-page__input-box">
                                                        <input type="email" placeholder="Email adresi *" name="email" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                                    <div class="contact-page__input-box">
                                                        <input type="text" pattern="[0-9]{10}" placeholder="Telefon Numarası *" name="tel" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                    <div class="contact-page__input-box">
                                                        <textarea name="message" placeholder="İletmek İstediğiniz Mesajı Yazınız  *" required></textarea>
                                                    </div>
                                                    <div class="contact-page__btn">
                                                        <p class="pb-0 mb-0">Gönder butonuna basarak
                                                            <a href="kvkk.php" target="_blank" title="KVKK">KVKK Aydınlatma Metnini </a>
                                                            okuduğunuzu ve kabul ettiğinizi onaylıyorsunuz.</p>
                                                        <button type="submit">
                                                            <span class="thm-btn">Gönder</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>



        <?php include ('footer.php')?>
        <?php include ('mobile-nav.php')?>
        <?php include ('script.php')?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpRqZ9DnGDII3uBFTX-vphW5PlTat4lwY&callback=initMap&v=weekly" async></script>
        <script>
            function initMap() {
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 6,
                    center: { lat: 39, lng: 35 },
                });
                // Set LatLng and title text for the markers. The first marker (Boynton Pass)
                // receives the initial focus when tab is pressed. Use arrow keys to
                // move between markers; press tab again to cycle through the map controls.
                const tourStops = [
                    [{ lat: 41.02128, lng: 29.11668 }, "EKOL GRUP MERKEZ","444 9 881","Armağanevler Mah . Mithatpaşa Cad.  No:138 Kat:2, Ümraniye - İstanbul"],
                    [{ lat: 40.994158092295294, lng:  28.849928948357046 }, "MNE GÜVENLİK OKULLARI","0212 275 94 95","Şirinevler Mah. Tevfik Fikret Cad.Taç İş Merkezi No: 2 Kat: 6Bahçelievler / İSTANBUL"],
                    [{ lat: 40.20992, lng: 28.97818 }, "BURSA MARMARA BLG.MD.","0 224 451 51 52","Konak Mah. Yıldırım Cad. Karadut Sok. No:152 A Blok K:1 D:5 Nilüfer/BURSA"],
                    [{ lat: 38.61676, lng: 27.41345 }, "İZMİR/MANİSA EGE BLG.MD.","0 236 232 60 20","Teyfikiye Mah. Mimarsinan Blv. No:91-7 (A) Yunusemre/MANİSA"],
                    [{ lat: 39.93078, lng: 32.84421 }, "ANKARA İÇ ANADOLU BGL.MD.","0 312 428 28 15","Anıttepe Mah. Gazi Mustafa Kemal Bul. No: 95/3 Maltepe/ANKARA"],
                    [{ lat: 36.89052, lng: 30.69348 }, "ANTALYA AKDENİZ BLG.MD.","0 242 248 68 69","Altındağ Mah.100. yıl Bul. Yılmaz Apt. No:11/3 Muratpaşa/ANTALYA"],
                    [{ lat: 41.27128, lng: 36.35164 }, "SAMSUN KARADENİZ BLG.MD.","0 362 502 13 84","Kuzey Yıldızı Mah. 100. Yıl Bul. Baran Plaza No:38 A Blok D:21 Canik/SAMSUN"],
                    [{ lat: 37.0018, lng: 35.31258 }, "ADANA ÇUKUROVA BLG.MD.","0 322 458 90 04","Döşeme Mh. 60075 Sk. N:2 Baysan Sitesi A-2 Blok K:9 D:36 Seyhan/ADANA"],
                    [{ lat: 38.6735, lng: 39.22463 }, "ELAZIĞ DOĞU-GÜNEYDOĞU BLG.MD.","0 424 236 61 66","Çarşı Mh Antik Sk No: 2/1 Merkez/ELAZIĞ"],
                ];
                // Create an info window to share between markers.
                const infoWindow = new google.maps.InfoWindow();

                // Create the markers.
                tourStops.forEach(([position, title,tel,adres], i) => {
                    const marker = new google.maps.Marker({
                        position,
                        map,
                        title: `${i + 1}. ${title}`,
                        content:"<h6>"+title+"</h6> <a target='_blank' href='https://maps.google.com/?q="+position['lat']+","+position['lng']+"'>Haritada Aç</a> ",
                        optimized: false,
                    });



                    // Add a click listener for each marker, and set up the info window.
                    marker.addListener("click", () => {
                        infoWindow.close();
                        infoWindow.setContent(marker.content);
                        infoWindow.open(marker.getMap(), marker);
                        mapDetail(title,position,tel,adres);
                    });
                });
            }

            function mapDetail(title,position,tel,adres) {
                numara1=""
                const dizi = tel.split(" ");
                dizi.forEach((numara) => {
                    numara1+=numara;
                })
                document.getElementById("baslik").innerHTML =title;
                document.getElementById("konum").innerHTML ="<a target='_blank' href='https://maps.google.com/?q="+position['lat']+","+position['lng']+"'><span class='icon-pin mapstyle'></span>"+adres+"</a>";
                document.getElementById("telefon").innerHTML ="<span class='icon-phone-call mapstyle'></span><a href='tel:"+numara1+"'>"+tel+"</a>";
                document.getElementById("map-aciklama").style.display = "block";
            }
        </script>
        <style>
            #map {
                height: 500px;
            }

            html,
            body {
                height: 400px;
                margin: 0;
                padding: 0;
            }

        </style>
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