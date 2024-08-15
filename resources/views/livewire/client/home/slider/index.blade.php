<div x-intersect="initializeSwiper">
    <section class="container-fluid p-0">
        <div
            id="carouselExampleInterval"
            class="carousel slide"
            data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleInterval"
                    data-bs-slide-to="5"
                    aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">

                @foreach($sliders as $item)
                    <div class="carousel-item {{$loop->index==0 ?'active':''}}" data-bs-interval="2000">
                        <img src="sliders/{{$item->image}}" class="d-block w-100" alt="{{$item->title}}" title="{{$item->title}}"/>
                    </div>
                @endforeach

            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>
