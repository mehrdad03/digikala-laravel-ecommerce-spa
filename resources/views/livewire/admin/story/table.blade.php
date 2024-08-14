<div class="col-md-8">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>لیست استوری ها</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">عنوان</th>
                        <th scope="col">تصویر بند انگشتی</th>
                        <th scope="col">استوری</th>

                        <th class="text-center" scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($stories as $item)

                        <tr>
                            <td>
                                {{$loop->iteration + $stories->firstItem() - 1}}
                            </td>
                            <td>
                                <div class="media">

                                    <div class="media-body align-self-center">
                                        <h6 class="mb-0">{{$item->title}}</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="/stories/thumbnail/{{$item->thumbnail}}" width="70" alt=""></td>
                            <td>
                                <button data-story-title="{{$item->title}}" data-story="/stories/story/{{$item->story}}" type="button" class="btn btn-primary mr-2 _effect--ripple waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#storyModal">
                                   نمایش استوری
                                </button>
                            </td>
                            <td class="text-center">
                                <div class="action-btns d-flex align-items-center">
                                    <a href="javascript:void(0);"
                                       wire:confirm="آیا مطمئن هستید؟"
                                       wire:click="delete({{$item->id}})"
                                       class="action-btn btn-delete bs-tooltip"
                                       data-toggle="tooltip" data-placement="top" title=""
                                       data-bs-original-title="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-trash-2">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg>
                                    </a>
                                    <div class="form-check form-check-primary form-check-inline ms-3">
                                        <input   wire:confirm="آیا مطمئن هستید؟"  wire:change="changeStatus({{$item->id}})"
                                            {{$item->status?'checked': ''}}
                                            class="form-check-input" type="checkbox" id="form-check-default">

                                    </div>

                                </div>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
                {{$stories->links('layouts.admin.pagination')}}
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="storyModal" tabindex="-1" role="dialog" aria-labelledby="storyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " style="width: 400px" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="storyModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg> ... </svg>
                </button>
            </div>
            <div class="modal-body">
                <video id="videoPlayer" controls style="width: -webkit-fill-available;;">
                    <source id="videoSource" src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

        </div>
    </div>
</div>

<!-- اسکریپت‌های ضروری -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // به تمام دکمه‌های با ویژگی data-story event listener اضافه کنید
        $('button[data-story]').on('click', function() {
            // دریافت URL ویدیو از data-story
            var storyUrl = $(this).data('story');
            var storyTitle = $(this).data('story-title');

            // تنظیم URL به عنوان src تگ video
            $('#videoSource').attr('src', storyUrl);
            $('.modal-title').html(storyTitle);

            // بارگذاری و پخش ویدیو
            var videoPlayer = $('#videoPlayer').get(0);
            videoPlayer.load();
            videoPlayer.play();
        });

        // هنگامی که مدال بسته می‌شود
        $('#storyModal').on('hide.bs.modal', function() {
            var videoPlayer = $('#videoPlayer').get(0);
            videoPlayer.pause(); // توقف ویدیو
            videoPlayer.currentTime = 0; // تنظیم ویدیو به ابتدای آن
        });
    });
</script>

