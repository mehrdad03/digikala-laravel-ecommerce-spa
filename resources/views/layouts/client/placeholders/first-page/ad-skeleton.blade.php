<div>
    <style>
        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 16px;
        }

        .category {
            background-color: #fff;
            border-radius: 8px;
            padding: 16px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .skeleton-image, .skeleton-text {
            background: linear-gradient(-90deg, #e0e0e0 0%, #f0f0f0 50%, #e0e0e0 100%);
            background-size: 200% 200%;
            animation: shimmer 1.5s infinite;
            border-radius: 4px;
        }

        .skeleton-image {
            width: 60px;
            height: 60px;
            margin-bottom: 8px;
        }

        .skeleton-text {
            width: 80%;
            height: 16px;
        }

        @keyframes shimmer {
            0% {
                background-position: 200% 0;
            }
            100% {
                background-position: -200% 0;
            }
        }
    </style>
    <div class="container">
        <h2>خرید بر اساس دسته‌بندی</h2>
        <div class="categories">
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
            <div class="category">
                <div class="skeleton-image"></div>
                <div class="skeleton-text"></div>
            </div>
        </div>
    </div>

</div>


