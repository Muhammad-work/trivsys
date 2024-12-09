@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    {{-- Hero section start --}}
    <section class="w-full h-auto md:h-[600px] bg-cover bg-center bg-no-repeat py-6"
        style="background-image: url({{ asset('storage/img/app.jpg') }});">
        <div class="w-full h-full flex flex-col justify-center items-start gap-3 px-5 md:px-[5%]">
            <h1 class="text-4xl md:text-4xl font-bold text-white animate__animated animate__bounce">Leading Flutter App
                <br> Development Company<br>
                Experience.
            </h1>
            <h1 class="md:w-[40%] text-4xl md:text-xl font-medium text-[#EB7422]">Transform your ideas into powerful
                cross-platform
                applications with our expert Flutter development team.</h1>
            <div class="w-full md:w-[40%] mt-0">
                <p class="text-white text-sm md:text-lg">At Retrocube, our skilled Flutter app developers use Google’s
                    advanced framework to provide comprehensive mobile app solutions. We design high-performance, visually
                    appealing mobile apps for iOS, Android, web, and desktop, all from one codebase, efficiently bringing
                    your ideas to life.
                </p>
            </div>
            <button class="px-6 py-2 bg-[white] text-md rounded-[20px] font-medium mt-3"><a
                    href="{{ route('contact') }}">Contact Us</a> <span class="text-[red]"><i
                        class="fa-solid fa-arrow-right"></i> </span></button>
        </div>
    </section>
    {{-- Hero section end --}}

    {{-- Innovative, section start --}}
    <div class="w-full md:h-[400px] h-auto  mt-10 md:py-0 py-3 overflow-hidden">
        <div class="w-[85%] h-full flex flex-col md:flex-row items-center justify-between mx-auto">
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="uppercase text-4xl font-bold animate__animated animate__bounce">Why Choose Flutt?</p>
                <p class="mt-2 text-lg">
                    Flutter has gained immense popularity in Android and <span class="text-[#EC7329]">iOS app
                        development</span> due to its flexibility, speed,
                    and cost-efficiency. With its powerful UI toolkit, Flutter enables developers to create stunning,
                    natively compiled applications for mobile, web, and desktop from a single codebase.
                </p>
            </div>
            <div class="w-full md:w-[50%] mt-4 md:mt-0 md:ms-10">
                <img class="w-[100%]  mx-auto md:mx-0" src="{{ asset('storage/img/flutte.png') }}"
                    alt="Web development image">
            </div>
        </div>
    </div>
    {{-- Innovative, section end --}}

    {{-- services cards section start --}}
    <div class="w-full h-auto mt-10 bg-cover bg-center bg-no-repeat md:px-0 px-4"
        style="background-image: url({{ asset('storage/img/bg3.jpg') }})">
        <!-- Heading Section -->
        <div class="w-full h-[100px] flex md:justify-start justify-center items-center ">
            <div class="md:ms-12 md:ps-14 text-center">
                <p class="text-4xl font-bold text-[#2A2D31] uppercase">The benefits of choosing Flutter include:</p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="w-full py-5">
            <div class="w-full flex justify-center flex-wrap gap-4">
                <!-- Service Card 1 -->

                <div class="w-full sm:w-[350px] h-auto  rounded md:py-10 px-3">
                    <ul class="flex flex-col gap-3">
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Future-ready apps</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Faster time-to-market</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Modular architecture</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            User-first UI & UX</li>
                    </ul>
                </div>

                <div class="w-full sm:w-[350px] h-auto  rounded md:py-10 px-3">
                    <ul class="flex flex-col gap-3">
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Exceptional featuress</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Smooth integration</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Cross-platform capabilities</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Native performances</li>
                    </ul>
                </div>

                <div class="w-full sm:w-[350px] h-auto  rounded md:py-10 px-3">
                    <ul class="flex flex-col gap-3">
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Improved scalability</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Quicker debugging</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Strong community support</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    {{-- services cards section end --}}

    {{-- Time to Level Up Your Online Presence. section start --}}
    <div class="w-full h-[400px]  mt-12 bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('storage/img/baner6.jpg') }})">
        <div class="w-full h-full flex flex-col justify-center items-center text-center">
            <p class="text-3xl md:text-4xl font-bold text-white">Time to Level Up Your Online Presence.</p>
            <p class="text-3xl md:text-4xl font-bold text-[#FF3C0F]">Let's Build Something Amazing!</p>
            <p class="text-lg md:text-xl mt-3 text-white">Get in touch with our representatives and start right away.</p>
            <button class="px-6 py-2 bg-white text-md rounded-[20px] font-medium mt-3 flex items-center justify-center">
                <a href="{{ route('contact') }}">Contact Us</a> <span class="text-red-600 ml-2"><i
                        class="fa-solid fa-arrow-right"></i></span>
            </button>
        </div>
    </div>
    {{-- Time to Level Up Your Online Presence. section end --}}


    <div class="w-full md:h-auto h-auto bg-[#f3f3f3] mt-6 md:px-0 px-3 md:py-5 py-3">
        <div class="w-full h-auto flex flex-col justify-center items-center text-center mt-6">
            <p class="text-3xl md:text-4xl font-bold uppercase">Retrocube’s Flutter App Development Services</p>
            <p class="text-lg md:text-xl mt-2">As a trusted Flutter development company, we excel in transforming visionary
                concepts into high-performance digital solutions through our comprehensive Flutter application development
                services. Recognized for our excellence in Flutter technology, our dedicated team of certified developers
                combines technical expertise with innovative solutions to deliver superior results and ensure your success
                in a competitive market.</p>
        </div>
    
        <div class="w-full h-full py-6">
            <div class="w-full flex flex-wrap justify-center gap-6">
                <!-- Card 1 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[40%] h-auto md:pb-12 bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <div class="w-full h-[100px] flex justify-between place-items-center">
                        <div>
                            <p class="text-4xl font-bold text-[#FF3C0F]">01</p>
                        </div>
                        <div>
                            <img src="{{ asset('storage/img/message.png') }}" alt=""/>
                        </div>
                    </div>
                    <div>
                        <p class="text-xl font-medium mt-2">Flutter App Consulting</p>
                        <p class="mt-2 text-sm md:text-base">Navigating the complexities of app development requires more
                            than just technical expertise; it demands strategic insight. Our Flutter app ideation and
                            consulting services are designed to refine your project concept and align it with the latest
                            industry standards. We conduct thorough research and feasibility analysis to ensure that your
                            Flutter app idea not only meets market demands but also stands out in a competitive landscape.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[40%] h-auto md:pb-12 bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <div class="w-full h-[100px] flex justify-between place-items-center">
                        <div>
                            <p class="text-4xl font-bold text-[#FF3C0F]">02</p>
                        </div>
                        <div>
                            <img src="{{ asset('storage/img/ui.png') }}" alt=""/>
                        </div>
                    </div>
                    <div>
                        <p class="text-xl font-medium mt-2">Flutter App UI/UX Design</p>
                        <p class="mt-2 text-sm md:text-base">User experience is fundamental to the success of any
                            application. Our Flutter UI/UX design services are committed to crafting interfaces that are not
                            only visually appealing but also highly functional. We collaborate closely with you to design
                            intuitive, user-centric interfaces that enhance user interaction and satisfaction. Our design
                            process incorporates detailed user research and iterative testing to ensure that every aspect of
                            your app's UI contributes to a smooth and engaging user experience.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[40%] h-auto md:pb-12 bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <div class="w-full h-[100px] flex justify-between place-items-center">
                        <div>
                            <p class="text-4xl font-bold text-[#FF3C0F]">03</p>
                        </div>
                        <div>
                            <img src="{{ asset('storage/img/applogo.png') }}" alt=""/>
                        </div>
                    </div>
                    <div>
                        <p class="text-xl font-medium mt-2">Flutter App Development</p>
                        <p class="mt-2 text-sm md:text-base">Our Flutter app development services are centered around
                            delivering a cohesive multi-platform presence for your business. Our agile developers engage
                            with you through every phase—from defining the ideal product-market fit to the meticulous
                            deployment of your application. We focus on creating robust, scalable, and high-performance
                            application development plans tailored to your specific business needs.
                        </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[40%] h-auto md:pb-12 bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <div class="w-full h-[100px] flex justify-between place-items-center">
                        <div>
                            <p class="text-4xl font-bold text-[#FF3C0F]">04</p>
                        </div>
                        <div>
                            <img src="{{ asset('storage/img/migration.png') }}" alt=""/>
                        </div>
                    </div>
                    <div>
                        <p class="text-xl font-medium mt-2">Flutter App Migration</p>
                        <p class="mt-2 text-sm md:text-base">For businesses looking to harness Flutter’s capabilities, we
                            offer expert migration options for transitioning your existing apps to the Flutter framework.
                            Our migration process is meticulously planned to enhance performance while preserving the core
                            functionality of your app. Our Certified Flutter app developers specialize in transitioning
                            applications from native Android and iOS environments to Flutter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
