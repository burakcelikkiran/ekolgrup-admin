<x-app-layout>
    @section('icsayfa') <div class="ic-sayfa">@endsection
    @section('icsayfa-son') </div>@endsection
    <section class="page-header clearfix" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner clearfix">
                <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">{{$title}}</h2>
            </div>
        </div>
    </section>

    <section class="services-details">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Sidebar-->
                    <div class="col-xl-3 col-lg-8">
                        <div class="services-details__sidebar">
                            <div class="services-details__services-list-box wow fadeInUp animated" data-wow-delay="0.0s" data-wow-duration="1200ms" style="padding: 20px 10px 10px;">

                                <ul class="services-details__services-list list-unstyled">
                                    @foreach($iceriks as $icer)
                                    <li><a href="/hizmetler/{{$icer->slug}}">{{$icer->title}} <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Sidebar-->

                    <!--Start Services Details Content-->
                    <div class="col-xl-9">
                        <div class="services-details-content" style="margin-left: 5px;">
                            <div class="pricing-plan-one__content">
                                <div class="row">
                                @foreach($iceriks as $icer)
                                    <!--Start Single Pricing  Plan One-->
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.1s">
                                        <div class="pricing-plan-one__single metin-hizala">
                                            <div class="table-header" style="text-align: center; padding: 0;">
                                                <img style="width: 100%" src="/storage/{{getImageLibraryImage($icer->image_id)->name}}" alt="">
                                            </div>
                                            <div class="table-content" style="padding: 10px 5px 0px;">
                                                <h5>{{$icer->title}}</h5>
                                                <p>{{$icer->text}}</p>
                                            </div>
                                            <div class="table-footer" style="padding: 0px 30px 0px;">
                                                <a href="/hizmetler/{{$icer->slug}}" class="thm-btn"style="padding: 10px 20px 10px;">Sayfaya Git<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Pricing  Plan One-->
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Details Content-->
                </div>
            </div>
        </section>
        <script>
            document.getElementById("hizmetler").classList.add('current');
        </script>

        @section('title') {{ 'Tum Hizmetlerimiz'}} @endsection

        @section('seo_title') {{ 'Tum Hizmetlerimiz'}} @endsection

        @section('seo_description') {{'Tum Hizmetlerimiz'}} @endsection

        @section('seo_keywords') {{'Tum Hizmetlerimiz'}} @endsection

</x-app-layout>
