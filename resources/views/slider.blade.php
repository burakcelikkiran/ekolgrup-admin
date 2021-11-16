<section class="banner-one clearfix slider-boyut" style=" min-height: 50px;">
    <div class="shape1 wow slideInRight" data-wow-delay="500ms" data-wow-duration="3500ms">
        <img src="/assets/images/shapes/banner-shape-1.png" alt="">
    </div>

    <div class="mix_carousel">
        <!--CAROUSEL START-->
        <div class="single_mix_carousel owl-carousel nav_style3">
            @if($slides!=null)
                @foreach($slides as $slide)
                    <div class="single_post post_type6 post_type9">
                        <div class="post_img gradient1">
                            <div class="img_wrap">
                                <a class="play_btn" href="@if($slide->slider_link!=null){{$slide->slider_link}}@endif">
                                    <img class="img-height" src="/storage/{{getImageLibraryImage($slide->image_id)->name}}">
                                </a>
                            </div>
                        </div>
                        <div class="single_post_text">
                            <div class="meta">
                                <a href="{{$slide->slider_link}}">{{$slide->slider_title}}</a>
                            </div>
                            @if($slide->slider_text!=null)
                            <h4><a href="/{{$slide->slider_link}}"> {{ Illuminate\Mail\Markdown::parse( $slide->slider_text) }}</a></h4>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <!--CAROUSEL END-->
</section>
