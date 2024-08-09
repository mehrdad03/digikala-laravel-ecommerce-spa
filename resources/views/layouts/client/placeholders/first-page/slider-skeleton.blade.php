<div>
    <style>
        .full-width-slider-skeleton {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .full-width-slide {
            width: 100%;
            height: 300px;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 10px;
            margin-bottom: 20px;
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
    <div class="full-width-slider-skeleton">
        <div class="full-width-slide"></div>
    </div>

</div>


