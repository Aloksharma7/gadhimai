<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gadhimai Temple</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS and FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" <?= base_url('/assets/css/layout.css') ?>">
    <link rel="stylesheet" href=" <?= base_url('/assets/css/index.css') ?>">
    <!-- Include additional CSS files or inline styles from specific pages -->
    <?= $this->renderSection('styles') ?>
    <!-- Editor Template setup script file -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body>
    <Header class="header-container">
        <!-- Top Menu -->
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Left side: Logo -->
                    <div class="col-md-6 d-flex align-items-center">
                        <a class="navbar-brand" href="/">
                            <img src="<?= base_url('/assets/image/logo.jpg') ?>" alt="Gadhimai Temple Logo">
                        </a>
                    </div>
                    <!-- Right side: Two rows -->
                    <div class="col-md-6 d-none d-sm-block">
                        <!-- First Row -->
                        <div class="d-flex first-row">
                            <div class="social-links d-flex">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div> |
                            <div class="language-switcher">
                                English
                            </div> |
                            <div class="public-dashboard">
                                <i class="fas fa-tachometer-alt"></i> <a href="/"
                                    style="color: #fff; text-decoration: none;">Public Dashboard</a>
                            </div> |
                        </div>
                        <!-- Second Row -->
                        <div class="row mt-2">
                            <!-- Column 1: Search Box -->
                            <div class="col-md-8">
                                <div class="search-bar position-relative">
                                    <i class="fas fa-search search-icon"></i>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <!-- Column 2: Devotee Sign In Button -->
                            <div class="col-md-4 d-flex align-items-center">
                                <a href="#" class="sign-in-btn">
                                    Devotee Sign In <i class="fas fa-user"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Navigation Menu -->
        <nav class="navbar navbar-expand-lg navbar-dark main-menu z-1">
            <div class="container-fluid">
                <!-- Navbar toggler for mobile devices -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse ps-2" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/history">History</a></li>
                        <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="/newsnotice">News / Notice</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                        <?php if(session()->get('isLoggedIn')): ?>
                            <!-- admin blog links -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin Blog
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/admin/blog">View All Blogs</a></li>
                                <li><a class="dropdown-item" href="/admin/blog/create">Create new Blog</a></li>
                            </ul>
                        </li>
                        <!-- Admin new notice links -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin News Notice
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/admin/newsnotice">View All News/Notices</a></li>
                                <li><a class="dropdown-item" href="/admin/newsnotice/create">Create New News/Notice</a></li>
                            </ul>
                        </li>        
                        <!-- event links                 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin Events
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/admin/events">View Events</a></li>
                                <li><a class="dropdown-item" href="/admin/events/create">Create Events</a></li>
                            </ul>
                        </li>                        
                        <!-- Carousel itmes                 -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin Carousel
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/admin/carousel">View Events</a></li>
                                <li><a class="dropdown-item" href="/admin/carousel/create">Create Events</a></li>
                            </ul>
                        </li>                        
                        <li class="nav-item"><a class="nav-link" href="/admin/logout">Log Out</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </Header>

    <main>
        <?= $this->renderSection('content') ?> <!-- Dynamic content -->
    </main>

    <footer class="footer mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Temple Info Section -->
                <div class="col-md-4">
                    <div class="temple-name">Gadhi Mai Temple</div>
                    <p><i class="fa fa-location-arrow"></i> Gadhimai, Bareyarpur, Madesh Pradesh, Nepal</p>
                    <p><i class="fa fa-envelope"></i> <a
                            href="mailto:info@gadhimaitemple.com">info@gadhimaitemple.com</a></p>
                    <p><i class="fa fa-phone"></i> +977-123456789</p>
                </div>

                <!-- Quick Links Section -->
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">History of Temple</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Other Section -->
                <div class="col-md-3">
                    <h5>Other Information</h5>
                    <p>Opening Hours: 6 AM - 8 PM (Daily)</p>
                    <p>Follow us on social media:</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-4">
                <p>&copy;
                    <?= date("Y"); ?> Gadhi Mai Temple. All Rights Reserved. | Developed & Designed By <a
                        href="https://www.techchampsoftware.com.np" target="_blank"> Tech Champ Software</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- JS, Popper.js, and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>