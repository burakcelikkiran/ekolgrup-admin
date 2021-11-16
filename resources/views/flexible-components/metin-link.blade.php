<div class="row" style="margin-top: 20px;">
    <div class="col-md-6">
        {!! $doc->text !!}
    </div>
    <div class="col-md-6">
        @if($doc->image_id!=null)
            <img src="/storage/{{ getImageLibraryImage($doc->image_id)->name }}" style="width: 100%;">
        @endif</div>
</div>

