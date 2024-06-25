<div class="statbox widget box box-shadow">
    <div class="widget-header">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                <h4>
                    محتوا برای محصول
                {{$productName}}
                </h4>
            </div>
        </div>
    </div>
    <div class="widget-content widget-content-area">

        <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
            <div class="row mb-4">
                <div class="col-sm-12">
                    <label for="short_description">معرفی محصول</label>
                    <textarea class="form-control" rows="10" wire:model="shortDescription" id="short_description" name="short_description"></textarea>
                </div>
            </div>
            @error('short_description')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg> ...</svg>
                </button>
                <strong>خطا !</strong> {{$message}}.</button>
            </div>
            @enderror
            <div class="row mb-4">
                <div class="col-sm-12" wire:ignore>
                    <label for="long_description">بررسی تخصصی</label>
                    <textarea class="form-control" id="long_description" wire:model="longDescription" name="long_description"></textarea>
                </div>
            </div>
            @error('long_description')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg> ...</svg>
                </button>
                <strong>خطا !</strong> {{$message}}.</button>
            </div>
            @enderror

           <div class="text-left">
               <button type="submit" class="btn btn-primary _effect--ripple waves-effect waves-light">ذخیره</button>
           </div>
        </form>


    </div>

    @push('script')
        <script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
        <script>
            document.addEventListener('livewire:init', () => {

                const editor=CKEDITOR.replace('long_description',{
                    contentsLangDirection: 'rtl',
                    height: 500,
                })
                editor.on('change',function (event) {
                    console.log(event.editor.getData());
                    @this.set('longDescription',event.editor.getData())
                })
            })

        </script>

    @endpush
</div>
