<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LibMange - Library Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-green: #28a745;
            --secondary-green: #218838;
        }
        .bg-primary-green { background-color: var(--primary-green)!important; }
        .btn-success { 
            background-color: var(--primary-green);
            border-color: var(--primary-green);
        }
        .btn-success:hover {
            background-color: var(--secondary-green);
            border-color: var(--secondary-green);
        }
        .nav-link.active { 
            color: var(--primary-green)!important;
            font-weight: 600;
        }
        .favorite-btn:hover { color: #dc3545; }
    </style>
</head>
<body class="bg-light">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-green shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="index.html">LibMange</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">Dashboard</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <div class="dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="userMenu">
                            John Doe
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="favorites.html">Favorites</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-header bg-primary-green text-white">
                        Filters
                    </div>
                    <div class="card-body">
                        <h5>Categories</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cat1">
                            <label class="form-check-label" for="cat1">Fiction</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cat2">
                            <label class="form-check-label" for="cat2">Non-Fiction</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <h2 class="mb-4">Our Products</h2>
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="placeholder.jpg" class="card-img-top" alt="Product 1">
                            <div class="card-body">
                                <h5 class="card-title">Sample Book 1</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="h5 text-success">$29.99</span>
                                    <div>
                                        <button class="btn btn-success btn-sm">Add to Cart</button>
                                        <button class="btn btn-outline-success btn-sm favorite-btn">
                                            ♥
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="placeholder.jpg" class="card-img-top" alt="Product 2">
                            <div class="card-body">
                                <h5 class="card-title">Sample Book 2</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="h5 text-success">$39.99</span>
                                    <div>
                                        <button class="btn btn-success btn-sm">Add to Cart</button>
                                        <button class="btn btn-outline-success btn-sm favorite-btn">
                                            ♥
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>LibMange</h5>
                    <p class="text-muted">Your complete library management solution</p>
                </div>
                <div class="col-md-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="about.html" class="text-white text-decoration-none">About Us</a></li>
                        <li><a href="contact.html" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="terms.html" class="text-white text-decoration-none">Terms</a></li>
                        <li><a href="privacy.html" class="text-white text-decoration-none">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-3 text-muted">
                &copy; 2024 LibMange. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>