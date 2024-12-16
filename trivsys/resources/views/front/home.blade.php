@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    {{-- Hero section start --}}
    <section class="w-full h-auto md:h-[600px] bg-cover bg-center bg-no-repeat py-6 md:bg-block bg-none"
        style="background-image: url({{ asset('storage/img/section2.gif') }});">
        <div class="w-full h-full flex flex-col justify-center items-start gap-3 px-5 md:px-[5%]">
            <h1 class="text-4xl md:text-5xl font-bold text-[#fff]">Revolutionizing</h1>
            <h1 class="text-4xl md:text-5xl font-bold text-[#EB7422] animationText"></h1>
            <h1 class="text-4xl md:text-5xl font-bold text-[#fff]">Through Innovation</h1>
            <div class="w-full md:w-[40%] mt-4">
                <p class="text-white text-sm md:text-lg">
                 <span class="font-bold text-[#EB7422]">Trivsys</span> is the global guru in the world of app
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
            <p class="text-3xl font-bold text-[#eb7422] animate__animated animate__bounce">Conquer the Digital Frontier with
                Us</p>
            <div>
                <p>At Trivsys, we don’t just provide solutions – we drive your business from the ground up to new heights.
                    With our expert guidance, we help you navigate the digital world seamlessly, transforming your business
                    from its initial phase to thriving success. Through cutting-edge technology and strategic innovation, we
                    deliver exceptional user experiences and measurable results. Let’s break boundaries together and unlock
                    your business’s true potential with the power of digital transformation.</p>
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
                Fuel Your Business with Innovation at Its Core.
            </p>

            <!-- Description text -->
            <p class="mt-3 text-base md:text-lg">
                At Trivsys, we’re not just offering products – we’re delivering transformative solutions that redefine your
                business journey. By seamlessly integrating our cutting-edge technology, we empower you to unlock new
                growth, efficiency, and success. Our innovative tools are crafted to accelerate your business, making
                operations smarter, faster, and more impactful. Step into the future with Trivsys and experience the power
                of digital transformation, one solution at a time.
            </p>
        </div>
    </div>

    {{-- Our Core Products section end  --}}


    {{-- services section start --}}
    <div class="w-full md:h-auto bg-[#F3F3F3] mt-3 md:py-10 z-30">
        <div class="w-full md:w-[58%] h-auto mx-auto px-4">
            <div>
                <p class="text-3xl md:text-5xl font-bold text-center uppercase mb-3 relative z-40" id="services">
                    Our Service Offerings
                </p>
            </div>
            <p class="text-base md:text-lg text-center">
                Unlock the Full Potential of Your Business with Our Expert Solutions.

                At Trivsys, we don’t just offer services – we craft bespoke, end-to-end solutions that transform your vision
                into reality. From expert consultation to full-stack app development and beyond, our team of specialists
                delivers tailored strategies that align perfectly with your goals. Whether you're starting from scratch or
                scaling to new heights, we provide seamless, innovative, and impactful solutions at every stage of your
                business journey. Experience the Trivsys difference and watch your business thrive with our cutting-edge
                services.
            </p>
        </div>

        <!-- Service Cards -->
        <div class="w-full h-auto flex flex-wrap justify-center gap-6 mt-[5rem]">
            <!-- iPhone App Development Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development py-2">
                <a href="{{ route('crm') }}">
                    <div class="flex h-auto place-items-center cursor-pointer">
                        <div class="services-img">
                            <img class="max-w-[90%] w-[60%]" src="{{ asset('storage/img/a.gif') }}" alt="">
                        </div>
                        <div class="p">
                            <p class="font-bold text-lg">CRM <br> Software</p>
                        </div>
                    </div>
                    <div class="services-text">
                        <p class="font-bold text-lg">CRM <br> Software</p>
                        <p class="mt-2">Transform Your Business with Smart, Scalable CRM Solutions.

                            Trivsys cutting-edge CRM software that streamlines your operations, boosts customer
                            relationships, and drives growth. Tailored to your needs, our solutions empower you to work
                            smarter, not harder.Experience the difference with solutions designed to scale with your
                            success.</p>
                    </div>
                </a>

            </div>

            <!-- Custom Game Development Card -->
            <div class="w-full sm:w-[300px] px-2 cursor-pointer app-development ">
                <a href="{{ route('erp') }}">
                    <div class="flex h-auto place-items-center cursor-pointer">
                        <div class="services-img">
                            <img class="max-w-[90%] w-[60%]" src="{{ asset('storage/img/b.gif') }}" alt="">
                        </div>
                        <div class="p">
                            <p class="font-bold text-lg">ERP Software</p>
                        </div>
                    </div>
                    <div class="services-text">
                        <p class="font-bold text-lg">ERP Software</p>
                        <p class="mt-2">Unleash the Power of Seamless Business Management.

                            Our ERP software streamlines your operations, boosts efficiency, and drives growth – all
                            tailored to your unique business needs. Experience smarter management, better insights, and
                            endless possibilities.</p>
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
                        <p class="mt-2">Crafting Exceptional Android Apps That Captivate and Engage.

                            We create cutting-edge, feature-rich native apps that deliver seamless user experiences, keeping
                            your customers hooked and coming back for.</p>
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
                        <p class="mt-2">Power Your Business with Seamless E-Commerce Solutions.

                            We deliver cutting-edge e-commerce platforms designed to elevate your business across all mobile
                            and web interfaces. Tailored for growth, our solutions ensure a seamless shopping experience
                            that keeps customers engaged and drives sales.</p>
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
                <p class="text-xl md:text-3xl font-bold text-center  text-white">Expand your horizons and <br> Achieve
                    Greatness with Trivsys ERP Solutions
                </p>
                <button class="px-6 py-2 bg-[white] text-md rounded-[20px] font-medium  mt-6 block mx-auto">
                     <a href="{{ route('contact') }}">Contact Us <span class="text-[red]"><i class="fa-solid fa-arrow-right"></i> </span></a>
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
            <p class="text-2xl md:text-4xl font-bold mt-2" id="services">Turning Your Ideas into Digital Masterpieces.
            </p>
            {{-- <p class="text-2xl md:text-4xl font-bold mt-2 uppercase mb-3 relative z-40" id="services">Into a Digital
                Reality</p> --}}
            <p class="text-base md:text-lg mt-3">
                We craft world-class iOS, Android, and web solutions, transforming your vision into powerful,
                enterprise-grade applications that drive success and innovation.
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
                <div class="flex md:flex-row flex-col gap-3">
                    <div>
                        <p class="mt-5 text-md  text-white">1. Unify Your Operations with Ease</p>
                        <p class="mt-2 text-md  text-white">2. All your processes, data, and teams in one powerful
                            platform.</p>
                    </div>
                    <div>
                        <p class="mt-5 text-md text-white">3. Maximize Efficiency.</p>
                        <p class="mt-2 text-md text-white">4. Empower your team with tools that accelerate performance and
                            drive results.</p>
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
                <div class="w-full  flex md:flex-row flex-col gap-3">
                    <div>
                        <p class="mt-5 text-md">1. Unify Your Operations with Ease</p>
                        <p class="mt-2 text-md ">2. All your processes, data, and teams in one powerful platform.</p>
                    </div>
                    <div>
                        <p class="mt-5 text-md">3. Maximize Efficiency.</p>
                        <p class="mt-2 text-md">4. Empower your team with tools that accelerate performance and drive
                            results.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- baner 1 section end --}}



    {{-- baner 2 section start --}}
    <div class="w-full md:h-[400px] h-auto bg-[#F3F3F3] relative" id="baner-conatiner">
        <div class="w-full h-full flex justify-center md:justify-start place-items-center px-4 md:px-8 absolute left-0 top-0"
            id="baner-img" style="background-image: url({{ asset('storage/img/baner-3.gif') }})">
            <div class="w-full md:w-[50%] p-4 md:p-8 text-center md:text-left">
                <p class="text-xl text-white">CRM Made Simple</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Streamline Customer Interactions, Anytime,
                    Anywhere.</p>
                <p class="mt-3 text-white">Building strong customer relationships is essential, not optional</p>
            </div>
        </div>
        <div
            class="w-full h-full flex justify-center md:justify-between items-center flex-col md:flex-row px-12 py-4 md:py-0">
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="text-xl">CRM Made Simple</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Streamline Customer Interactions, Anytime,
                    Anywhere.</p>
                <p class="mt-3">Building strong customer relationships is essential, not optional</p>
            </div>
            <div class="w-full md:w-[50%] flex justify-center mb-4 md:mb-0">
                <img class="w-[57%]" src="{{ asset('storage/img/baner2.gif') }}" alt="">
            </div>
        </div>
    </div>
    {{-- baner 2 section end --}}

    {{-- baner 3 section start --}}
    <div class="w-full md:h-[400px] h-auto bg-[#F3F3F3] relative" id="baner-conatiner">
        <div class="w-full h-full flex justify-center md:justify-end place-items-center px-4 md:px-8 absolute left-0 top-0"
            id="baner-img" style="background-image: url({{ asset('storage/img/baner-5.gif') }})">
            <div class="w-full md:w-[50%] p-4 md:p-8 text-center md:text-left">
                <p class="text-xl text-white">Build Your Future with Seamless Web Development</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Transform your ideas into reality with ease.
                </p>
                <p class="mt-3 text-white">Our platform offers powerful, user-friendly tools for building dynamic websites,
                    no
                    technical expertise required. Whether you're launching your first website or enhancing an existing one,
                    we provide everything you need to create a stunning online presence.</p>
            </div>
        </div>
        <div
            class="w-full h-full flex justify-center md:justify-between items-center flex-col md:flex-row px-12 py-4 md:py-0">
            <div class="w-full md:w-[50%] flex justify-center mb-4 md:mb-0">
                <img class="w-[57%]" src="{{ asset('storage/img/baner-4.gif') }}" alt="">
            </div>
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="text-xl">Build Your Future with Seamless Web Development</p>
                <p class="text-3xl md:text-4xl mt-3 font-bold text-[#EB7422]">Transform your ideas into reality with ease.
                </p>
                <p class="mt-3">Our platform offers powerful, user-friendly tools for building dynamic websites, no
                    technical expertise required. Whether you're launching your first website or enhancing an existing one,
                    we provide everything you need to create a stunning online presence.</p>
            </div>
        </div>
    </div>
    {{-- baner 3 section end --}}




    {{-- product delivery section start  --}}

    <div class="w-full h-auto mt-9 p-3">
        <div class="w-[90%] h-auto  mx-auto rounded-3xl bg-cover bg-center bg-no-repeat"
            style="background-image: url({{ asset('storage/img/bg.gif') }})">
            <div class="w-full h-full flex flex-col md:flex-row justify-evenly items-center gap-6 p-4">
                <div class="w-full md:w-[40%] flex justify-center">
                    <img class="w-[70%] md:w-[80%]" src="{{ asset('storage/img/deleviry.png') }}" alt="">
                </div>
                <div class="w-full md:w-[50%] flex flex-col gap-6 text-center justify-center">
                    <div class="flex flex-col md:flex-row gap-10 text-center items-center">
                        <div>
                            <h1 class="text-3xl md:text-5xl font-bold text-white">1000+</h1>
                            <p class="text-lg text-white">Products (Apps) Delivered</p>
                        </div>
                        <div>
                            <h1 class="text-3xl md:text-5xl font-bold text-white">650+</h1>
                            <p class="text-lg text-white">Creative Nerds under one roof</p>
                        </div>
                    </div>
                    <div>
                        <h1 class="text-3xl md:text-5xl font-bold text-white">$700m</h1>
                        <p class="text-lg text-white">Investment Raised for startups</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- product delivery section end  --}}


    {{-- contact from section start --}}
    <div class="w-full h-auto md:h-screen mt-6 py-3" style="background-image: url({{ asset('storage/img/c-bg.jpg') }})">
        <div class="w-[90%] h-full bg-[#202125] mx-auto rounded-2xl flex flex-col md:flex-row gap-3">
            <!-- Left Section -->
            <div class="w-full md:w-[50%] h-auto bg-cover bg-center bg-no-repeat py-3 rounded-xl px-4"
                style="background-image: url({{ asset('storage/img/contact.jpg') }})">
                <p class="ms-4 cursor-pointer hover:text-[#EC7329] ease-in-out duration-300 text-dark">
                    <i class="fa-solid fa-envelope"></i> info@retrocube.com
                </p>
                <div class="w-full md:h-[80%] h-auto flex flex-col justify-end mt-6">
                    <div>
                        <h1 class="text-3xl md:text-4xl font-bold text-[#6A6D76]">
                            <span class="text-black">Every Successful</span> <br> Project Begins with a <br> Vision!
                        </h1>
                    </div>
                </div>
                <div class="w-full h-auto flex items-center gap-3 mt-6">
                    <i class="fa-brands fa-twitter text-xl md:text-2xl cursor-pointer text-[#1DA1F2] "></i>
                    <i class="fa-brands fa-facebook text-xl md:text-2xl cursor-pointer text-blue-600"></i>
                    <i class="fa-brands fa-instagram text-xl md:text-2xl cursor-pointer text-[#E4405F]"></i>
                    <i class="fa-brands fa-linkedin text-xl md:text-2xl cursor-pointer text-[#0A66C2]"></i>
                    <i class="fa-brands fa-tiktok text-xl md:text-2xl cursor-pointer text-black"></i>
                </div>
            </div>

            <!-- Right Section -->
            <div class="w-full md:w-[50%] h-auto">
                <div class="w-[90%] mx-auto py-3">
                    <h1 class="text-2xl md:text-3xl font-medium text-white">
                        <span class="text-[#6A6D76]">Which Of our</span> <br> services can support you?
                    </h1>
                    <p class="text-[#6A6D76] mt-3">I'm looking for:</p>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            <span class="text-[#fff]">{{ session('success') }}</span>
                        </div>
                    @endif
                    <div class="w-full flex flex-wrap gap-3 mt-4">
                        <button class="px-4 py-2 border-2 border-[#6A6D76] rounded-xl text-white hover:bg-[#6A6D76] btn">
                            Web Development
                        </button>
                        <button class="px-4 py-2 border-2 border-[#6A6D76] rounded-xl text-white hover:bg-[#6A6D76] btn">
                            App Development
                        </button>
                        <button class="px-4 py-2 border-2 border-[#6A6D76] rounded-xl text-white hover:bg-[#6A6D76] btn">
                            ERP Software
                        </button>
                        <button class="px-4 py-2 border-2 border-[#6A6D76] rounded-xl text-white hover:bg-[#6A6D76] btn">
                            CRM Software
                        </button>
                        <button class="px-4 py-2 border-2 border-[#6A6D76] rounded-xl text-white hover:bg-[#6A6D76] btn">
                            Digital Marketing
                        </button>
                    </div>
                    <div class="">
                        <form action="{{ route('storeClientDetail') }}" method="POST" class="flex flex-col gap-5 mt-6"
                            autocomplete="off">
                            @csrf
                            <input type="hidden" name="service" id="service" value="">
                            <input type="text" name="full_name" placeholder="Enter Full Name"
                                class="w-full border-b border-[#ccc] py-2 text-white placeholder:text-[#6A6D76] bg-inherit outline-none">
                            <input type="text" name="email_address" placeholder="Enter Email Address"
                                class="w-full border-b border-[#ccc] py-2 text-white placeholder:text-[#6A6D76] bg-inherit outline-none">
                            <input type="text" name="phone_number" placeholder="Enter Phone Number"
                                class="w-full border-b border-[#ccc] py-2 text-white placeholder:text-[#6A6D76] bg-inherit outline-none">
                            <input type="text" name="brief" placeholder="Enter Brief "
                                class="w-full border-b border-[#ccc] py-2 text-white placeholder:text-[#6A6D76] bg-inherit outline-none">
                            <button class="bg-[#EB7422] text-lg py-2 rounded text-white hover:bg-[#d0641c] transition">
                                Submit Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- contact from section end --}}
@endsection
