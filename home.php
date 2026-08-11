<?php
include __DIR__."/header.php";

?>
<body>
    <!-- Hero Section -->
    <section class="py-4">
        <div class="container">
            <div class="row g-3">
                
                <!-- 1. Left Sidebar: Category Menu -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="bg-white rounded p-2 shadow-sm h-100">
                        <div class="list-group list-group-flush category-menu">
                            <a href="#" class="list-group-item list-group-item-action border-0 py-2 d-flex align-items-center justify-content-between">
                                <span><i class="bi bi-phone me-2 text-muted"></i> Phones & Tablets</span>
                                <i class="bi bi-chevron-right text-muted small"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 py-2 d-flex align-items-center justify-content-between">
                                <span><i class="bi bi-laptop me-2 text-muted"></i> Electronics</span>
                                <i class="bi bi-chevron-right text-muted small"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 py-2 d-flex align-items-center justify-content-between">
                                <span><i class="bi bi-tv me-2 text-muted"></i> Appliances</span>
                                <i class="bi bi-chevron-right text-muted small"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 py-2 d-flex align-items-center justify-content-between">
                                <span><i class="bi bi-watch me-2 text-muted"></i> Fashion</span>
                                <i class="bi bi-chevron-right text-muted small"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 py-2 d-flex align-items-center justify-content-between">
                                <span><i class="bi bi-house-heart me-2 text-muted"></i> Home & Office</span>
                                <i class="bi bi-chevron-right text-muted small"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 py-2 d-flex align-items-center justify-content-between">
                                <span><i class="bi bi-controller me-2 text-muted"></i> Gaming</span>
                                <i class="bi bi-chevron-right text-muted small"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 py-2 d-flex align-items-center justify-content-between">
                                <span><i class="bi bi-heart-pulse me-2 text-muted"></i> Health & Beauty</span>
                                <i class="bi bi-chevron-right text-muted small"></i>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0 py-2 d-flex align-items-center justify-content-between">
                                <span><i class="bi bi-cart-plus me-2 text-muted"></i> Supermarket</span>
                                <i class="bi bi-chevron-right text-muted small"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 2. Main Swiper Carousel Banner -->
                <div class="col-lg-7 col-md-8">
                    <div class="swiper hero-slider rounded shadow-sm overflow-hidden h-100">
                        <div class="swiper-wrapper">
                            
                            <!-- Slide 1 -->
                            <div class="swiper-slide bg-dark text-white p-5 d-flex align-items-center" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://picsum.photos/800/400?random=1') center/cover no-repeat; min-height: 380px;">
                                <div>
                                    <span class="badge bg-warning text-dark mb-2 px-3 py-2 fw-bold">FLASH SALE</span>
                                    <h1 class="fw-bold display-6">Up to 50% Off</h1>
                                    <p class="lead">Latest Smartphones & Accessories</p>
                                    <a href="#" class="btn btn-brand px-4 py-2 fw-bold rounded">SHOP NOW</a>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide bg-dark text-white p-5 d-flex align-items-center" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://picsum.photos/800/400?random=2') center/cover no-repeat; min-height: 380px;">
                                <div>
                                    <span class="badge bg-light text-dark mb-2 px-3 py-2 fw-bold">NEW ARRIVALS</span>
                                    <h1 class="fw-bold display-6">Upgrade Your Home</h1>
                                    <p class="lead">Top tier appliances at affordable prices.</p>
                                    <a href="#" class="btn btn-brand px-4 py-2 fw-bold rounded">EXPLORE MORE</a>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide bg-dark text-white p-5 d-flex align-items-center" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://picsum.photos/800/400?random=3') center/cover no-repeat; min-height: 380px;">
                                <div>
                                    <span class="badge bg-danger mb-2 px-3 py-2 fw-bold">LIMITED TIME</span>
                                    <h1 class="fw-bold display-6">Fashion Trends 2026</h1>
                                    <p class="lead">Step out in style with curated outfits.</p>
                                    <a href="#" class="btn btn-brand px-4 py-2 fw-bold rounded">DISCOVER</a>
                                </div>
                            </div>

                        </div>
                        
                        <!-- Pagination & Navigation Controls -->
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next text-white d-none d-sm-flex"></div>
                        <div class="swiper-button-prev text-white d-none d-sm-flex"></div>
                    </div>
                </div>

                <!-- 3. Right Side Promo Cards -->
                <div class="col-lg-2 col-md-4 d-none d-md-block">
                    <div class="d-flex flex-column gap-3 h-100">
                        
                        <!-- Promo Box 1 -->
                        <div class="bg-white p-3 rounded shadow-sm text-center flex-fill d-flex flex-column justify-content-center">
                            <i class="bi bi-headset fs-2 text-brand"></i>
                            <h6 class="fw-bold mb-1 mt-2">HELP CENTER</h6>
                            <p class="text-muted small mb-2">Guide to customer service</p>
                            <a href="#" class="btn btn-outline-dark btn-sm rounded-pill fw-semibold">Get Help</a>
                        </div>

                        <!-- Promo Box 2 -->
                        <div class="bg-white p-3 rounded shadow-sm text-center flex-fill d-flex flex-column justify-content-center">
                            <i class="bi bi-box-arrow-in-down-right fs-2 text-brand"></i>
                            <h6 class="fw-bold mb-1 mt-2">SELL ON SITE</h6>
                            <p class="text-muted small mb-2">Reach millions of buyers</p>
                            <a href="#" class="btn btn-outline-dark btn-sm rounded-pill fw-semibold">Register</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Custom CSS for Hero Styling (Add to your <style> tag) -->
    <style>
        .category-menu .list-group-item {
            font-size: 0.9rem;
            color: #333;
            transition: all 0.2s ease;
        }
        .category-menu .list-group-item:hover {
            color: var(--brand-orange);
            background-color: var(--bg-whitesmoke);
        }
        .swiper-pagination-bullet-active {
            background-color: var(--brand-orange) !important;
        }
        .swiper-button-next, .swiper-button-prev {
            width: 35px;
            height: 35px;
            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 50%;
        }
        .swiper-button-next::after, .swiper-button-prev::after {
            font-size: 1rem;
            font-weight: bold;
        }
    </style>

    <!-- Swiper Initialization Script (Add before closing </body> tag) -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const swiper = new Swiper('.hero-slider', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
    <!-- Product Section Container -->
    <section class="py-4">
        <div class="container">
            
            <!-- 1. Flash Sale Section with Countdown Header -->
            <div class="bg-white rounded shadow-sm overflow-hidden mb-4">
                
                <!-- Flash Sale Header -->
                <div class="bg-danger text-white p-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-lightning-charge-fill fs-4"></i>
                        <h5 class="mb-0 fw-bold text-uppercase">Flash Sales</h5>
                    </div>
                    
                    <!-- Countdown Timer -->
                    <div class="d-flex align-items-center gap-2">
                        <span class="small d-none d-sm-inline">Time Left:</span>
                        <div id="flash-timer" class="fw-bold fs-6 bg-white text-danger px-3 py-1 rounded shadow-sm">
                            00h : 00m : 00s
                        </div>
                    </div>
                </div>

                <!-- Flash Sale Products Grid -->
                <div class="p-3">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
                        
                        <!-- Product Item 1 -->
                        <div class="col">
                            <div class="card h-100 product-card border-0">
                                <div class="position-relative">
                                    <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 fw-bold">-45%</span>
                                    <img src="https://picsum.photos/200/200?random=11" class="card-img-top p-2 rounded" alt="Product">
                                </div>
                                <div class="card-body p-2 d-flex flex-column justify-content-between">
                                    <div>
                                        <h6 class="card-title text-truncate mb-1 text-dark" title="Wireless Bluetooth Earbuds">Wireless Bluetooth Earbuds</h6>
                                        <div class="fw-bold text-dark fs-6">$12.99</div>
                                        <div class="text-muted text-decoration-line-through small">$23.99</div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress mb-1" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%;"></div>
                                        </div>
                                        <small class="text-muted" style="font-size: 0.75rem;">12 items left</small>
                                    </div>
                                    <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Wireless Bluetooth Earbuds">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Item 2 -->
                        <div class="col">
                            <div class="card h-100 product-card border-0">
                                <div class="position-relative">
                                    <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 fw-bold">-30%</span>
                                    <img src="https://picsum.photos/200/200?random=12" class="card-img-top p-2 rounded" alt="Product">
                                </div>
                                <div class="card-body p-2 d-flex flex-column justify-content-between">
                                    <div>
                                        <h6 class="card-title text-truncate mb-1 text-dark" title="Smart Fitness Watch V8">Smart Fitness Watch V8</h6>
                                        <div class="fw-bold text-dark fs-6">$34.50</div>
                                        <div class="text-muted text-decoration-line-through small">$49.99</div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress mb-1" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 45%;"></div>
                                        </div>
                                        <small class="text-muted" style="font-size: 0.75rem;">5 items left</small>
                                    </div>
                                    <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Smart Fitness Watch V8">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Item 3 -->
                        <div class="col">
                            <div class="card h-100 product-card border-0">
                                <div class="position-relative">
                                    <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 fw-bold">-15%</span>
                                    <img src="https://picsum.photos/200/200?random=13" class="card-img-top p-2 rounded" alt="Product">
                                </div>
                                <div class="card-body p-2 d-flex flex-column justify-content-between">
                                    <div>
                                        <h6 class="card-title text-truncate mb-1 text-dark" title="Fast Charging Power Bank">Fast Charging Power Bank</h6>
                                        <div class="fw-bold text-dark fs-6">$19.00</div>
                                        <div class="text-muted text-decoration-line-through small">$22.50</div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress mb-1" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;"></div>
                                        </div>
                                        <small class="text-muted" style="font-size: 0.75rem;">25 items left</small>
                                    </div>
                                    <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Fast Charging Power Bank">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Item 4 -->
                        <div class="col">
                            <div class="card h-100 product-card border-0">
                                <div class="position-relative">
                                    <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 fw-bold">-50%</span>
                                    <img src="https://picsum.photos/200/200?random=14" class="card-img-top p-2 rounded" alt="Product">
                                </div>
                                <div class="card-body p-2 d-flex flex-column justify-content-between">
                                    <div>
                                        <h6 class="card-title text-truncate mb-1 text-dark" title="Over-Ear Gaming Headphones">Over-Ear Gaming Headphones</h6>
                                        <div class="fw-bold text-dark fs-6">$28.00</div>
                                        <div class="text-muted text-decoration-line-through small">$56.00</div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress mb-1" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;"></div>
                                        </div>
                                        <small class="text-muted" style="font-size: 0.75rem;">2 items left</small>
                                    </div>
                                    <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Over-Ear Gaming Headphones">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Item 5 -->
                        <div class="col">
                            <div class="card h-100 product-card border-0">
                                <div class="position-relative">
                                    <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 fw-bold">-20%</span>
                                    <img src="https://picsum.photos/200/200?random=15" class="card-img-top p-2 rounded" alt="Product">
                                </div>
                                <div class="card-body p-2 d-flex flex-column justify-content-between">
                                    <div>
                                        <h6 class="card-title text-truncate mb-1 text-dark" title="Mini Portable Speaker">Mini Portable Speaker</h6>
                                        <div class="fw-bold text-dark fs-6">$15.99</div>
                                        <div class="text-muted text-decoration-line-through small">$19.99</div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress mb-1" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"></div>
                                        </div>
                                        <small class="text-muted" style="font-size: 0.75rem;">8 items left</small>
                                    </div>
                                    <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Mini Portable Speaker">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product Item 6 -->
                        <div class="col">
                            <div class="card h-100 product-card border-0">
                                <div class="position-relative">
                                    <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 fw-bold">-10%</span>
                                    <img src="https://picsum.photos/200/200?random=16" class="card-img-top p-2 rounded" alt="Product">
                                </div>
                                <div class="card-body p-2 d-flex flex-column justify-content-between">
                                    <div>
                                        <h6 class="card-title text-truncate mb-1 text-dark" title="Ergonomic Optical Mouse">Ergonomic Optical Mouse</h6>
                                        <div class="fw-bold text-dark fs-6">$8.99</div>
                                        <div class="text-muted text-decoration-line-through small">$9.99</div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="progress mb-1" style="height: 6px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;"></div>
                                        </div>
                                        <small class="text-muted" style="font-size: 0.75rem;">15 items left</small>
                                    </div>
                                    <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Ergonomic Optical Mouse">ADD TO CART</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 2. Standard Recommended Products Grid -->
            <div class="bg-white rounded shadow-sm overflow-hidden p-3">
                <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                    <h5 class="mb-0 fw-bold text-uppercase">Recommended For You</h5>
                    <a href="#" class="text-brand fw-bold text-decoration-none small">SEE ALL <i class="bi bi-chevron-right"></i></a>
                </div>

                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3">
                    
                    <!-- Item 1 -->
                    <div class="col">
                        <div class="card h-100 product-card border-0">
                            <img src="https://picsum.photos/200/200?random=21" class="card-img-top p-2 rounded" alt="Product">
                            <div class="card-body p-2 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="card-title text-truncate mb-1 text-dark">4K Ultra HD Smart TV</h6>
                                    <div class="fw-bold text-dark fs-6">$310.00</div>
                                    <div class="text-warning small mb-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                        <span class="text-muted ms-1">(42)</span>
                                    </div>
                                </div>
                                <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="4K Ultra HD Smart TV">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col">
                        <div class="card h-100 product-card border-0">
                            <img src="https://picsum.photos/200/200?random=22" class="card-img-top p-2 rounded" alt="Product">
                            <div class="card-body p-2 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="card-title text-truncate mb-1 text-dark">Stainless Steel Electric Kettle</h6>
                                    <div class="fw-bold text-dark fs-6">$21.50</div>
                                    <div class="text-warning small mb-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                                        <span class="text-muted ms-1">(18)</span>
                                    </div>
                                </div>
                                <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Stainless Steel Electric Kettle">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col">
                        <div class="card h-100 product-card border-0">
                            <img src="https://picsum.photos/200/200?random=23" class="card-img-top p-2 rounded" alt="Product">
                            <div class="card-body p-2 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="card-title text-truncate mb-1 text-dark">Men's Running Sneakers</h6>
                                    <div class="fw-bold text-dark fs-6">$42.00</div>
                                    <div class="text-warning small mb-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <span class="text-muted ms-1">(95)</span>
                                    </div>
                                </div>
                                <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Men's Running Sneakers">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col">
                        <div class="card h-100 product-card border-0">
                            <img src="https://picsum.photos/200/200?random=24" class="card-img-top p-2 rounded" alt="Product">
                            <div class="card-body p-2 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="card-title text-truncate mb-1 text-dark">Adjustable Laptop Stand</h6>
                                    <div class="fw-bold text-dark fs-6">$16.00</div>
                                    <div class="text-warning small mb-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                                        <span class="text-muted ms-1">(12)</span>
                                    </div>
                                </div>
                                <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Adjustable Laptop Stand">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="col">
                        <div class="card h-100 product-card border-0">
                            <img src="https://picsum.photos/200/200?random=25" class="card-img-top p-2 rounded" alt="Product">
                            <div class="card-body p-2 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="card-title text-truncate mb-1 text-dark">Automatic Coffee Maker</h6>
                                    <div class="fw-bold text-dark fs-6">$85.00</div>
                                    <div class="text-warning small mb-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star"></i>
                                        <span class="text-muted ms-1">(30)</span>
                                    </div>
                                </div>
                                <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Automatic Coffee Maker">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="col">
                        <div class="card h-100 product-card border-0">
                            <img src="https://picsum.photos/200/200?random=26" class="card-img-top p-2 rounded" alt="Product">
                            <div class="card-body p-2 d-flex flex-column justify-content-between">
                                <div>
                                    <h6 class="card-title text-truncate mb-1 text-dark">Waterproof Travel Backpack</h6>
                                    <div class="fw-bold text-dark fs-6">$29.99</div>
                                    <div class="text-warning small mb-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <span class="text-muted ms-1">(54)</span>
                                    </div>
                                </div>
                                <button class="btn btn-brand btn-sm w-100 fw-bold mt-2 add-to-cart-btn" data-name="Waterproof Travel Backpack">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Product Section Hover CSS (Add to main <style> block) -->
    <style>
        .product-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
        }
    </style>

    <!-- Product Interaction Logic (Timer & Cart Functionality) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Live Countdown Timer Implementation
            let totalSeconds = 5 * 3600 + 42 * 60 + 15; // 5 hours, 42 mins, 15 secs
            const timerElement = document.getElementById('flash-timer');

            setInterval(() => {
                if (totalSeconds <= 0) return;
                totalSeconds--;

                const hrs = String(Math.floor(totalSeconds / 3600)).padStart(2, '0');
                const mins = String(Math.floor((totalSeconds % 3600) / 60)).padStart(2, '0');
                const secs = String(totalSeconds % 60).padStart(2, '0');

                timerElement.textContent = `${hrs}h : ${mins}m : ${secs}s`;
            }, 1000);

            // 2. Add To Cart functionality connected to Navbar Badge & SweetAlert
            let cartCount = 0;
            const cartBadge = document.querySelector('.navbar .badge');

            document.querySelectorAll('.add-to-cart-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const productName = this.getAttribute('data-name');
                    
                    // Increment count
                    cartCount++;
                    if(cartBadge) cartBadge.textContent = cartCount;

                    // SweetAlert notification
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: `${productName} added to cart`,
                        showConfirmButton: false,
                        timer: 2000,
                        timerProgressBar: true
                    });
                });
            });
        });
    </script>

</body>
<?php
include __DIR__."/footer.php";

?>