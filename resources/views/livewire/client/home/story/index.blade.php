<div x-intersect="initializeSwiper">
    <section class="container-fluid p-0 container-lg mt-4 story">
        <div class="d-flex py-2 justify-content-center align-items-center">
            <div class="swiper myStorySwiper pt-4">
                <div class="swiper-wrapper">
                    @foreach($stories as $item)
                        <div data-story="/stories/story/{{$item->story}}"
                             class="swiper-slide d-flex flex-column justify-content-center story-item"
                             data-bs-toggle="modal"
                             data-bs-target="#storyModal">
                            <a href="#">
                                <img width="80" height="80" src="/stories/thumbnail/{{$item->thumbnail}}" alt="story"/>
                            </a>
                            <p class="text-center my-2 fw-medium fs-7">{{$item->title}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Story Modal -->
    <div
        class="modal fade"
        id="storyModal"
        tabindex="-1"
        aria-labelledby="storyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" style="width: 500px;">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-bottom-0">
                    <button
                        type="button"
                        class="btn-close bg-white rounded-4"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner pb-5">
                            <div class="carousel-item active">
                                <video id="videoPlayer" class="rounded-4" controls style="width: -webkit-fill-available;;">
                                    <source id="videoSource" src="" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
