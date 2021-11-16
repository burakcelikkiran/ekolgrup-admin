<section id="gallery">
    <div class="container">
        <div id="image-gallery">
            <div class="row">
                @foreach(($doc->image_id) as $image)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
                        <div class="img-wrapper">
                            <a href="/storage/{{ getImageLibraryImage($image)->name }}">
                                <img src="/storage/{{ getImageLibraryImage($image)->name }}" class="img-responsive">
                            </a>
                            <div class="img-overlay">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </div>
</section>


@section('script_gallery')

    <link rel="stylesheet" href="/css/style.css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script  src="/js/script.js"></script>
@endsection
