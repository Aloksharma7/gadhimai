<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gadhimai Temple</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS and FontAwesome -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href=" <?= base_url('/assets/css/layout.css') ?>">
        <!-- //Editor Template setup script file -->
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
                    <div class="col-md-6">
                        <!-- First Row -->
                        <div class="row first-row">
                                <div class="social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a> |
                                </div>
                                <div class="language-switcher">
                                    English <!-- You can make this a dropdown or link for language change -->
                                </div> | 
                                <div class="public-dashboard">
                                    <i class="fas fa-tachometer-alt"></i> <a href="#" style="color: #fff; text-decoration: none;">Public Dashboard</a>
                                </div> |
                        </div>
                        <!-- Second Row -->
                        <div class="row mt-2">
                            <!-- Column 1: Search Box -->
                            <div class="col-md-8">
                                <div class="search-bar">
                                    <i class="fas fa-search search-icon"></i>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <!-- Column 2: Devotee Sign In Button -->
                            <div class="d-flex justify-content-center align-items-center">
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
        <nav class="navbar navbar-expand-lg navbar-dark main-menu">
            <div class="container-fluid">
                <!-- Navbar toggler for mobile devices -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">History</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </Header>


    <main>
        <?= $this->renderSection('content') ?> <!-- Dynamic content -->
    </main>


    <footer class="py-4 bg-dark text-white mt-5">
        <div class="container text-center">
            <p class="m-0">Copyright &copy; My Website 2024</p>
        </div>
    </footer>

    <!-- JS, Popper.js, and jQuery -->


       <!-- Include jQuery, Popper.js, Bootstrap JS, and FontAwesome -->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
