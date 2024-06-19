<div class="widget-content widget-content-area ecommerce-create-section">

    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="name">نام محصول</label>
            <input type="text" class="form-control" id="name" name="name"
                   wire:model.live.debounce.300ms="name">
        </div>
    </div>
    @error('name')
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
         wire:loading.remove>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <svg> ...</svg>
        </button>
        <strong>خطا !</strong> {{$message}}.</button>
    </div>
    @enderror
    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="slug">اسلاگ</label>
            <input type="text" class="form-control" id="slug" name="slug" wire:model="slug">
        </div>
    </div>
    @error('slug')
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
         wire:loading.remove>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <svg> ...</svg>
        </button>
        <strong>خطا !</strong> {{$message}}.</button>
    </div>
    @enderror
    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="meta_title">عنوان متا</label>
            <input type="text" class="form-control" name="meta_title" id="meta_title">
        </div>
    </div>
    @error('meta_title')
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
         wire:loading.remove>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <svg> ...</svg>
        </button>
        <strong>خطا !</strong> {{$message}}.</button>
    </div>
    @enderror
    <div class="row mb-4">
        <div class="col-sm-12">
            <label for="meta_description">توضحیات متا</label>
            <textarea type="text" class="form-control" id="meta_description"
                      name="meta_description"></textarea>
        </div>
    </div>
    @error('meta_description')
    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
         wire:loading.remove>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <svg> ...</svg>
        </button>
        <strong>خطا !</strong> {{$message}}.</button>
    </div>
    @enderror

</div>
