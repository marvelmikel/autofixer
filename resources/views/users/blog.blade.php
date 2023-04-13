<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Autofixer | Blog Page</title>
    <!-- Bootstrap css cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/sweetalert/dist/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- External css link -->
    <link rel="stylesheet" href="{{ URL::asset('p/css/style.css')}}" />
    <link rel="stylesheet" href="{{ URL::asset('p/css/css/all.css')}}" />
    <!-- font family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet" />
</head>

<body>
    <header class="header text-white" id="header">
        <div class="bg-color text-white" id="top_bar">
            <div class="container top__bar d-flex align-items-center justify-content-between">
                <section class="contact-link d-flex gap-5">
                    <span>24/7 supports</span>
                    <span>
              <a href="" style="text-decoration: underline">07045543003</a>
            </span>
                </section>
                <section class="icons d-flex gap-3">
                    <i class="fa-regular fa-user"></i>
                    <i class="fa-solid fa-bag-shopping"></i>
                    <i class="fa-solid fa-calendar-days"></i>
                </section>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-dark text-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ URL::asset('p/images/Auto-fixer-logo-cropped 1.png')}}" style="width: 125px" alt="" />
                </a>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-danger"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto gap-3 mb-lg-0 text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#home">Home</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Company
                </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Got a quote</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#newsletter">Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">.FIX</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#footer">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">sign up / sign in</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- End of navabr -->

    <!-- Hero section -->
    <section class="hero" id="home">
        <div class="container-fluid">
            <div class="hero-image">
                <img src="{{ URL::asset('p/images/Rectangle 4.png')}}" alt="" />
            </div>
        </div>
    </section>
    <!-- End of hero section -->

    <!-- article section -->
    <section class="article">
        <div class="container bg-white">
            <div class="article-content p-5">
                <h1>
                    {{$recentBlog->title}}
                </h1>
                <p>BY <span> {{$recentBlog->author}}</span> / {{$recentBlog->created_at->diffForHumans()}}</p>
                <p>
                    {{ $recentBlog->content }}
                </p>
                <img class="w-100" src="{{ asset('blog_images/' . $recentBlog->image) }}" alt="{{$recentBlog->image}}" />
            </div>
        </div>
    </section>
    <!-- end of article section -->

    <!-- Comment -->
    <section id="newsletter" class="newsletter pt-5 mb-5 container-fluid">
        <div class="bg-primary">
            <div class="newsletter-heading d-flex align-items-center justify-content-center flex-column">
                <h1 class="text-dark mt-5">LEAVE A COMMENT</h1>
                <p>Be a part of the community</p>
            </div>
            <div class="newsletter-content d-flex align-items-center justify-content-center flex-column">
                <div class="newsletter-content-form d-flex flex-column justify-content-center align-items-center">

                    @if(session('success'))
                    <script>
                        swal("Success!", "{{ session('success') }}", "success");
                    </script>
                @endif

                @if(session('error'))
                    <script>
                        swal("Error!", "{{ session('error') }}", "error");
                    </script>
                @endif

                    <form method="POST" action="{{ route('comment') }}" class="mb-5" >
                        @csrf
                        <div class="form-text">
                            <select class="form-control px-4 mb-5" name="blog_title" id="blog_title">
                                <option value="">Select  Blog Post</option> <!-- Placeholder option -->
                                @foreach ($blogs ?? '' as $blog)
                                <option class="form-control px-4 mb-5" value="{{ $blog->title }}">{{ $blog->title }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-text">
                            <input type="text" name="name" placeholder="Name" class="form-control px-4 mb-5" required />
                        </div>
                        <div class="form-text">
                            <textarea name="text" placeholder="Write a comment" class="form-control px-4" required></textarea>
                        </div>
                        <button style="margin-top: 10%; margin-left:25%;" type="submit" class="btn mb-5">Send</button>

                    </form>




                </div>
                <div class="newsletter-comment d-flex flex-column align-items-start">
                    <div class="newsletter-comment-content d-flex align-items-start justify-content-center mb-4">
                        <img class="me-4" src="{{ URL::asset('p/images/Ellipse 3.png')}}" alt="" />
                        <div>
                            <h4><span>{{$recentComment->name}}/</span>{{$recentComment->created_at->diffForHumans()}}</h4>
                            <p>{{$recentComment->text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of comment -->

    <!-- article grid -->
    <section id="article-grid" class="article-grid">
        <div class="container">
            <div class="newsletter-heading d-flex align-items-center justify-content-center flex-column">
                <h1 class="text-dark mt-5">RECENT ARTICLES</h1>
                <p>A must read</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
                @foreach ($blogs as $blog)

                <div class="col">
                    <div class="card">
                        <img src="{{ asset('blog_images/' . $blog->image) }}" alt="{{ $blog->image }}" class="card-img-top" alt="..." />
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <h5 class="card-title">{{$blog->author}} ARTICLES</h5>
                            <h3>{{$blog->title}}</h3>
                            <span>{{$blog->created_at->diffForHumans()}} </span>
                            <p>
                                {{$blog->content}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- end of article grid -->

    <!-- footer -->
    <footer id="footer" class="footer">
        <div class="container-fluid bg-dark">
            <div class="container py-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4 text-white">
                    <div class="col d-flex flex-column gap-3 mb-4">
                        <h2>SITEMAP</h2>
                        <a href="">Home</a>
                        <a href="">About Us</a>
                        <a href="">What we do</a>
                        <a href="">What we don't do</a>
                        <a href="">Testimonials</a>
                        <a href="">Services</a>
                        <a href="">Team</a>
                    </div>
                    <div class="col d-flex flex-column gap-3 mb-5">
                        <h2>OTHER</h2>
                        <a href="">Get a quote</a>
                        <a href="">Vidoes</a>
                        <a href="">Booking</a>
                    </div>
                    <div class="col d-flex flex-column gap-3 mb-4">
                        <h2>FAQ</h2>
                        <a href="">Contact Us</a>
                        <a href="">Staff Email</a>
                        <a href="">Admininstration</a>
                    </div>
                    <div class="col d-flex flex-column gap-3 mb-5">
                        <h2>SERVICES</h2>
                        <a href="">Diagnosis</a>
                        <a href="">Maintenance</a>
                        <a href="">Repair</a>
                    </div>
                    <div class="col d-flex flex-column gap-3 mb-4">
                        <h2>BUSINESS HOURS</h2>
                        <a href="">Monday to Friday</a>
                        <a href="">9:00am - 10:00am</a>
                        <a href="">Vacations</a>
                        <a href="">All sundays</a>
                        <a href="">All official holidays</a>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 text-white">
                    <div class="col">
                        <img src="{{ URL::asset('p/images/Auto-fixer-logo-cropped 1.png')}}" style="width: 188px" alt="" />
                        <p class="mt-4 footer-paragragh">
                            © Copyright 2022 - 2023. Autofixer <br /> Nigeria limited. Site by FregateLab
                        </p>
                    </div>
                    <div class="col bg-danger p-5">
                        <h3>Contact</h3>
                        <p class="footer-details">
                            Call :
                            <a href="">070 4554 3003</a>
                        </p>
                        <p class="footer-details">
                            Email : <a href="">info@autofixer.com.ng</a>
                        </p>
                        <p class="footer-details">
                            Address : Suite B12,NIPCO Station shopping center,kuchingoro, Umar Musa Yaradua Express Way, Abuja.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <!-- Bootstrap Javascript cdn link -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- External js link -->
    <script src="js/index.js"></script>
</body>

</html>
