<div class="row mb-4 layout-spacing layout-top-spacing">

    <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="widget-content widget-content-area ecommerce-create-section">

            <div class="row mb-4">
                <div class="col-sm-12">
                    <label for="name">نام محصول</label>
                    <input type="text" class="form-control" id="name" wire:model.live.debounce.300ms="name">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-12">
                    <label for="slug">اسلاگ</label>
                    <input type="text" class="form-control" id="slug" wire:model="slug" readonly>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-12">
                    <label for="meta_title">عنوان متا</label>
                    <input type="text" class="form-control" id="meta_title">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-12">
                    <label for="meta_description">توضحیات متا</label>
                    <textarea type="text" class="form-control" id="meta_description"></textarea>
                </div>
            </div>

        </div>
        <div class="widget-content widget-content-area ecommerce-create-section mt-3">
            <div class="row">
                <div class="col-md-8">
                    <label for="product-images">Upload Images</label>
                    <div class="multiple-file-upload">
                        <input type="file"
                               class="filepond file-upload-multiple"
                               name="filepond"
                               id="product-images"
                               multiple
                               data-allow-reorder="true"
                               data-max-file-size="3MB"
                               data-max-files="5">
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="switch form-switch-custom switch-inline form-switch-primary mt-4">
                        <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                        <label class="switch-label" for="showPublicly">Display publicly</label>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">

        <div class="row">
            <div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
                <div class="widget-content widget-content-area ecommerce-create-section">
                    <div class="row">

                        <div class="col-xxl-12 col-md-6 mb-4">
                            <label for="price">قیمت</label>
                            <input type="text" class="form-control" id="price" name="price" value="">
                        </div>
                        <div class="col-xxl-12 col-md-6 mb-4">
                            <label for="stock">موجودی</label>
                            <input type="text" class="form-control" id="stock" name="stock" value="">
                        </div>
                        <div class="col-xxl-12 col-md-6 mb-4">
                            <label for="categoryId">دسته بندی</label>
                            <select class="form-select" id="categoryId" name="categoryId">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-xxl-12 col-md-6 mb-4">
                            <label for="sellers">فروشنده</label>
                            <select class="form-select" id="sellers" name="sellers">
                                @foreach($sellers as $seller)
                                    <option value="{{$seller->id}}">{{$seller->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
                <div class="widget-content widget-content-area ecommerce-create-section">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <label for="discount">درصد تخفیف</label>
                            <input type="text" class="form-control" name="discount" id="discount" value="">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="discount_duration">تاریخ انقضا</label>
                            <input type="date" class="form-control" name="discount_duration" id="discount_duration"
                                   value="">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <div class="switch form-switch-custom switch-inline form-switch-danger">
                                <input class="switch-input" type="checkbox" name="featured" role="switch" id="featured">
                                <label class="switch-label" for="featured">کالای ویژه</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn-success w-100">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
