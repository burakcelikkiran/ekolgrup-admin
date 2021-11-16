<div class="modal micromodal-slide" id="modal-1" aria-hidden="true" style="z-index: 10000;">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title" style="max-width: 650px; max-height: 90vh;">
            <header class="modal__header">
                <h2 class="modal__title" id="modal-1-title"></h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main style="margin-top: 0px !important; margin-bottom: 0px !important;" class="modal__content" id="modal-1-content">
                <div class=" text-center">

<!--                        <h1 style="font-weight: bold; font-style: normal; color: #be0a0e; text-align: center" >CERRAHPAŞA PEDİATRİ GÜNLERİ</h1>-->
                        <img src="assets/doc/popup2.jpeg" alt="Popup" style="width: 100%;">

<!--                    <a class="theme-btn btn-style-one mt-1" target="_blank" href="doc/cerrahpasa-bildiri-kitabi.pdf?v=578">-->
<!--                        <span class="btn-title">Bildiri Kitabını İndirmek için Tıklayınız.</span>-->
<!--                    </a>-->
                </div>
            </main>
        </div>
    </div>
</div>
<!-- modal içeriği burada biter -->
<script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
<script>
    // MicroModal.init({
    //     onShow: modal => console.info(`${modal.id} is shown`), // [1]
    //     onClose: modal => console.info(`${modal.id} is hidden`), // [2]
    //     // openTrigger: 'data-custom-open', // [3]
    //     closeTrigger: 'data-custom-close', // [4]
    //     openClass: 'is-open', // [5]
    //     disableScroll: true, // [6]
    //     disableFocus: false, // [7]
    //     awaitOpenAnimation: false, // [8]
    //     awaitCloseAnimation: false, // [9]
    //     debugMode: false // [10]
    // });
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
<link rel="stylesheet" href="assets/css/modal.css?v=9143">