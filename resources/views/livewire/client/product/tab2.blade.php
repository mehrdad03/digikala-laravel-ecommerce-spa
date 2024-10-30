<div id="review-content" class="content-div mx-lg-5 {{$activeTab==2 ?'active' : ''}}">
    <div class="d-flex flex-column mb-3">
        <h5>بررسی تخصصی</h5>
        <div class="border-title"></div>
    </div>
    <div class="content-section">
        {!! $longDescription !!}

        <button class="toggle-btn fs-8 text-info mt-2">
            بیشتر
            <svg
                width="15"
                height="15"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>
            </svg>
        </button>
    </div>
</div>
