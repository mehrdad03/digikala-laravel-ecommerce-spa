<div>
    <style>
        .package-suggestion {
            display: flex;
            gap: 1rem;
        }

        .package-suggestion .ad {
            width: 100%;
            height: 180px; /* ارتفاع بنرها */
            border-radius: 12px;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 400% 100%;
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0% {
                background-position: 100% 0;
            }
            100% {
                background-position: 0 0;
            }
        }


    </style>
    <div class="package-suggestion container">
        <div class="ad"></div>
        <div class="ad"></div>
        <div class="ad"></div>
        <div class="ad"></div>
    </div>

</div>


