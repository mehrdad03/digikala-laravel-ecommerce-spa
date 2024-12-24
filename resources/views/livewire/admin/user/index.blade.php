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

                <h4>لیست کاربران</h4>
                <input type="text" class="p-2" wire:model.live.debounce.300ms="search" placeholder="جستجو">

            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th  scope="col">#</th>
                        <th  scope="col">شماره تلفن</th>
                        <th  scope="col">ایمیل</th>
                        <th  scope="col">تاریخ ثبت نام</th>

                        <th class="text-center" scope="col">جزییات</th>
                    </tr>
                    </thead>
                    <tbody>


                    @foreach($users as $item)

                        <tr>
                            <td>
                                {{$loop->iteration + $users->firstItem() - 1}}
                            </td>
                            <td>
                                {{$item->mobile}}
                            </td>
                            <td>
                                {{$item->email}}
                            </td>

                            <td>
                                {{jalali($item->created_at)->format('d M Y | h:i')}}
                                <br>
                                {{$item->created_at->diffForHumans()}}
                            </td>


                            <td class="text-center">

                                <a href="{{route('admin.order.index')}}/?user={{$item->id}}"
                                   class="btn btn-primary"
                                   data-toggle="tooltip" data-placement="top" title=""
                                   data-bs-original-title="جزییات">
                                  سفارشات
                                    (
                                    {{$item->orders_count}}
                                    )

                                </a>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
                {{$users->links('layouts.admin.pagination')}}
            </div>

        </div>
    </div>

</div>



