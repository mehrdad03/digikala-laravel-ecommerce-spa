<div class="container mx-auto align-self-center">

    <div class="row">

        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
            <div class="card mt-3 mb-3">

                <form class="card-body" wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
                    @if (session()->has('message'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12 mb-3">

                            <h2>ورود </h2>
                            <p>برای ورود به پنل مدیریت ایمیل و پسورد خود را وارد کنید</p>

                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">ایمیل</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label class="form-label">رمز عبور</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="mb-4">
                                <button class="btn btn-secondary w-100">ورود</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>

    </div>

</div>

