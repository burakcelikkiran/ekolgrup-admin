<div class="modal micromodal-slide" id="modal-1" aria-hidden="false">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title" style="max-height: 90vh;">
            <header class="modal__header" style="height: 20px;">
                <h2 class="modal__title" id="modal-1-title">
                </h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="modal-1-content">
                @if(nova_get_setting('isactive')==2)
                    {!! nova_get_setting('videoframe')  !!}
                    <style> iframe{width: 625px;}</style>
                @endif
                @if(nova_get_setting('isactive')==1)
                    <img alt="" src="/storage/{{nova_get_setting('popupimage')}}" style="max-height: 85vh;">
                @endif
                @if(nova_get_setting('isactive')==0)
                    <p>{{nova_get_setting('popupmetin')}}</p>
                @endif
            </main>
            <footer class="modal__footer text-center">
                @if(nova_get_setting('buttonactive')==1)
                    <a href="{{nova_get_setting('popuplink','/anasayfa')}}" target="_blank">
                        <button class="text-center modal__btn modal__btn-primary" style="height: 30px;width: 150px; font-size: large;}">
                            {{nova_get_setting('popupyazi','Popup Yazısı')}}</button>
                        @endif
                    </a>
            </footer>
        </div>
    </div>
</div>

@section('script')
    @if(nova_get_setting('isactive')!=3)
        <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
        <script>

            MicroModal.show('modal-1',
                {
                    onShow: modal => console.info(`${modal.id} is shown`), // [1]
                    onClose: modal => $('#modal-1-content').html(''), // [2]
                    openClass: 'is-open', // [5]
                    disableScroll: true, // [6]
                    disableFocus: false, // [7]
                    awaitOpenAnimation: false, // [8]
                    awaitCloseAnimation: false, // [9]
                    debugMode: true // [10]
                }
            );
        </script>
    @endif
@endsection
