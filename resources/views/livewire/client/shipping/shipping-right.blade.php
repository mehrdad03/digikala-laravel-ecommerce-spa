<div class="shipping-right" >
    <div class="shipping-address mb-3">
        <div class="d-flex mb-3 align-items-center justify-content-between pr-2 pl-1">
                <span class="fs-5 fw-bold">
                    آدرس های شما :
                </span>
            <div class="add-new-address d-flex justify-content-end">
                <button class="d-flex align-items-center  openModalBtn" wire:click="getProvinces('add')">
                    <i class="fa fa-plus ml-2"></i>
                    افزودن آدرس جدید
                </button>
            </div>
        </div>
        @foreach($addressList as $item)
            <div class="shipping-address__item d-flex align-items-center  {{$loop->first ? 'active' : ''}}" wire:ignore.self wire:click="getAddressId({{$item->id}})" >
                <i class="fa-light fa-location-dot ml-3 fs-4"></i>
                <div class="shipping-address__details">
                    <span class="d-block">
                        ارسال به آدرس انتخاب شده
                    </span>
                    <span>
                       {{$item->address}}
                    </span>
                    <button class="address-edit__btn d-flex align-items-center openModalBtn " wire:click="editAddress({{$item->id}})">
                        ویرایش آدرس
                        <i class="fa fa-chevron-left mr-2"></i>
                    </button>
                </div>
            </div>
        @endforeach
    </div>

    <div class="shipping-type " wire:ignore>
                <span class="fs-5 fw-bold mb-3 d-block">
                   نحوه ارسال :
                </span>
        @foreach($deliveries as $item)
            <div class="shipping-type__item d-flex align-items-center {{$loop->first ? 'active' : ''}}" wire:click="changeDeliveryPrice({{$item->id}})" >
                <i class="fa fa-truck ml-3"></i>
                <div class="">
                    {{$item->name}}
                    <span class="shipping-type__price">
                     {{  number_format($item->price)}}
                        تومان
                    </span>
                </div>

            </div>
        @endforeach
    </div>
</div>
