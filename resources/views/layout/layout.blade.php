<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .contact-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
            padding: 30px;
            width: 100%;
            max-width: 500px;
        }

        .form-control:focus {
            border-color: #6c63ff;
            box-shadow: 0 0 0 0.2rem rgba(108, 99, 255, 0.25);
        }

        .btn-custom {
            background: #6c63ff;
            color: white;
            border-radius: 10px;
            transition: 0.3s;
            align-content: center;
            align-items: center;
        }

        .btn-custom:hover {
            background: #574bdb;
        }
    </style>

</head>

<body>

    <!--Navigation bar responsive-->
    <nav class="navbar navbar-expand-lg p-2 rounded"
        style="background: linear-gradient(90deg, #ff7e5f, #feb47b);>
        <a class="navbar-brand" href="/">
        <i class="bi bi-airplane-engines-fill"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">Blog</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--Header responsive-->
    <header class="container py-5"">
        <div class="row align-items-center bg-light p-5 rounded shadow-lg" style="@yield('custom_color')>
            <div class="col-md-6">
                <h2 class="fw-bold mb-3 @yield('blog_color')">Welcome to My Website</h2>
                <a href="#" class="btn btn-primary btn-lg">Get Started</a>
            </div>
        </div>
    </header>

    <!--Content section varies on child responsive-->
    <section>@yield('content')</section>

    <!--Footer responsive-->
    <footer class="bg-dark text-light pt-5 pb-4">
        <div class="container text-center text-md-start">
            <div class="row">
                <!-- About -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h5 class="text-uppercase fw-bold mb-3">MyWebsite</h5>
                </div>

                <!-- Links -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-3">Quick Links</h6>
                    <p><a href="#" class="text-reset text-decoration-none">Home</a></p>
                    <p><a href="/about" class="text-reset text-decoration-none">About</a></p>
                    <p><a href="/projects" class="text-reset text-decoration-none">Projects</a></p>
                    <p><a href="/contact" class="text-reset text-decoration-none">Contact</a></p>
                    <p><a href="/blog" class="text-reset text-decoration-none">Blog</a></p>
                </div>

                <!-- Contact -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-3">Contact</h6>
                    <p><i class="bi bi-house-door-fill me-2"></i> Dhaka, Bangladesh</p>
                    <p><i class="bi bi-envelope-fill me-2"></i> info@mywebsite.com</p>
                    <p><i class="bi bi-phone-fill me-2"></i> +880 123 456 789</p>
                </div>

                <!-- Social -->
                <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-3">Follow Us</h6>
                    <a href="#" class="btn btn-outline-light btn-sm m-1 rounded-circle"><i
                            class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm m-1 rounded-circle"><i
                            class="bi bi-twitter"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm m-1 rounded-circle"><i
                            class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-outline-light btn-sm m-1 rounded-circle"><i
                            class="bi bi-linkedin"></i></a>
                </div>

            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center mt-3">
            <p class="mb-0">&copy; 2025 MyWebsite. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        const currentPage = location.pathname.split("/").pop();
        const navLinks = document.querySelectorAll(".nav-link");
        navLinks.forEach(link => {
            if (link.getAttribute("href") === `/${currentPage}`) {
                link.classList.add("active");
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
