<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- FONTAWESOME --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

        
        {{-- OWL CAROUSEL CSS --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        {{-- PERSONALIZED CSS --}}
        <link rel="stylesheet" href="{{asset('build/assets/css/style.css')}}">
        
        <link rel="stylesheet" href="{{asset('build/assets/css/owl.theme.default.min.css')}}">


        <link rel="stylesheet" href="{{asset('build/assets/js/app.js')}}">
        <link rel="stylesheet" href="{{asset('build/assets/js/appPrixma.js')}}">
        


    </head>
    <body class="antialiased" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" dir="rtl">
        <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" style="height: 50px">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

        {{-- Main --}}
         <!-- TOP NAV -->
        <div class="top-nav" id="home">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-pinterest'></i></a>
                    </div>
                    <div class="col-auto">
                        <p> <i class='bx bxs-envelope'></i> debra.holt@example.com</p>
                        <p> <i class='bx bxs-phone-call'></i> (219) 555-0114</p>
                    </div>
                    
                </div>
            </div>
        </div>
          <!-- BOTTOM NAV -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#">Prixima<span class="dot">.</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                    </ul>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
                </div>
            </div>
        </nav>

        {{-- HERO --}}
        <div class="container-fluid slide slide1">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">Lorem ipsum dolor sit amet.</h6>
                        <h1 class="display-3 my-4">Lorem, ipsum dolor.<br />Lorem, ipsum.</h1>
                    </div>
                </div>
        </div>

        {{-- FAST LINKS --}}

        <section id="services" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro">
                            <h6>خدماتنا</h6>
                            <h1>روابط سريعة</h1>
                            <p class="mx-auto">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet ullam sapiente, ad, eos consectetur voluptates enim libero reiciendis modi voluptas aspernatur nemo architecto. Accusantium at illum impedit velit tempore quaerat?</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    
                        <div class="col-lg-4 col-md-6">
                            <a class="h-100" href="https://www.mfep.gov.dz" target="_blank">
                                <div class="service">
                                    <i class="fa-solid fa-building-columns mb-2" style="font-size: 60px"></i>
                                    <h5>موقع الوزارة</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi non explicabo tempore aut rem deleniti itaque perferendis quidem</p>
                                </div>
                            </a>
                        </div>
                    
                    
                        <div class="col-lg-4 col-md-6">
                            <a class="h-100" href="https://mfep.gov.dz/mihnati/#/orientation" target="_blank">
                                <div class="service">
                                    <i class="fa-solid fa-file-pen mb-2"  style="font-size: 60px"></i>
                                    <h5>التسجيلات</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from</p>
                                </div>
                            </a>
                        </div>
                   
                   
                        <div class="col-lg-4 col-md-6">
                            <a class="h-100" href="https://wassitonline.anem.dz" target="_blank">
                                <div class="service">
                                    <i class="fa-solid fa-arrows-down-to-people mb-2" style="font-size: 60px"></i>
                                    <h5>وكالة التشغيل</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from</p>
                                </div>
                            </a>
                        </div>
                    
                    
                        <div class="col-lg-4 col-md-6">
                            <a class="h-100" href="https://www.facebook.com/DFEPILLIZI" target="_blank">
                                <div class="service">
                                    <i class="fa-brands fa-facebook-f links-icons mb-2"  style="font-size: 60px"></i>
                                    <h5>الفيسبوك</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from</p>
                                </div>
                            </a>
                        </div>
                   
                    
                        <div class="col-lg-4 col-md-6">
                            <a class="h-100" href="https://www.youtube.com/@user-tu3tk9qn2p/featured" target="_blank">
                                <div class="service">
                                    <i class="fa-brands fa-youtube mb-2"  style="font-size: 60px"></i>
                                    <h5>اليوتيوب</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from</p>
                                </div>
                            </a>
                        </div>
                    
                    
                        <div class="col-lg-4 col-md-6">
                            <a class="h-100" href="mailto:illizidfp@gmail.com" target="_blank">
                                <div class="service">
                                    <i class="fa-solid fa-envelope mb-2"  style="font-size: 60px"></i>
                                    <h5>البريد الإلكتروني</h5>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                        classical Latin literature from</p>
                                </div>
                            </a>
                        </div>
                    
   
                </div>
            </div>
        </section>


        {{-- NEWS --}}

        <section class="bg-light" id="portfolio" dir="ltr">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro">
                            <h6>الإعلانات الجديدة</h6>
                            <h1>Lorem, ipsum.</h1>
                            <p class="mx-auto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, corporis.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="projects-slider" class="owl-theme owl-carousel">
                <div class="project">
                    <div class="overlay"></div>
                    <img src="/build/assets/images/project1.jpg" alt="">
                    <div class="content">
                        <h2>Consulting Marketing</h2>
                        <h6>Website Design</h6>
                    </div>
                </div>
                <div class="project">
                    <div class="overlay"></div>
                    <img src="/build/assets/images/project2.jpg" alt="">
                    <div class="content">
                        <h2>Consulting Marketing</h2>
                        <h6>Website Design</h6>
                    </div>
                </div>
                <div class="project">
                    <div class="overlay"></div>
                    <img src="/build/assets/images/project3.jpg" alt="">
                    <div class="content">
                        <h2>Consulting Marketing</h2>
                        <h6>Website Design</h6>
                    </div>
                </div>
                <div class="project">
                    <div class="overlay"></div>
                    <img src="/build/assets/images/project4.jpg" alt="">
                    <div class="content">
                        <h2>Consulting Marketing</h2>
                        <h6>Website Design</h6>
                    </div>
                </div>
                <div class="project">
                    <div class="overlay"></div>
                    <img src="/build/assets/images/project5.jpg" alt="">
                    <div class="content">
                        <h2>Consulting Marketing</h2>
                        <h6>Website Design</h6>
                    </div>
                </div>
            </div>
            
        </section>

        {{-- POSTS --}}
        <section id="services" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="intro">
                            <h6>أخر الأخبار</h6>
                            <h1>Lorem, ipsum.</h1>
                            <p class="mx-auto">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum quod illum perspiciatis placeat quo dolor molestias rem rerum, architecto, nam a dignissimos corrupti facilis numquam!</p>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <img src="/build/assets/images/icon1.png" alt="">
                            <h5>Digital Marketing</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <img src="/build/assets/images/icon2.png" alt="">
                            <h5>Logo Designing</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <img src="/build/assets/images/icon3.png" alt="">
                            <h5>Buisness consulting</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <img src="/build/assets/images/icon4.png" alt="">
                            <h5>Videography</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <img src="/build/assets/images/icon5.png" alt="">
                            <h5>Brand Identity</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service">
                            <img src="/build/assets/images/icon6.png" alt="">
                            <h5>Ethical Hacking</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- BLOG -->

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>أخر الفعاليات و النشاطات</h6>
                        <h1>Lorem, ipsum.</h1>
                        <p class="mx-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum assumenda impedit ipsam quas nemo? Eius quisquam qui quaerat nesciunt tenetur ab consequuntur totam ducimus at!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="/build/assets/images/project5.jpg" alt="">
                        <a href="#" class="tag">Web Design</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="/build/assets/images/project4.jpg" alt="">
                        <a href="#" class="tag">Programming</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="/build/assets/images/project2.jpg" alt="">
                        <a href="#" class="tag">Marketing</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Prixima<span class="dot">.</span></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright@2020. All rights Reserved</p>
        </div>
    </footer>
                
            
          

            
            
            
            
       

      
      

        
        {{--BOOTSTRAP JS  --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        
        

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      
                <script>
                    $('#projects-slider').owlCarousel({
                        loop: true,
                        nav: false,
                        items: 2,
                        dots: true,
                        smartSpeed: 600,
                        center: true,
                        autoplay: true,
                        autoplayTimeout: 4000,
                        responsive: {
                            0: {
                                items: 1
                            },
                            768: {
                                items: 2,
                                margin: 8,
                            }
                        }
                    })
                </script>
      
    
    </body>
</html>
