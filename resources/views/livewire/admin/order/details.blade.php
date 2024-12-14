<div>
    @push('link')
        <link href="/admin/src/assets/css/dark/apps/invoice-preview.css" rel="stylesheet" type="text/css"/>
    @endpush
    <div class="row invoice layout-top-spacing layout-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="doc-container">

                <div class="row">

                    <div class="col-xl-9">

                        <div class="invoice-container">
                            <div class="invoice-inbox">

                                <div id="ct" class="">

                                    <div class="invoice-00001">
                                        <div class="content-section">

                                            <div class="inv--head-section inv--detail-section">

                                                <div class="row">

                                                    <div class="col-sm-6 col-12 mr-auto">
                                                        <div class="d-flex">
                                                            <img class="company-logo"
                                                                 src="{{$orderDetails->user->picture}}" alt="company">
                                                            <h3 class="in-heading align-self-center">{{$orderDetails->user->name}}</h3>
                                                        </div>
                                                        <p class="inv-email-address">{{$orderDetails->user->email}}</p>
                                                        <p class="inv-email-address">{{$orderDetails->user->mobile}}</p>
                                                    </div>

                                                    <div class="col-sm-6 text-sm-end">
                                                        <p class="inv-list-number mt-sm-3 pb-sm-2 mt-4" wire:ignore><span
                                                                class="inv-title">شماره سفارش : </span> <span
                                                                class="inv-number">#{{$orderDetails->order_number}}</span>
                                                        </p>
                                                        <p class="inv-created-date mt-sm-5 mt-3"><span
                                                                class="inv-title">تاریخ ثت سفارش : </span> <span
                                                                class="inv-date"> {{jalali($orderDetails->created_at)->format('d M Y | h:i')}}</span></p>
                                                        <p class="inv-due-date"><span class="inv-title">تاریخ آخرین تغییر : </span>
                                                            <span class="inv-date">{{jalali($orderDetails->updated_at)->format('d M Y | h:i')}}</span></p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="inv--detail-section inv--customer-detail-section">

                                                <div class="row">

                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                        <p class="inv-to">جزییات پرداخت </p>
                                                    </div>

                                                    <div
                                                        class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 text-sm-end mt-sm-0 mt-5">
                                                        <h6 class=" inv-title">جزییات ارسال</h6>
                                                    </div>

                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                        <p class="inv-customer-name">
                                                            شماره کارت:
                                                            {{$orderDetails->payment->cardNumber}}
                                                        </p>
                                                        <p class="inv-street-addr">
                                                            شماره مرجع :
                                                            {{$orderDetails->payment->refNumber}}

                                                        </p>
                                                        <p class="inv-email-address">درگاه:
                                                            {{$orderDetails->paymentMethod->name}}
                                                        </p>
                                                        <p class="inv-email-address badge text-white badge-{{$orderDetails->statusPaymentColor}}">
                                                            وضعیت پرداخت :
                                                            {{$orderDetails->payment->status}}
                                                        </p>
                                                    </div>

                                                    <div
                                                        class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1 text-sm-end">
                                                        <p class="inv-customer-name">آدرس :
                                                            {{$orderDetails->address->country->name}},
                                                            {{$orderDetails->address->state->name}},
                                                            {{$orderDetails->address->city->name}},
                                                            {{$orderDetails->address->address}},


                                                        </p>
                                                        <p class="inv-street-addr">کد پستی :
                                                            {{$orderDetails->address->postal_code}},
                                                        </p>
                                                        <p class="inv-street-addr">موبایل گیرنده :
                                                            {{$orderDetails->address->mobile}},
                                                        </p>
                                                        <p class="inv-street-addr">نوع ارسال :
                                                            {{$orderDetails->deliveryMethod->name}},
                                                        </p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="inv--product-table-section">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                        <tr>
                                                            <th scope="col">S.No</th>
                                                            <th scope="col">تصویر محصول</th>
                                                            <th scope="col">نام محصول</th>
                                                            <th class="text-end" scope="col">تعداد</th>
                                                            <th class="text-end" scope="col">Price</th>
                                                            <th class="text-end" scope="col">Amount</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($orderDetails->orderItems as $item)
                                                            <tr>
                                                                <td>{{$loop->index+1}}</td>
                                                                <td>
                                                                    <img class="rounded-3"
                                                                         src="/products/{{$item->product->id}}/small/{{@$item->product->coverImage->path}}"
                                                                         alt="">
                                                                </td>
                                                                <td>{{$item->product->name}}</td>
                                                                <td class="text-end">{{$item->quantity}}</td>
                                                                <td class="text-end">{{number_format($item->price)}}</td>
                                                                <td class="text-end">{{number_format($item->price*$item->quantity)}}</td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="inv--total-amounts">

                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="text-sm-end">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7 grand-total-title mt-3">
                                                                    <h4 class="">مبلغ نهایی : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount mt-3">
                                                                    <h4 class="">{{number_format($orderDetails->amount)}}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3">

                        <div class="invoice-actions-btn">

                            <div class="invoice-action-btn">

                                <div class="row">

                                    <div class="col-xl-12 col-md-3 col-sm-6">
                                        <p>تغییر وضعیت</p>
                                        <select class="form-control bg-{{@$statusColor}}" wire:change="changeStatus({{$orderDetails->id}},$event.target.value)">
                                            <option value="pending" {{$orderDetails->status =='pending' ? 'selected' : ''}}>pending</option>
                                            <option value="processing" {{$orderDetails->status =='processing' ? 'selected' : ''}}>processing</option>
                                            <option value="completed" {{$orderDetails->status =='completed' ? 'selected' : ''}}>completed</option>
                                            <option value="canceled" {{$orderDetails->status =='canceled' ? 'selected' : ''}}>canceled</option>
                                        </select>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
