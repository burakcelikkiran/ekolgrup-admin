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
                        <div class="services-details__services-list-box wow fadeInUp animated" data-wow-delay="0.0s" data-wow-duration="1200ms">
                            <ul class="services-details__services-list list-unstyled">
                                @foreach($iceriks as $cont)
                                <li><a href="/insan-kaynaklari/{{$cont->slug}}">{{$cont->menu_name}} <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                                @endforeach
                                    <li><a href="/insan-kaynaklari/basvuru-formu">Başvuru Formu<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Services Details Sidebar-->

                <!--Start Services Details Content-->
                <div class="col-xl-9">
                    <div class="services-details-content metin-hizala" style="margin-left: 5px;">
                        <div class="services-details__text-box1">
                            <h2 class="text-center">{{$icerik->title}}</h2>
                            @foreach($icerik->content as $doc)
                                @include('flexible-components.' . $doc->name())
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--End Services Details Content-->
            </div>
        </div>
    </section>
        <script>
            document.getElementById("insan-kaynaklari").classList.add('current');
        </script>
        @section('title') @if($icerik->seo_title!=null) {{$icerik->seo_title}} @else {{$icerik->title}} @endif @endsection

        @section('seo_title') @if($icerik->seo_title!=null) {{$icerik->seo_title}} @else {{$icerik->title}} @endif @endsection

        @section('seo_description') @if($icerik->meta_description!=null) {{$icerik->meta_description}} @else{{nova_get_setting('description')}} @endif @endsection

        @section('seo_keywords') @if($icerik->meta_keywords!=null) {{$icerik->meta_keywords}} @else{{nova_get_setting('keywords')}} @endif @endsection

</x-app-layout>
