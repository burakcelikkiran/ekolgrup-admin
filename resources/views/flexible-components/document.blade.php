@if($doc->document_id!=null)
<div class="text-center" style="padding: 10px 0">
<a class="btn btn-primary" href="/storage/{{ getImageLibraryImage($doc->document_id)->name }}" target="_blank">{{$doc->document_name}}</a>
</div>
@endif
