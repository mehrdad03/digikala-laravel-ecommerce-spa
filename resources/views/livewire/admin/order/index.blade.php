<div class="col-md-12">

    @if(session()->has('success'))

        <div class="alert alert-icon-left alert-light-success alert-dismissible fade show mb-4" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <svg data-bs-dismiss="alert"> ...</svg>
            </button>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-check-square">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
            </svg>
            <strong>پیغام !</strong>
            {{ session()->get('success') }}
        </div>

    @endif

    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="d-flex  align-items-center">

                   <h4>لیست سفارشات</h4>
                   <input type="text" class="p-2" wire:model.live.debounce.300ms="search" placeholder="جستجو">

            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th width="50px" scope="col">#</th>
                        <th width="150px" scope="col">کد سفارش</th>
                        <th  scope="col">تاریخ</th>
                        <th scope="col" width="300px">کاربر</th>
                        <th scope="col" width="150px" class="bg-danger text-center" >مبلغ نهایی</th>
                        <th scope="col" class="text-center">وضعیت</th>
                        <th scope="col" class="text-center">پرداخت</th>

                        <th class="text-center" scope="col">جزییات</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($orders as $order)

                        <tr>
                            <td>
                                {{$loop->iteration + $orders->firstItem() - 1}}
                            </td>
                            <td>
                                {{$order->order_number}}
                            </td>
                            <td>
                                {{jalali($order->created_at)->format('d M Y | h:i')}}
                                <br>
                                {{$order->created_at->diffForHumans()}}
                            </td>

                            <td>
                                {{@$order->user->name}}
                                <br>
                                {{@$order->user->mobile}}
                                <br>
                                {{@$order->user->email}}
                            </td>
                            <td class="bg-danger text-center fs-5">{{number_format($order->amount)}}</td>
                            <td class="text-center">
                               <select class="form-control bg-{{$order->statusColor}}" wire:change="changeStatus({{$order->id}},$event.target.value)">
                                   <option value="pending" {{$order->status =='pending' ? 'selected' : ''}}>pending</option>
                                   <option value="processing" {{$order->status =='processing' ? 'selected' : ''}}>processing</option>
                                   <option value="completed" {{$order->status =='completed' ? 'selected' : ''}}>completed</option>
                                   <option value="canceled" {{$order->status =='canceled' ? 'selected' : ''}}>canceled</option>
                               </select>
                            </td>
                            <td>
                              <span class=" badge badge-{{$order->statusPaymentColor}}">{{$order->payment->status}}</span>
                            </td>
                            <td class="text-center">

                                <a href="{{route('admin.order.details',$order->id)}}"
                                   class="btn btn-primary"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-bs-original-title="جزییات">
                                    جزیات سفارش

                                </a>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
                {{$orders->links('layouts.admin.pagination')}}
            </div>

        </div>
    </div>

</div>



