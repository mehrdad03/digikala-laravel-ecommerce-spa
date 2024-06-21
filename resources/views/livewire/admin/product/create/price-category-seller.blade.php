<div class="col-xxl-12 col-xl-8 col-lg-8 col-md-7 mt-xxl-0 mt-4">
    <div class="widget-content widget-content-area ecommerce-create-section">
        <div class="row">

            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="price">قیمت</label>
                <input type="text" class="form-control" id="price" name="price" value="{{@$product->price}}">
            </div>
            @error('price')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg> ...</svg>
                </button>
                <strong>خطا !</strong> {{$message}}.</button>
            </div>
            @enderror
            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="stock">موجودی</label>
                <input type="text" class="form-control" id="stock" name="stock" value="{{@$product->stock}}">
            </div>
            @error('stock')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg> ...</svg>
                </button>
                <strong>خطا !</strong> {{$message}}.</button>
            </div>
            @enderror
            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="categoryId">دسته بندی</label>
                <select class="form-select" id="categoryId" name="categoryId">
                    @forelse($categories as $category)

                        <option value="{{@$category->id}}" {{@$category->id==@$product->category_id?'selected':''}}>{{@$category->name}}</option>

                    @empty
                        dwad
                    @endforelse

                </select>
            </div>
            @error('categoryId')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg> ...</svg>
                </button>
                <strong>خطا !</strong> {{$message}}.</button>
            </div>
            @enderror
            <div class="col-xxl-12 col-md-6 mb-4">
                <label for="sellers">فروشنده</label>
                <select class="form-select" id="sellers" name="sellerId">
                    @foreach($sellers as $seller)
                        <option value="{{$seller->id}}" {{$seller->id==$product->seller_id ?'selected':''}}>{{$seller->shop_name}}</option>
                    @endforeach
                </select>
            </div>
            @error('sellerId')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                 wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg> ...</svg>
                </button>
                <strong>خطا !</strong> {{$message}}.</button>
            </div>
            @enderror
        </div>
    </div>
</div>
