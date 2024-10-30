<div id="commentModal" wire:ignore.self
     class="modal fade"
     tabindex="-1"
     aria-labelledby="commentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fs-7" id="commentModalLabel">دیدگاه و امتیاز من</h6>
                <button type="button" class="btn-close mx-0" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>

            <form wire:submit="submitReview(Object.fromEntries(new FormData($event.target)))">
                <div class="modal-body">
                    <div class="d-flex align-items-start justify-content-center">
                        <div>
                            <img src="/client/assets/Product/nothingPhone/1.webp" alt="phone" width="70"/>
                            <p class="fs-9 text-secondary fw-light mt-4">
                                {{verta()->format('%d  %B، %Y')}}
                            </p>
                        </div>
                        <h5 class="fs-7 px-5">

                            {{$name}}

                        </h5>
                    </div>
                    <hr/>
                    <h6 class="fs-7 fw-bold my-5">دیدگاه خود را شرح دهید</h6>

                    <div class="mb-3">
                        <label for="commentTitle" class="form-label fs-8">عنوان نظر</label>
                        <input wire:model="title" name="title" type="text" class="form-control fs-8"
                               id="commentTitle"/>
                    </div>
                    @error('title')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror

                    <!-- Positive Points Section -->
                    <h6 class="fs-8 mt-5">نکات مثبت</h6>
                    <div
                        class="form-group mt-3 d-flex align-items-center justify-content-between border rounded-3">
                        <input wire:model="positiveInput" type="text" id="inputTextPositive"
                               class="form-control border-0"/>
                        <button type="button" wire:click="addItem('positive')" id="addButtonPositive"
                                class="bg-transparent border-0 fs-3 m-2">+
                        </button>
                    </div>
                    @error('positiveInput')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror

                    <ul id="positiveList" class="list-group p-0">
                        @foreach($positiveItems as  $index=>$item)
                            <li class="list-group-item border-0 d-flex justify-content-between align-items-center my-2">
                                <div class="d-flex align-items-center gap-2">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         class="text-success">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 4.5v15m7.5-7.5h-15"></path>
                                    </svg>
                                    {{$item}}
                                </div>
                                <button wire:click="removeItem('positive',{{$index}})"
                                        class="deleteButton border-0 bg-transparent">
                                    <svg width="18" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         class="text-secondary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                    </svg>
                                </button>
                            </li>
                        @endforeach
                    </ul>

                    <!-- Negative Points Section -->
                    <h6 class="fs-8 mt-5">نکات منفی</h6>
                    <div
                        class="form-group mt-3 d-flex align-items-center justify-content-between border rounded-3">
                        <input wire:model="negativeInput" type="text" id="inputTextNegative"
                               class="form-control border-0"/>
                        <button type="button" wire:click="addItem('negative')" id="addButtonNegative"
                                class="bg-transparent border-0 fs-3 m-2">+
                        </button>
                    </div>
                    @error('negativeInput')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror
                    <ul id="negativeList" class="list-group p-0">

                        @foreach($negativeItems as $index=> $item)
                            <li class="list-group-item border-0 d-flex justify-content-between align-items-center my-2">
                                <div class="d-flex align-items-center gap-2">
                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         class="text-danger">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/>
                                    </svg>
                                    {{$item}}
                                </div>
                                <button wire:click="removeItem('negative',{{$index}})"
                                        class="deleteButton border-0 bg-transparent">
                                    <svg width="18" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         class="text-secondary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                    </svg>
                                </button>
                            </li>
                        @endforeach

                    </ul>

                    <!-- comment textarea -->
                    <div class="mt-5">
                        <label for="exampleFormControlTextarea1" class="form-label fs-8"
                        >متن نظر<span class="text-danger">*</span></label
                        >
                        <textarea name="comment" wire:model="comment"
                                  class="form-control"
                                  id="exampleFormControlTextarea1"
                                  rows="3"
                                  placeholder="برای ما بنویسید..."></textarea>
                    </div>
                    @error('comment')
                    <div class="alert alert-danger mt-2">{{$message}}</div>
                    @enderror

                    <button type="submit" class="btn btn-danger w-100 mt-3">ثبت امتیاز و دیدگاه</button>

                    @if($submitSuccessAlert)
                        <div class="alert alert-success mt-2">
                            دیدگاه شما با موفقت ثبت شد. بعد از تایید مدیریت نمایش داده میشود.
                        </div>
                    @endif


                    <p class="fs-9 text-center my-3">
                        ثبت دیدگاه به معنی موافقت با<a href="#" class="text-info"> قوانین انتشار دیجی‌کالا </a>است.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
