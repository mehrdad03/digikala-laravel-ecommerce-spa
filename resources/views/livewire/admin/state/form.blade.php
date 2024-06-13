<div class="col-md-4">

    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>مدیریت استان ها</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="name" class="form-label">نام استان</label>
                        <input type="text" class="form-control" id="name" wire:model="name" name="name"
                               placeholder="">
                    </div>
                </div>

                @error('name')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert" wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong>خطا !</strong> {{$message}}.</button>
                </div>
                @enderror
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="country" class="form-label">کشور</label>
                        <select id="country" class="form-control" name="countryId" wire:model="countryId" placeholder="انتخاب کشور" autocomplete="off" wire:ignore>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                @error('countryId')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                     wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong>خطا !</strong> {{$message}}.</button>
                </div>
                @enderror


                <button type="submit" class="btn btn-primary _effect--ripple waves-effect waves-light">
                    <span  wire:loading.remove> ثبت</span>
                    <div class="spinner-border text-white me-2 align-self-center loader-sm " wire:loading></div>
                </button>
            </form>

        </div>
    </div>
</div>
