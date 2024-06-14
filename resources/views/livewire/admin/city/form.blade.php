<div class="col-md-4">

    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>مدیریت شهر ها</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="name" class="form-label">نام شهر</label>
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
                        <label for="country" class="form-label">استان</label>
                        <select id="country" class="form-control" name="stateId" wire:model="stateId" placeholder="انتخاب کشور" autocomplete="off" wire:ignore>
                            @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                @error('stateId')
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
