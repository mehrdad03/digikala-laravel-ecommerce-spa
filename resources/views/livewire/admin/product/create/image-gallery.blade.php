<div class="widget-content widget-content-area ecommerce-create-section mt-3">
    <div class="row">
        <div class="col-md-12">
            <label for="product-images">آپلود تصاویر محصول</label>
            <div class="multiple-file-upload">

                <div class="field-wrapper" x-data="{isUploading:false,progress:0 }"
                     x-on:livewire-upload-start="isUploading=true"
                     x-on:livewire-upload-finish="isUploading=false"
                     x-on:livewire-upload-error="isUploading=false"
                     x-on:livewire-upload-progress="progress=$event.detail.progress"
                >

                    <input class="form-control" type="file" wire:model="photos" multiple>

                    <div x-show="isUploading" class="progress mt-3 ltr">
                        <div class="progress-bar progress-bar-striped  bg-danger progress-bar-animated"
                             role="progressbar" x-bind:style="`width:${progress}%`" aria-valuenow="10"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
                @error('coverIndex')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2"
                     role="alert"
                     wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong>خطا !</strong> {{$message}}.</button>
                </div>

                @enderror

                <div class="d-flex flex-wrap">

                    @foreach($photos as $index=>$photo)
                        @if(in_array($photo->getMimeType(),['image/jpeg',  'image/png', 'image/jpg', 'image/gif', 'image/webp']))

                            <div class="item w-25 m-2">
                                <img src="{{ $photo->temporaryUrl() }}" class="w-100 rounded" alt="">
                                <div class="d-flex justify-content-between align-items-center mt-2 bg-dark p-2 rounded">
                                    <div class="form-check form-check-primary form-check-inline">
                                        <input type="radio" id="cover_image" class="form-check-input"
                                               {{$index==$coverIndex ? 'checked' : ''}} wire:click="setCoverImage({{$index}})"
                                               name="cover_image">
                                        <label for="cover_image" class="text-white">به عنوان کاور</label>

                                    </div>
                                    <a href="javascript:void(0);" class="action-btn text-danger btn-delete bs-tooltip"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       wire:click="removePhoto({{$index}})"
                                       data-bs-original-title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                </div>

                            </div>
                        @endif

                    @endforeach

                </div>

                @error('photos.*')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2Z"
                     role="alert"
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
</div>
