<div class=" statbox widget box box-shadow">


    <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">

        @foreach($features as $feature)
            <div class="row">
                <div class="col-md-2">
                    <h6>{{$feature->name}}</h6>
                </div>

                <div class="col-md-6">
                    <select class="form-select mb-3" id="categoryId" name="featureValue[{{$loop->index}}]">
                        @forelse($feature->categoryFeatureValues as $value)
                            <option
                                value="{{$feature->id}}_{{@$value->id}}"{{-- {{@$value->id==@$product->category_id?'selected':''}}--}}>{{@$value->value}}</option>

                        @empty
                            dwad
                        @endforelse

                    </select>
                </div>
            </div>
        @endforeach

        <div class="col-sm-12 text-left">
            <button class="btn btn-success">

                <span wire:loading.remove>ذخیره</span>
                <div class="spinner-border text-white me-2 align-self-center loader-sm "
                     wire:loading></div>
            </button>
        </div>

    </form>


</div>
