<div id="detail-content" class="content-div mx-lg-5 {{$activeTab==3 ?'active' : ''}}">
    <div class="d-flex flex-column mb-3">
        <h5>مشخصات</h5>
        <div class="border-title"></div>
    </div>
    <div class="content-section">
        <div class="d-flex justify-content-between justify-content-lg-start me-5 gap-5">

            <div class="content-section w-100">
                <div class="d-flex flex-column justify-content-start gap-3 align-items-center flex-wrap">
                    @foreach($productFeatures as $item)
                        <div class="d-flex flex-row gap-4 fs-8 text-secondary w-100">
                            <p class="w-25">{{$item->categoryFeature->name}}</p>
                            <p class="text-secondary w-75">{{$item->categoryFeatureValue->value}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="more-content"></div>
            </div>
        </div>
    </div>
</div>
