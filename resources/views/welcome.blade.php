<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- Link Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>StarTax | Lightening Fast Taxation.</title>
</head>

<body>

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- header Css -->
    <header class="header_nav">
        <div class="container_main">
            <div class="nav_sec">
                <div class="logo_main">
                    <img src="assets/images/starTax--Main.png" alt="" />
                </div>
                <div class="Menu">
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="#about_us">About</a>
                        </li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li>
                            <a href="#faqs">Faqs</a>
                        </li>
                        <li>
                            <a href="#Contact">Contact Us</a>
                        </li>
                        <li>
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                    @auth
                                        <a href="{{ url('/home') }}" class="login_button font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="login_button font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                        <!-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                        @endif -->
                                    @endauth
                                </div>
                            @endif

                        </li>
                    </ul>
                </div>
                <div class="res_menu">
                    <span class="menu_res_bar">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </span>
                    <span class="close_res">
                        <i class="fa-solid fa-xmark"></i>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <section class="Banner_sec">
        <div class="container_main">
            <div class="banner_Grid">
                <div class="Banner_content" data-aos="fade-right" data-aos-duration="1000">
                    <!-- <span>TaxCloudIndia</span> -->
                    <h1><span>StarTax</span> | Lightening Fast Taxation.</h1>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam
                        eligendi rerum maxime consequatur aspernatur possimus, quaerat
                        soluta quasi earum ducimus. Blanditiis, facere tenetur laudantium
                        unde esse quas numquam repellendus ipsa.
                    </p>
                    <div class="Banner_btn">
                        <a href="#">File Now</a>
                        <a href="#">Request a demo <i class="fa-solid fa-arrow-trend-up"></i></a>
                    </div>
                </div>
                <div class="Banner-video" data-aos="fade-left" data-aos-duration="1000">
                    <div class="video_bg">
                        <img src="assets/images/banner.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header Css -->

    <!-- ABout us Start-->
    <section class="about_sec" id="about_us">
        <div class="container_main">
            <div class="about_heading" data-aos="fade-up" data-aos-duration="700">
                <h2>About <span class="bold_800">Us</span></h2>
            </div>
            <div class="Data_secure_grid">
                <div class="Data_content">
                    <h3 data-aos="fade-up" data-aos-duration="700">
                        Grow Your <span class="bold_800"> Business </span> Against All
                        Odds.
                    </h3>
                    <p data-aos="fade-up" data-aos-duration="700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore
                        totam consectetur obcaecati, error sed dicta sint commodi ipsum
                        aliquid corporis quibusdam sunt rem. Ullam consequuntur quod
                        voluptates at ab quam.
                    </p>
                    <p data-aos="fade-up" data-aos-duration="700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Perspiciatis voluptatum nesciunt tempora omnis ad similique
                        dignissimos consequatur deleniti facere necessitatibus placeat
                        commodi laborum vel sequi, perferendis totam atque, repellendus
                        adipisci?
                    </p>
                </div>
                <div class="Data_Images">
                    <div class="img_box-grid" data-aos="fade-up" data-aos-duration="700">
                        <img src="assets/images/about.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABout end -->

    <!-- Support all FOrms Start -->
    <section class="support_sec" id="services">
        <div class="container_main">
            <div class="supprt_grid">
                <div class="support_cart_box">
                    <span data-aos="fade-up" data-aos-duration="700">
                        <img src="assets/images/wallet.png" alt="" />
                    </span>
                    <h3 data-aos="fade-up" data-aos-duration="700">Saving for your clients</h3>
                    <p data-aos="fade-up" data-aos-duration="700">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                        consectetur saepe neque, praesentium quidem atque ipsum, esse
                        perspiciatis culpa at similique enim, ipsa commodi aperiam? Ea
                        modi iure maxime alias?
                    </p>
                </div>
                <div class="support_cart_box" data-aos="fade-up" data-aos-duration="700">
                    <span>
                        <img src="assets/images/speedometer.png" alt="" />
                    </span>
                    <h3>Speed for your filing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                        consectetur saepe neque, praesentium quidem atque ipsum, esse
                        perspiciatis culpa at similique enim, ipsa commodi aperiam? Ea
                        modi iure maxime alias?
                    </p>
                </div>
                <div class="support_cart_box" data-aos="fade-up" data-aos-duration="700">
                    <span>
                        <img src="assets/images/accuracy.png" alt="" />
                    </span>
                    <h3>Accuracy at each step</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                        consectetur saepe neque, praesentium quidem atque ipsum, esse
                        perspiciatis culpa at similique enim, ipsa commodi aperiam? Ea
                        modi iure maxime alias?
                    </p>
                </div>
                <div class="support_cart_box" data-aos="fade-up" data-aos-duration="700">
                    <span>
                        <img src="assets/images/Encryption.png" alt="" />
                    </span>
                    <h3>Encryption</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                        consectetur saepe neque, praesentium quidem atque ipsum, esse
                        perspiciatis culpa at similique enim, ipsa commodi aperiam? Ea
                        modi iure maxime alias?
                    </p>
                </div>
                <div class="support_cart_box" data-aos="fade-up" data-aos-duration="700">
                    <span>
                        <img src="assets/images/storage.png" alt="" />
                    </span>
                    <h3>Storage</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                        consectetur saepe neque, praesentium quidem atque ipsum, esse
                        perspiciatis culpa at similique enim, ipsa commodi aperiam? Ea
                        modi iure maxime alias?
                    </p>
                </div>
                <div class="support_cart_box" data-aos="fade-up" data-aos-duration="700">
                    <span>
                        <img src="assets/images/privacy.png" alt="" />
                    </span>
                    <h3>Privacy-aware</h3>
                    <p>
                        WLorem ipsum dolor sit amet consectetur adipisicing elit. Beatae
                        consectetur saepe neque, praesentium quidem atque ipsum, esse
                        perspiciatis culpa at similique enim, ipsa commodi aperiam? Ea
                        modi iure maxime alias?
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Support all FOrms ENd -->

    <!-- Faqs Sections Start-->
    <section class="faqs_sec" id="faqs">
        <div class="container_main">
            <div class="faqs_heading" data-aos="fade-up" data-aos-duration="700">
                <h2>FA<span class="bold_800">Q</span>S</h2>
            </div>
            <div class="Faqs_grid">
                <div class="accordion">
                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="accordion-item-header">
                            <span>Heading Here</span>
                            <span>
                                <img src="assets/images/FaqsArrow.svg" class="accordion-item-header-icon" />
                            </span>
                        </div>
                        <div class="accordion-item-description-wrapper">
                            <div class="accordion-item-description">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500. Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="accordion-item-header">
                            <span>Heading Here</span>
                            <span>
                                <img src="assets/images/FaqsArrow.svg" class="accordion-item-header-icon" />
                            </span>
                        </div>
                        <div class="accordion-item-description-wrapper">
                            <div class="accordion-item-description">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500. Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="accordion-item-header">
                            <span>Heading Here</span>
                            <span>
                                <img src="assets/images/FaqsArrow.svg" class="accordion-item-header-icon" />
                            </span>
                        </div>
                        <div class="accordion-item-description-wrapper">
                            <div class="accordion-item-description">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's
                                    standard dummy text ever since the 1500. Lorem Ipsum is
                                    simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fqs_img" data-aos="fade-up" data-aos-duration="700">
                    <img src="assets/images/about.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Faqs Sections End-->

    <!-- Contact Us Start -->
    <section class="contact_us" id="Contact">
        <div class="container_main">
            <div class="contact_heading" data-aos="fade-up" data-aos-duration="700">
                <h2>Contact <span class="bold_800">Us</span></h2>
            </div>
            <div class="contact_grid">
                <div class="get_in_touch">
                    <div class="getintouch_con">
                        <h3 data-aos="fade-up" data-aos-duration="700">Get In Touch</h3>
                        <p data-aos="fade-up" data-aos-duration="700">
                            We usually reply within 60 minutes!
                        </p>
                        <p data-aos="fade-up" data-aos-duration="700">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto quos ipsum, magnam maiores quam, reiciendis neque nam, minus culpa animi nemo repudiandae. Quos voluptas tempora excepturi doloremque deleniti velit numquam?
                        </p>

                        <div class="contact_info" data-aos="fade-up" data-aos-duration="700">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content_info" data-aos="fade-up" data-aos-duration="700">
                                <h5>Contact Info</h5>
                                <span>Phone: <a href="#">000000</a></span>
                                <span>Email: <a href="#">Email@gmail.com</a></span>
                            </div>
                        </div>

                        <!-- <ul>
                <li>
                  <a href="#">
                    <span>Phone:</span>
                    <span>000000000</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span>Email:</span>
                    <span>Emai656@gamil.com</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span>Address:</span>
                    <span>Adress Here 783 main road 288 </span>
                  </a>
                </li>
              </ul> -->
                    </div>
                    <!-- <div class="addres_con">
              <h3>HOURS</h3>
              <ul>
                <li>
                  <span>Monday:</span>
                  <span>Closed</span>
                </li>
                <li>
                  <span>Tuesday-Friday:</span>
                  <span> 12:00 pm-5:00 pm</span>
                </li>
                <li>
                  <span>Saturday:</span>
                  <span>11:00 am-4:00 pm</span>
                </li>
              </ul>
            </div> -->
                </div>
                <div class="Contact_form">
                    <form action="#">
                        <div class="input_grid" data-aos="fade-up" data-aos-duration="700">
                            <div class="form_input">
                                <input type="text" placeholder="First Name" />
                            </div>
                            <div class="form_input">
                                <input type="text" placeholder="Last Name" />
                            </div>
                        </div>
                        <div class="input_grid" data-aos="fade-up" data-aos-duration="700">
                            <div class="form_input">
                                <input type="email" placeholder="Email" />
                            </div>
                            <div class="form_input">
                                <input type="number" placeholder="Phone Number" />
                            </div>
                        </div>
                        <div class="form_input" data-aos="fade-up" data-aos-duration="700">
                            <textarea placeholder="Enter Your Massage"></textarea>
                        </div>
                        <input type="submit" class="submtBtn" value="Submit" data-aos="fade-up" data-aos-duration="700" />
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us ENd -->

    <!-- Foooter Heere Start -->
    <div class="footer_sec">
        <div class="container_main">
            <div class="footer_area">
                <div class="footer_logo">
                    <img src="assets/images/starTax--Main.png" alt="" />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum
                        commodi soluta iste accusamus dignissimos impedit nostrum alias
                        iusto laboriosam! Expedita, cum. Sapiente ea, perspiciatis
                        consectetur cumque beatae amet ducimus magni!
                    </p>
                    <div class="social_icon">
                        <ul>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa-brands fa-twitter"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa-brands fa-instagram"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>
                                        <i class="fa-brands fa-youtube"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="moreLInks_grid">
                    <div class="footer_link">
                        <h4>Quick Links</h4>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Faqs</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer_link" data-aos="fade-up" data-aos-duration="700">
                        <h4>Company</h4>
                        <ul>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Media & Press</a>
                            </li>
                            <li>
                                <a href="Privacy.html">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="Terms.html">Terms of use</a>
                            </li>
                    </div>
                    <div class="footer_link">
                        <h4>RESOURCES & GUIDES</h4>
                        <ul>
                            <li>
                                <a href="#">Trust & Safety</a>
                            </li>
                            <li>
                                <a href="#">ClearTax Chronicles</a>
                            </li>
                            <li>
                                <a href="#">FinTech glossary</a>
                            </li>
                            <li>
                                <a href="#">Tax</a>
                            </li>
                    </div>
                    <div class="megaLinks">
                        <h4>Mega Links Heading</h4>
                        <div class="mega_links_colum">
                            <div class="coloum_link">
                                <h5>Sub Heading</h5>
                                <ul>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="coloum_link">
                                <h5>Sub Heading</h5>
                                <ul>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="coloum_link">
                                <h5>Sub Heading</h5>
                                <ul>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="coloum_link">
                                <h5>Sub Heading</h5>
                                <ul>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                    <li>
                                        <a href="#">Links</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copy_right">
                    <p>
                        Copyright 2024 StarTax .Website Design Kashan Shaikh
                    </p>
                    <div class="pricy">
                        <span>
                            <a href="Terms.html">Terms & Conditions
                            </a>
                            <a href="Privacy.html">Privacy Policy</a>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Foooter Heere ENd -->


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/mainjs/main.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>