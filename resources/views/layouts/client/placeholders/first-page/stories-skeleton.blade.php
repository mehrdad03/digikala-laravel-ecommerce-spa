<div>
    <style>
        .story-container {
            display: flex;
            overflow-x: hidden;
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .story-item {
            flex: 0 0 auto;
            margin-right: 15px;
            scroll-snap-align: start;
            text-align: center;
        }

        .story-skeleton {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        .text-skeleton {
            width: 60px;
            height: 10px;
            border-radius: 5px;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: -200% 0;
            }
        }

    </style>
    <div class="container-fluid p-0 container-lg story">
        <div class="d-flex py-2 py-lg-5 py-md-3 justify-content-center align-items-center">
            <div class="story-container">
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
                <div class="story-item">
                    <div class="story-skeleton"></div>
                    <div class="text-skeleton mt-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>


