<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trivsys</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            font-family: "Poppins", serif;
            font-weight: 300;
            font-style: normal;
        }

        .loader-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1;
            background: #000000;
            animation: loader 1.5s infinite ease;
            /* Animation for loader fading */
        }

        /* From Uiverse.io by Nawsome */
        .pl {
            width: 6em;
            height: 6em;
        }

        .pl__ring {
            animation: ringA 2s linear infinite;
        }

        .pl__ring--a {
            stroke: #f42f25;
        }

        .pl__ring--b {
            animation-name: ringB;
            stroke: #f49725;
        }

        .pl__ring--c {
            animation-name: ringC;
            stroke: #255ff4;
        }

        .pl__ring--d {
            animation-name: ringD;
            stroke: #f42582;
        }

        /* Animations */
        @keyframes ringA {

            from,
            4% {
                stroke-dasharray: 0 660;
                stroke-width: 20;
                stroke-dashoffset: -330;
            }

            12% {
                stroke-dasharray: 60 600;
                stroke-width: 30;
                stroke-dashoffset: -335;
            }

            32% {
                stroke-dasharray: 60 600;
                stroke-width: 30;
                stroke-dashoffset: -595;
            }

            40%,
            54% {
                stroke-dasharray: 0 660;
                stroke-width: 20;
                stroke-dashoffset: -660;
            }

            62% {
                stroke-dasharray: 60 600;
                stroke-width: 30;
                stroke-dashoffset: -665;
            }

            82% {
                stroke-dasharray: 60 600;
                stroke-width: 30;
                stroke-dashoffset: -925;
            }

            90%,
            to {
                stroke-dasharray: 0 660;
                stroke-width: 20;
                stroke-dashoffset: -990;
            }
        }

        @keyframes ringB {

            from,
            12% {
                stroke-dasharray: 0 220;
                stroke-width: 20;
                stroke-dashoffset: -110;
            }

            20% {
                stroke-dasharray: 20 200;
                stroke-width: 30;
                stroke-dashoffset: -115;
            }

            40% {
                stroke-dasharray: 20 200;
                stroke-width: 30;
                stroke-dashoffset: -195;
            }

            48%,
            62% {
                stroke-dasharray: 0 220;
                stroke-width: 20;
                stroke-dashoffset: -220;
            }

            70% {
                stroke-dasharray: 20 200;
                stroke-width: 30;
                stroke-dashoffset: -225;
            }

            90% {
                stroke-dasharray: 20 200;
                stroke-width: 30;
                stroke-dashoffset: -305;
            }

            98%,
            to {
                stroke-dasharray: 0 220;
                stroke-width: 20;
                stroke-dashoffset: -330;
            }
        }

        @keyframes ringC {
            from {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: 0;
            }

            8% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -5;
            }

            28% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -175;
            }

            36%,
            58% {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: -220;
            }

            66% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -225;
            }

            86% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -395;
            }

            94%,
            to {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: -440;
            }
        }

        @keyframes ringD {

            from,
            8% {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: 0;
            }

            16% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -5;
            }

            36% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -175;
            }

            44%,
            50% {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: -220;
            }

            58% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -225;
            }

            78% {
                stroke-dasharray: 40 400;
                stroke-width: 30;
                stroke-dashoffset: -395;
            }

            86%,
            to {
                stroke-dasharray: 0 440;
                stroke-width: 20;
                stroke-dashoffset: -440;
            }
        }



        #services::before {
            position: absolute;
            bottom: 9px;
            right: 90px;
            content: '';
            height: 15px;
            width: 400px;
            background: #ffcaa8;
            border-radius: 20px;
            z-index: -1;
        }

        @media (max-width: 768px) {
            #services::before {
                right: 40px;
                /* Reduce right positioning */
                width: 300px;
                /* Make it smaller on medium screens */
                height: 12px;
                /* Adjust height for balance */
                bottom: 7px;
                /* Reduce bottom positioning */
            }
        }

        @media (max-width: 480px) {
            #services::before {
                right: 20px;
                /* Further reduce right positioning on mobile */
                width: 250px;
                /* Adjust width for mobile */
                height: 8px;
                /* Decrease height */
                bottom: 5px;
                /* Slightly smaller bottom positioning */
            }
        }

        .app-development {
            height: 150px;
            min-height: 150px;
            transition: ease 1s;
            border-top: 1px solid #f49725;
            border-left: 1px solid #f49725;
            border-right: 1px solid #f49725;
            position: relative;
        }

        .services-text {
            display: none;
            transition: ease 1s;
        }

        .app-development:hover {
            height: auto;
            min-height: 350px;
            /* Adjust according to your content */
        }

        .app-development:hover .services-text {
            display: block;
            transition: ease 1s;
        }

        .app-development:hover .p {
            display: none;
            transition: 1s;
        }

        .app-development:hover .services-img {
            width: 100%;
            transition: 1s;
        }

        .app-development:hover .services-img img {
            width: 45%;
            display: block;
            margin: auto;
            transition: 1s;
        }

        /* Corrected position of ::before and ::after */
        .app-development::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            background: #EB7422;
            width: 0;
            height: 2px;
            transition: width 1s ease-in-out;
        }

        .app-development::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            background: #EB7422;
            width: 0;
            height: 2px;
            display: none;
            /* Initially hidden */
            transition: width 1s ease-in-out;
        }

        .app-development:hover {
            border-right: 2px solid #EB7422;
            border-left: 2px solid #EB7422;
            transition: 0.5s
        }

        .app-development:hover::before {
            width: 100%;
            display: block;
            animation: animationBefore 1s linear forwards;
        }

        .app-development:hover::after {
            display: block;
            width: 100%;
            animation: animationAfter 1s linear forwards;
        }



        @keyframes animationBefore {
            0% {
                width: 0%;
            }

            35%,
            55% {
                width: 100%;
            }

            100% {
                width: 100%;
            }
        }

        @keyframes animationAfter {
            0% {
                width: 0%;
            }

            35%,
            55% {
                width: 100%;
            }

            100% {
                width: 100%;
            }
        }

        .mobile-img {
            animation: img 2s ease-in-out infinite;
        }

        @keyframes img {
            0% {
                top: 0px;
            }

            50% {
                top: 50px;
                /* Slightly smaller movement for smoother animation */
            }

            100% {
                top: 0px;
            }
        }

        #baner-img {
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            transition: opacity 1.5s linear, clip-path 1.5s linear;
            z-index: -1;
        }

        #baner-conatiner:hover #baner-img {
            opacity: 1;
            clip-path: circle(150% at 50% 50%);
            z-index: 10;
            cursor: pointer;
        }

        #baner-conatiner:hover #baner-img {
            transition: opacity 1.5s linear, clip-path 1.5s linear;
        }

        #baner-conatiner:not(:hover) #baner-img {
            opacity: 0;
            clip-path: circle(0% at 50% 50%);
            z-index: -1;
            transition: opacity 1.5s linear, clip-path 1.5s linear;
        }
    </style>
</head>

<body>

    <!-- loader section start -->
    {{-- <div class="loader-container">
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000"
                stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div> --}}
    <!-- loader section end -->

    <nav class="w-full h-[80px] bg-[white] flex justify-between md:px-3 px-3 place-items-center">
        <!-- Logo Section -->
        <div class="md:w-[15%] w-[40%]">
            <img class="w-[100%]" src="{{ asset('storage/img/Untitled-1-removebg-preview.png') }}" alt="Company Logo">
        </div>

        <!-- Navigation Menu (Visible on medium screens and larger) -->
        <div class="md:block hidden">
            <ul class="flex gap-4 text-lg relative">
                <li class=""><a href="#">Home</a></li>
                <li class=""><a href="#">About</a></li>
                <li class="relative group ">
                    <a href="#">Services</a>
                </li>
                <li class=""><a href="#">Portfolio</a></li>
                <li class=""><a href="#">Career</a></li>
                <li class=""><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Contact Info Section (Visible on medium screens and larger) -->
        <div class="md:block hidden">
            <div class="flex gap-3">
                <img class="w-[20%]" src="{{ asset('storage/img/cell.png') }}" alt="Phone Icon">
                <div>
                    <p class="text-[#EB7422]">Call us now</p>
                    <p class="text-xl">+1-888-442-4644</p>
                </div>
            </div>
        </div>

        <!-- Mobile Hamburger Menu (Hidden on medium screens and larger) -->
        <div class="md:hidden block">
            <i class="fa-solid fa-bars text-4xl menubar"></i>
        </div>
    </nav>

    {{-- sidebar section start --}}
    <div class="w-full h-screen flex justify-end fixed top-0 left-0 sidebar"
        style="transform: translateX(100%); transition: transform 1s;">
        <div class="w-[300px] h-full bg-[white] flex relative justify-center p-10 shadow-lg">
            <i class="fa-solid fa-x absolute left-4 top-2 cancel text-2xl"></i>
            <ul class="flex flex-col gap-9 text-lg mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    {{-- sidebar section end --}}


    {{-- Hero section start --}}
    <section class="w-full h-auto md:h-[600px] bg-cover bg-center bg-no-repeat py-6"
        style="background-image: url({{ asset('storage/img/section.webp') }});">
        <div class="w-full h-full flex flex-col justify-center items-start gap-3 px-5 md:px-[5%]">
            <h1 class="text-4xl md:text-5xl font-bold text-[#fff]">Revolutionizing</h1>
            <h1 class="text-4xl md:text-5xl font-bold text-[#EB7422] animationText"></h1>
            <h1 class="text-4xl md:text-5xl font-bold text-[#fff]">Through Innovation</h1>
            <div class="w-full md:w-[40%] mt-4">
                <p class="text-white text-sm md:text-lg">
                    <span class="font-bold text-[#EB7422]">RetroCube</span> is the global guru in the world of app
                    development services, leading the way through eccentricity and technological creativity. We excel in
                    creating highly responsive and adaptive apps, providing invigorating user experience across all
                    platforms.
                </p>
            </div>
            <button class="px-6 py-2 bg-[white] text-md rounded-[20px] font-medium mt-3">Contact Us <span
                    class="text-[red]"><i class="fa-solid fa-arrow-right"></i> </span></button>
        </div>
    </section>
    {{-- Hero section end --}}



    {{-- Empowering Enterprises section start --}}

    <div
        class="w-full h-auto flex flex-col lg:flex-row justify-between place-items-center md:gap-3 gap-10 px-5 py-4 mt-3">
        <div class="w-full lg:w-[50%] h-auto flex flex-col gap-3" id="one">
            <p class="text-xl">Empowering Enterprises</p>
            <p class="text-3xl font-bold text-[#eb7422] animate__animated animate__bounce">Conquer the world with us</p>
            <div>
                <p>We are dedicated to guiding you to navigate through the digital realm in order to grow your business
                    from the introduction phase to the growth stage. We envision driving positive outcomes by allocating
                    our expertise and tech solutions. Our detailed and strategic approach allows us to deliver a
                    distinctive user experience. Let’s touch the horizons with digitalization.</p>
            </div>
        </div>

        <div class="w-full lg:w-[50%] h-auto flex gap-4 flex-col lg:flex-row" id="four">
            <div class="md:block hidden">
                <img class="h-[350px] w-full object-cover" src="{{ asset('storage/img/bg-line1.png') }}" alt="">
            </div>

            <div class="bg-cover bg-center bg-no-repeat w-full h-auto"
                style="background-image: url({{ asset('storage/img/bg-line2.png') }});">
                <div class="w-full h-auto lg:h-[50%] flex justify-around place-items-center ">
                    <div class="text-center mb-5 lg:mb-0 count" data-target="30">
                        <p class="text-5xl mb-3 text-[#eb7422] font-bold" id="count1">0+</p>
                        <p>Countries Served</p>
                    </div>
                    <div class="text-center mb-5 lg:mb-0 count" data-target="150">
                        <p class="text-5xl mb-3 text-[#eb7422] font-bold" id="count2">0+</p>
                        <p>Active Clients</p>
                    </div>
                </div>
                <div class="w-full h-auto lg:h-[50%] flex justify-around place-items-center ">
                    <div class="text-center mb-5 lg:mb-0 count" data-target="90">
                        <p class="text-5xl mb-3 text-[#eb7422] font-bold" id="count3">0%</p>
                        <p>Client Retention Ratio</p>
                    </div>
                    <div class="text-center count" data-target="40">
                        <p class="text-5xl mb-3 text-[#eb7422] font-bold " id="count4">0+</p>
                        <p>Employees</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Empowering Enterprises section end --}}


    {{-- Our Core Products section start  --}}
    <div class="w-full h-auto mt-3 flex flex-col md:flex-row place-items-center px-4 shadow-black py-6">
        <div class="text-center md:text-left">
            <!-- Title section -->
            <p class="text-2xl">Our Core Products</p>

            <!-- Subtitle section with animation -->
            <p class="text-3xl md:text-4xl text-[#EB7422] font-bold animate__animated animate__bounce">
                Integrate innovation at the core of your business
            </p>

            <!-- Description text -->
            <p class="mt-3 text-base md:text-lg">
                We believe in transforming the journey of businesses with the integration of our products
            </p>
        </div>
    </div>

    {{-- Our Core Products section end  --}}


    {{-- services section start --}}
    <div class="w-full md:h-[700px] bg-[#F3F3F3] mt-3 md:py-10 z-30">
        <div class="w-full md:w-[58%] h-auto mx-auto px-4">
            <div>
                <p class="text-3xl md:text-5xl font-bold text-center uppercase mb-3 relative z-40" id="services">
                    Our Service Offerings
                </p>
            </div>
            <p class="text-base md:text-lg">
                Our strength lies in the comprehensive suite of services we offer our clients. From consultation to
                full-stack app development services, our experts provide complete services tailored to your needs.
            </p>
        </div>

        <!-- Service Cards -->
        <div class="w-full h-auto flex flex-wrap justify-center gap-6 mt-[5rem]">
            <!-- iPhone App Development Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development py-2">
                <span class="span"></span>
                <span class="span2"></span>
                <div class="flex h-auto place-items-center cursor-pointer">
                    <div class="services-img">
                        <img class="max-w-full" src="{{ asset('storage/img/a.gif') }}" alt="">
                    </div>
                    <div class="p">
                        <p class="font-bold text-lg">IPhone App <br> Development</p>
                    </div>
                </div>
                <div class="services-text">
                    <p class="font-bold text-lg">IPhone App <br> Development</p>
                    <p class="mt-2">RetroCube is a renowned iPhone app development company that provides top-notch
                        iOS app development services.</p>
                </div>
            </div>

            <!-- Custom Game Development Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development py-2">
                <span class="span"></span>
                <span class="span2"></span>
                <div class="flex h-auto place-items-center cursor-pointer">
                    <div class="services-img">
                        <img class="max-w-full" src="{{ asset('storage/img/b.gif') }}" alt="">
                    </div>
                    <div class="p">
                        <p class="font-bold text-lg">Custom Game <br> Development</p>
                    </div>
                </div>
                <div class="services-text">
                    <p class="font-bold text-lg">Custom Game <br> Development</p>
                    <p class="mt-2">The most demanding game service! We bring your gaming experiences that stem from
                        the most creative minds.</p>
                </div>
            </div>

            <!-- Android App Development Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development py-2">
                <span class="span"></span>
                <span class="span2"></span>
                <div class="flex h-auto place-items-center cursor-pointer">
                    <div class="services-img">
                        <img class="max-w-full" src="{{ asset('storage/img/c.gif') }}" alt="">
                    </div>
                    <div class="p">
                        <p class="font-bold text-lg">Android App <br> Development</p>
                    </div>
                </div>
                <div class="services-text">
                    <p class="font-bold text-lg">Android App <br> Development</p>
                    <p class="mt-2">We keep the customer enthralled by developing native apps for the Android
                        platform with interesting features.</p>
                </div>
            </div>

            <!-- E-commerce Solutions Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development py-2">
                <div class="flex h-auto justify-around place-items-center cursor-pointer">
                    <div class="services-img mt-6">
                        <img class="max-w-full" src="{{ asset('storage/img/d.gif') }}" alt="">
                    </div>
                    <div class="p mt-6">
                        <p class="font-bold text-lg">E-commerce <br> Solutions</p>
                    </div>
                </div>
                <div class="services-text">
                    <p class="font-bold text-lg">E-commerce <br> Solutions</p>
                    <p class="mt-2">The complete e-commerce need for your business! We offer e-commerce solutions on
                        all mobile platforms for your business.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- services section end --}}


    {{-- Expand your horizons start --}}
    <div class="w-full h-auto md:h-[550px] flex flex-col justify-center">
        <div class="w-[90%] md:w-[85%] h-auto md:h-[420px] mx-auto rounded-3xl bg-cover bg-center bg-no-repeat flex flex-col md:flex-row justify-between place-items-center relative px-10 overflow-hidden mt-4"
            style="background-image: url({{ asset('storage/img/bg.jpg') }})">
            <!-- Left Image -->
            <div class="w-full md:w-auto">
                <img class="w-full md:w-[100%] h-[auto] md:h-[25rem] mt-6 md:mt-0"
                    src="{{ asset('storage/img/m1.png') }}" alt="">
            </div>

            <!-- Text and Button -->
            <div class=" md:text-left mt-6 md:mt-0">
                <p class="text-xl md:text-3xl font-bold text-center  text-white">Expand your horizons and <br> achieve
                    greatness
                    with Retrocube
                </p>
                <button class="px-6 py-2 bg-[white] text-md rounded-[20px] font-medium  mt-6 block mx-auto">
                    Contact Us <span class="text-[red]"><i class="fa-solid fa-arrow-right"></i> </span>
                </button>
            </div>

            <!-- Right Image Section -->
            <div class="w-full md:w-auto mt-6 md:mt-0">
                <div class="relative">
                    <img class="w-full md:w-[100%] h-[auto] md:h-[26rem] mt-13 md:mt-0 "
                        src="{{ asset('storage/img/m2.png') }}" alt="">
                    <img class="absolute top-8 md:left-5 left-9 w-[80%] md:w-[85%] md:h-[26rem] h-[36rem] rounded-2xl mobile-img"
                        src="{{ asset('storage/img/m3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Expand your horizons end --}}



    {{-- Converting Your Ideas section start --}}
    <div class="w-full h-auto md:h-[200px] flex justify-center place-items-center mt-5">
        <div class="w-[90%] md:w-[40%] text-center">
            <p class="text-2xl md:text-4xl font-bold mt-2">Converting Your Ideas</p>
            <p class="text-2xl md:text-4xl font-bold mt-2 uppercase mb-3 relative z-40" id="services">Into a Digital
                Reality</p>
            <p class="text-base md:text-lg mt-3">
                We help provide top-of-the-line iOS and Android solutions by developing enterprise-grade web and mobile
                applications.
            </p>
        </div>
    </div>
    {{-- Converting Your Ideas section end --}}


    {{-- baner 1 section start --}}
    <div class="w-full md:h-[400px] h-auto bg-[#F3F3F3] mt-8 relative" id="baner-conatiner">
        <div class="w-full h-full flex justify-center md:justify-end place-items-center absolute left-0 top-0"
            id="baner-img" style="background-image: url({{ asset('storage/img/bg2.jpg') }})">
            <div class="w-full md:w-[50%] p-4 md:p-8 text-center md:text-left">
                <p class="text-xl text-white">Connect with God and your inner self</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Spiritual revival at your fingertips.
                    Building the
                    staircase to heaven.</p>
                <p class="mt-3 text-white">Achieve nirvana and enlightenment with an app designed for this very
                    purpose. Road to spiritual redemption has never been more convenient.</p>
            </div>
        </div>
        <div
            class="w-full h-full flex justify-center md:justify-between items-center flex-col md:flex-row px-12 py-4 md:py-0">
            <div class="w-full md:w-[50%] flex justify-center mb-4 md:mb-0">
                <img class="w-[57%]" src="{{ asset('storage/img/bol.png') }}" alt="">
            </div>
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="text-xl">Connect with God and your inner self</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Spiritual revival at your fingertips.
                    Building the
                    staircase to heaven.</p>
                <p class="mt-3">Achieve nirvana and enlightenment with an app designed for this very purpose. Road to
                    spiritual redemption has never been more convenient.</p>
            </div>
        </div>
    </div>
    {{-- baner 1 section end --}}



    {{-- baner 2 section start --}}
    <div class="w-full md:h-[400px] h-auto bg-[#F3F3F3] relative" id="baner-conatiner">
        <div class="w-full h-full flex justify-center md:justify-start place-items-center px-4 md:px-8 absolute left-0 top-0"
            id="baner-img" style="background-image: url({{ asset('storage/img/baner-3.jpg') }})">
            <div class="w-full md:w-[50%] p-4 md:p-8 text-center md:text-left">
                <p class="text-xl text-white">Medicare Made Affordable</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Compare med prices anytime, anywhere.</p>
                <p class="mt-3 text-white">Living a healthy life is a necessity not luxury, that’s why our app allows
                    you to compare prescription prices in your vicinity with ease.</p>
            </div>
        </div>
        <div
            class="w-full h-full flex justify-center md:justify-between items-center flex-col md:flex-row px-12 py-4 md:py-0">
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="text-xl">Medicare Made Affordable</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Compare med prices anytime, anywhere.</p>
                <p class="mt-3">Living a healthy life is a necessity not luxury, that’s why our app allows you to
                    compare prescription prices in your vicinity with ease.</p>
            </div>
            <div class="w-full md:w-[50%] flex justify-center mb-4 md:mb-0">
                <img class="w-[57%]" src="{{ asset('storage/img/baner-2.png') }}" alt="">
            </div>
        </div>
    </div>
    {{-- baner 2 section end --}}

    {{-- baner 3 section start --}}
    <div class="w-full md:h-[400px] h-auto bg-[#F3F3F3] relative" id="baner-conatiner">
        <div class="w-full h-full flex justify-center md:justify-end place-items-center px-4 md:px-8 absolute left-0 top-0"
            id="baner-img" style="background-image: url({{ asset('storage/img/baner-5.jpg') }})">
            <div class="w-full md:w-[50%] p-4 md:p-8 text-center md:text-left">
                <p class="text-xl ">Medicare Made Affordable</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Compare med prices anytime, anywhere.</p>
                <p class="mt-3 ">Living a healthy life is a necessity not luxury, that’s why our app allows
                    you to compare prescription prices in your vicinity with ease.</p>
            </div>
        </div>
        <div
            class="w-full h-full flex justify-center md:justify-between items-center flex-col md:flex-row px-12 py-4 md:py-0">
            <div class="w-full md:w-[50%] flex justify-center mb-4 md:mb-0">
                <img class="w-[57%]" src="{{ asset('storage/img/baner-4.png') }}" alt="">
            </div>
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="text-xl">Letter Meadows</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Making learning fun and interesting</p>
                <p class="mt-3">Let your kids enjoy an entertaining educational experience with an app, designed to
                    make kids learn from an early age through fun and engaging games.</p>
            </div>
        </div>
    </div>
    {{-- baner 3 section end --}}



    {{-- footer section start --}}
    <footer class="w-full h-[400px] bg-[blue] flex justify-around px-3 py-9 mt-7">
        {{-- <div class="bg-[white] w-[50%] h-auto">
            <div class="md:w-[20%] w-[40%]">
                <img class="w-[100%]" src="{{ asset('storage/img/Untitled-1-removebg-preview.png') }}" alt="Company Logo">
            </div>
            <p>Intersys Limited persistently adds value to your projects and establishes a digital presence with the
                integration of innovative solutions. We design and build software-integrated solutions, including
                data-driven strategies and UI/UX designs.</p>
        </div> --}}
        <div>
            <p class="text-xl font-medium">Services</p>
            <ul class="flex flex-col gap-3 mt-3">
                <li class="font-medium">Web Development</li>
                <li class="font-medium">App Development</li>
                <li class="font-medium">Graphic Designing</li>
                <li class="font-medium">Logo Designing</li>
                <li class="font-medium">Facbook Adds</li>
            </ul>
        </div>
        <div>
            <p>Services</p>
            <ul>
                <li>Web Development</li>
                <li>App Development</li>
                <li>Graphic Designing</li>
                <li>Logo Designing</li>
                <li>Facbook Adds</li>
            </ul>
        </div>
        <div>
            <p>Services</p>
            <ul>
                <li>Web Development</li>
                <li>App Development</li>
                <li>Graphic Designing</li>
                <li>Logo Designing</li>
                <li>Facbook Adds</li>
            </ul>
        </div>
    </footer>
    {{-- footer section end --}}

    <script>
        let menubar = document.querySelector('.menubar');
        let sidebar = document.querySelector('.sidebar');
        let cancelmanu = document.querySelector('.cancel');

        menubar.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(0%)';
        });

        cancelmanu.addEventListener('click', () => {
            sidebar.style.transform = 'translateX(100%)';
        });

        window.onload = function() {
            const textElement = document.querySelector('.animationText');
            const texts = [
                "App Development",
                "Web Development",
                "Graphic Designing",
                "Logo Designing",
                "Facbook Adds",
                "SEO Services"
            ];

            let currentTextIndex = 0;
            let index = 0;
            const typingSpeed = 100;
            const eraseSpeed = 100;

            function typeText() {
                let textContent = texts[currentTextIndex];
                if (index < textContent.length) {
                    textElement.textContent += textContent.charAt(index);
                    index++;
                    setTimeout(typeText, typingSpeed);
                } else {
                    setTimeout(() => {
                        eraseText();
                    }, 2000);
                }
            }

            function eraseText() {
                let textContent = texts[currentTextIndex];
                let eraseIndex = textContent.length;

                function eraseLetter() {
                    if (eraseIndex > 0) {
                        textElement.textContent = textContent.substring(0, eraseIndex - 1);
                        eraseIndex--;
                        setTimeout(eraseLetter, eraseSpeed);
                    } else {

                        currentTextIndex = (currentTextIndex + 1) % texts.length; // Loop through the texts array
                        index = 0;
                        textElement.textContent = '';
                        typeText();
                    }
                }

                eraseLetter();
            }

            typeText();
        };

        let loader = document.querySelector('.loader-container');

        function fadeOutLoader() {
            loader.style.transition = "opacity 1s ease";
            loader.style.opacity = '0';

            setTimeout(() => {
                loader.style.display = 'none';
            }, 1000);
        }

        setTimeout(fadeOutLoader, 2000);



        function animateCount(element, target) {
            let current = 0;
            const increment = target / 80;

            function updateCount() {
                current += increment;
                if (current < target) {
                    x = element.innerText = Math.ceil(current) + '+';
                    requestAnimationFrame(updateCount);

                } else {
                    if (target === '90') {
                        x = element.innerText = target + '%';
                    } else {
                        x = element.innerText = target + '+';
                    }
                }
            }
            updateCount();
        }

        const countElements = document.querySelectorAll('.count');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target.getAttribute('data-target');
                    const countElement = entry.target.querySelector('p');
                    animateCount(countElement, target);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        countElements.forEach(element => {
            observer.observe(element);
        });
    </script>

</body>

</html>
