<div>
    <style>
        .ad-skeleton {
            display: flex;
            gap: 20px;
        }

        .ad-skeleton .skeleton-box {
            flex: 1;
            height: 200px; /* Adjust the height as needed */
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 10px;
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

    <div class="ad-skeleton container my-4">
        <div class="skeleton-box"></div>
        <div class="skeleton-box"></div>
    </div>

</div>


