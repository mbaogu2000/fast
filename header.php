<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP FAST - Online Shopping Mall</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- Swiper JS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Custom CSS Palette & Overrides -->
    <style>
        :root {
            --brand-orange: #f68b1e;
            --brand-orange-hover: #e07b12;
            --bg-whitesmoke: #f5f5f5;
        }

        body {
            background-color: var(--bg-whitesmoke);
            font-family: system-ui, -apple-system, sans-serif;
        }

        .btn-brand {
            background-color: var(--brand-orange);
            color: #ffffff;
            border: none;
        }

        .btn-brand:hover {
            background-color: var(--brand-orange-hover);
            color: #ffffff;
        }

        .text-brand {
            color: var(--brand-orange) !important;
        }

        /* Top Bar styling */
        .top-banner {
            background-color: var(--bg-whitesmoke);
            font-size: 0.8rem;
        }

        /* Main Nav Styling */
        .main-navbar {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .nav-action-btn {
            color: #333;
            font-weight: 500;
            padding: 0.5rem 0.75rem;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .nav-action-btn:hover {
            background-color: var(--bg-whitesmoke);
            color: var(--brand-orange);
        }

        .search-input:focus {
            border-color: var(--brand-orange);
            box-shadow: 0 0 0 0.25rem rgba(246, 139, 30, 0.25);
        }
    </style>
</head>
<body>

    <!-- Top Announcement Bar (Jumia Style) -->
    <div class="top-banner border-bottom py-1 text-center text-muted d-none d-md-block">
        <div class="container d-flex justify-content-between align-items-center">
            <span><i class="bi bi-shield-check text-success me-1"></i> Pay on Delivery | Easy Returns</span>
            <div>
                <a href="#" class="text-secondary text-decoration-none me-3"><i class="bi bi-shop me-1"></i> Sell on Shop Fast</a>
                <a href="#" class="text-secondary text-decoration-none"><i class="bi bi-question-circle me-1"></i> Help Center</a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <nav class="navbar navbar-expand-lg bg-white sticky-top main-navbar py-2">
        <div class="container">
            
            <!-- Brand Logo -->
            <a class="navbar-brand fw-bold fs-3 d-flex align-items-center" href="#">
                <span class="text-dark">SHOP</span>
                <span class="text-brand ms-1">FAST</span>
                <i class="bi bi-lightning-charge-fill text-brand fs-4"></i>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#searchAndNav" aria-controls="searchAndNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Search Bar and Action Links -->
            <div class="collapse navbar-collapse ms-lg-4" id="searchAndNav">
                
                <!-- Central Search Bar -->
                <form class="d-flex my-2 my-lg-0 flex-grow-1 max-width-search me-lg-4" role="search">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted">
                            <i class="bi bi-search"></i>
                        </span>
                        <input class="form-control border-start-0 search-input ps-0" type="search" placeholder="Search products, brands and categories..." aria-label="Search">
                        <button class="btn btn-brand px-4 fw-semibold" type="submit">SEARCH</button>
                    </div>
                </form>

                <!-- User Action Icons / Links -->
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end gap-2 mt-2 mt-lg-0">
                    
                    <!-- Account Dropdown -->
                    <div class="dropdown">
                        <a href="#" class="nav-action-btn d-flex align-items-center gap-2 dropdown-toggle" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person fs-5"></i>
                            <span class="d-none d-xl-inline">Account</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" aria-labelledby="accountDropdown">
                            <li><a class="dropdown-item py-2" href="#"><button class="btn btn-brand w-100 fw-bold">SIGN IN</button></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>My Account</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-box-seam me-2"></i>Orders</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-heart me-2"></i>Saved Items</a></li>
                        </ul>
                    </div>

                    <!-- Help Dropdown -->
                    <div class="dropdown">
                        <a href="#" class="nav-action-btn d-flex align-items-center gap-2 dropdown-toggle" id="helpDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-question-circle fs-5"></i>
                            <span class="d-none d-xl-inline">Help</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0" aria-labelledby="helpDropdown">
                            <li><a class="dropdown-item" href="#">Help Center</a></li>
                            <li><a class="dropdown-item" href="#">Place & Track Order</a></li>
                            <li><a class="dropdown-item" href="#">Order Cancellation</a></li>
                            <li><a class="dropdown-item" href="#">Returns & Refunds</a></li>
                        </ul>
                    </div>

                    <!-- Cart -->
                    <a href="#" class="nav-action-btn d-flex align-items-center gap-2 text-brand">
                        <div class="position-relative">
                            <i class="bi bi-cart3 fs-4"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.65rem;">
                                0
                            </span>
                        </div>
                        <span class="fw-bold d-none d-xl-inline">Cart</span>
                    </a>

                </div>
            </div>
        </div>
    </nav>
    <!-- Stop here -->

    <!-- Required JavaScript CDNs -->
    <!-- Bootstrap 5 JS Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>
</body>
</html>