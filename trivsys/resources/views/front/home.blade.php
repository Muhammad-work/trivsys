@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    {{-- Hero section start --}}
    <section class="w-full h-auto md:h-[600px] bg-cover bg-center bg-no-repeat py-6"
        style="background-image: url({{ asset('storage/img/section2.gif') }});">
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
            <button class="px-6 py-2 bg-[white] text-md rounded-[20px] font-medium mt-3"><a
                    href="{{ route('contact') }}">Contact Us </a><span class="text-[red]"><i
                        class="fa-solid fa-arrow-right"></i> </span></button>
        </div>
    </section>
    {{-- Hero section end --}}



    {{-- Empowering Enterprises section start --}}

    <div class="w-full h-auto flex flex-col lg:flex-row justify-between place-items-center md:gap-3 gap-10 px-5 py-4 mt-3">
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
                <a href="{{ route('crm') }}">
                    <div class="flex h-auto place-items-center cursor-pointer">
                        <div class="services-img">
                            <img class="max-w-[90%]" src="{{ asset('storage/img/a.gif') }}" alt="">
                        </div>
                        <div class="p">
                            <p class="font-bold text-lg">CRM <br> Software</p>
                        </div>
                    </div>
                    <div class="services-text">
                        <p class="font-bold text-lg">CRM <br> Software</p>
                        <p class="mt-2">RetroCube is a renowned iPhone app development company that provides top-notch
                            iOS app development services.</p>
                    </div>
                </a>

            </div>

            <!-- Custom Game Development Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development ">
                <a href="{{ route('erp') }}">
                    <div class="flex h-auto place-items-center cursor-pointer">
                        <div class="services-img">
                            <img class="max-w-[90%]" src="{{ asset('storage/img/b.gif') }}" alt="">
                        </div>
                        <div class="p">
                            <p class="font-bold text-lg">ERP Software</p>
                        </div>
                    </div>
                    <div class="services-text">
                        <p class="font-bold text-lg">ERP Software</p>
                        <p class="mt-2">The most demanding game service! We bring your gaming experiences that stem from
                            the most creative minds.</p>
                    </div>
                </a>
            </div>

            <!-- Android App Development Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development py-2">
                <a href="{{ route('app') }}">
                    <div class="flex h-auto place-items-center cursor-pointer">
                        <div class="services-img">
                            <img class="max-w-full" src="{{ asset('storage/img/c.gif') }}" alt="">
                        </div>
                        <div class="p">
                            <p class="font-bold text-lg">App <br> Development</p>
                        </div>
                    </div>
                    <div class="services-text">
                        <p class="font-bold text-lg">App <br> Development</p>
                        <p class="mt-2">We keep the customer enthralled by developing native apps for the Android
                            platform with interesting features.</p>
                    </div>
                </a>
            </div>

            <!-- E-commerce Solutions Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development py-2">
                <a href="{{ route('web') }}">
                    <div class="flex h-auto justify-around place-items-center cursor-pointer">
                        <div class="services-img mt-6">
                            <img class="max-w-full" src="{{ asset('storage/img/d.gif') }}" alt="">
                        </div>
                        <div class="p mt-6">
                            <p class="font-bold text-lg">Web<br> Development</p>
                        </div>
                    </div>
                    <div class="services-text">
                        <p class="font-bold text-lg">Web<br> Development</p>
                        <p class="mt-2">The complete e-commerce need for your business! We offer e-commerce solutions on
                            all mobile platforms for your business.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- services section end --}}


    {{-- Expand your horizons start --}}
    <div class="w-full h-auto md:h-[550px] flex flex-col justify-center">
        <div class="w-[90%] md:w-[85%] h-auto md:h-[420px] mx-auto rounded-3xl bg-cover bg-center bg-no-repeat flex flex-col md:flex-row justify-between place-items-center relative px-10 overflow-hidden mt-4"
            style="background-image: url({{ asset('storage/img/bg.gif') }})">
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
                    <img class="absolute top-8 md:left-5 left-5 w-[87%] md:w-[85%] md:h-[26rem] h-[36rem] rounded-2xl mobile-img"
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
            id="baner-img" style="background-image: url({{ asset('storage/img/bg2.gif') }})">
            <div class="w-full md:w-[50%] p-4 md:p-8 text-center md:text-left">
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Streamline Your Business Operations with Our
                    Powerful ERP Solution!</p>
                <div class="flex gap-6">
                    <div>
                        <p class="mt-5 text-lg  text-white"> Centralized Management</p>
                        <p class="mt-2 text-lg  text-white">Enhanced Productivity</p>
                    </div>
                    <div>
                        <p class="mt-5 text-lg text-white">Centralized Management</p>
                        <p class="mt-2 text-lg text-white">Enhanced Productivity</p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="w-full h-full flex justify-center md:justify-between items-center flex-col md:flex-row px-12 py-4 md:py-0">
            <div class="w-full md:w-[50%] flex justify-center mb-4 md:mb-0">
                <img class="w-[57%]" src="{{ asset('storage/img/bol.gif') }}" alt="">
            </div>
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Streamline Your Business Operations with Our
                    Powerful ERP Solution!</p>
                <div class="flex gap-6">
                    <div>
                        <p class="mt-5 text-lg"> Centralized Management</p>
                        <p class="mt-2 text-lg ">Enhanced Productivity</p>
                    </div>
                    <div>
                        <p class="mt-5 text-lg">Centralized Management</p>
                        <p class="mt-2 text-lg">Enhanced Productivity</p>
                    </div>
                </div>
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
@endsection
