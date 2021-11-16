<x-app-layout>
    @section('icsayfa') <div class="ic-sayfa">@endsection
        @section('icsayfa-son') </div>@endsection
    <section class="page-header clearfix" style="background-image: url(/assets/images/backgrounds/page-header-bg.jpg);">
        <div class="container">
            <div class="page-header__inner clearfix">
                <h2 class="wow slideInDown animated" data-wow-delay="0.3s" data-wow-duration="1500ms">Sıkça Sorulan Sorular</h2>
            </div>
        </div>
    </section>

        <section class="services-details">
            <div class="container">
                {{\Illuminate\Mail\Markdown::parse(nova_get_setting('sorular'))}}
            </div>
        </section>
        @section('title') {{ 'Sıkça Sorulan Sorular'}} @endsection

        @section('seo_title') {{ 'Sıkça Sorulan Sorular'}} @endsection

        @section('seo_description') {{ 'Sıkça Sorulan Sorular'}} @endsection

        @section('seo_keywords') {{ 'Sıkça Sorulan Sorular'}} @endsection
</x-app-layout>
