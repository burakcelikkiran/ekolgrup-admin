
@if($doc->image_id!=null)
<img alt="Foto" class="post-info " src="/storage/{{ getImageLibraryImage($doc->image_id)->name }}" style=" width: 100%">
@endif

