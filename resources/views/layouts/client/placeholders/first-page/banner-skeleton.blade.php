<div>
    <style>
        .supermarket-skeleton {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #f7f7f7;
            border-radius: 10px;
            overflow: hidden;
        }

        .skeleton-text {
            width: 150px;
            height: 20px;
            background: linear-gradient(90deg, #e0e0e0 25%, #f0f0f0 50%, #e0e0e0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 5px;
        }

        .skeleton-products {
            display: flex;
            gap: 10px;
        }

        .skeleton-product {
            width: 70px;
            height: 70px;
            background: linear-gradient(90deg, #e0e0e0 25%, #f0f0f0 50%, #e0e0e0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 50%;
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
    <div class="supermarket-skeleton container my-4 bg-secondary-subtle rounded-4 superMarketSuggest overflow-hidden">
        <div class="skeleton-text"></div>
        <div class="skeleton-products">
            <div class="skeleton-product"></div>
            <div class="skeleton-product"></div>
            <div class="skeleton-product"></div>
            <div class="skeleton-product"></div>
            <div class="skeleton-product"></div>
        </div>
    </div>
</div>
