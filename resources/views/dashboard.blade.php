<x-app-layout>
    <!--Start Banner One-->
    @include('slider')
    <!--End Banner One-->

    <section class="features-one clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-one__content-box">
                        <div class="main-slider-three__left-carousel owl-carousel">
                            @foreach($habers as $haber)
                                <div class="testimonial-one__single">
                                    <div class="features-one__single wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="features-one__single-left">
                                            <div class="features-one__single-left-text">
                                                <h4><a href="/haberler">{{$haber->about}}</a></h4>
                                            </div>
                                        </div>
                                        <div class="features-one__single-right">
                                            <div class="features-one__single-right-btn">
                                                <a href="/haberler"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Features One End-->

    <!--Service Two Start-->
    <section class="service-two">
        <div class="service-two__bg" style="background-image: url(/assets/images/backgrounds/service-two-bg.png);">
        </div>
        <div class="container">

            <div class="service-two__content-box">
                <div class="service-two__inner">
                    <div class="row">
                        <!--Start Single Service Two-->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="service-two__single">
                                <div class="service-two__single-icon">
                                    <img src="assets/images/icon/about-one--about-icon1.png" alt="">
                                </div>
                                <div class="service-two__single-text">
                                    <h4><a href="#">Uzman Kadro</a></h4>
                                    <p>Her biri kendi konusunda uzman, profesyonel, istikrarlı ve sürdürülebilir görev anlayışına sahip kadromuzla hizmetinizdeyiz.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Two-->
                        <!--Start Single Service Two-->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="service-two__single">
                                <div class="service-two__single-icon">
                                    <img src="assets/images/icon/features-v3-icon8.png" alt="">
                                </div>
                                <div class="service-two__single-text">
                                    <h4><a href="#">Eğitim ve Disiplin</a></h4>
                                    <p>Kişisel/Kurumsal haklarınızı korumak ve güvenliğinizi sağlamak için eğitimli ve disiplinli güvenlik personellerimiz ile yanınızdayız.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Single Service Two-->
                        <!--Start Single Service Two-->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                            <div class="service-two__single">
                                <div class="service-two__single-icon">
                                    <img src="assets/images/icon/features-v4-icon3.png" alt="">
                                </div>
                                <div class="service-two__single-text">
                                    <h4><a href="#">Yapılanma</a></h4>
                                    <p>Türkiye'de ve yurtdışın da toplam 7.500 personelimiz ile müşterilerimizin ihtiyaçlarına uçtan uca çözüm sunmaktayız.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Service Two End-->

    <!--Pricing  Plan One Start-->
    <section class="pricing-plan-one clearfix">
        <div class="pricing-plan-one__left-bg" style="background-image: url(/assets/images/backgrounds/pricing-plan-v1-left-bg.png);"></div>
        <div class="pricing-plan-one__right-bg" style="background-image: url(/assets/images/backgrounds/pricing-plan-v1-right-bg.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="pricing-plan-one__content">
                        <div class="row">
                            @foreach($anasayfa as $doc)
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                                    <div class="pricing-plan-one__single style2" style="min-height: 620px; margin-bottom: 20px;">
                                        <div class="table-header" style="text-align: center;">
                                            <div class="table-header__bg" style="background-image: url(/assets/images/backgrounds/pricing-plan-v1-bg.png);">
                                            </div>
                                            @if($doc->image_id!=null) <img style="width: 85%" src="/storage/{{getImageLibraryImage($doc->image_id)->name}}" alt=""> @endif
                                        </div>
                                        <div style="text-align: center;">
                                            <h4 style="background: white; padding-top: 10px;"> @if($doc->title!=null) {{$doc->title}} @endif </h4>
                                        </div>
                                        <div class="table-content" style="padding-bottom: 0px;">
                                            <p style="padding-bottom: 0px;"> @if($doc->text!=null) {{$doc->text}} @endif </p>
                                        </div>
                                        <div class="table-footer" >
                                            <a href=" @if($doc->link!=null) {{$doc->link}} @endif " @if($doc->target==1) target="_blank" @endif class="thm-btn">Sayfaya Git<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Pricing  Plan One End-->
    <script>
        document.getElementById("anasayfa").classList.add('current');
    </script>
    @if(nova_get_setting('isactive')!=3)
        @include('layouts.popup')
    @endif

    @section('title') {{ 'Anasayfa'}} @endsection

    @section('seo_title') {{ 'Anasayfa'}} @endsection

    @section('seo_description') {{nova_get_setting('description')}} @endsection

    @section('seo_keywords') {{nova_get_setting('keywords')}} @endsection
</x-app-layout>
