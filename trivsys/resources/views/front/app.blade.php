@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    {{-- Hero section start --}}
    <section class="w-full h-auto md:h-[600px] bg-cover bg-center bg-no-repeat py-6"
        style="background-image: url({{ asset('storage/img/app.jpg') }});">
        <div class="w-full h-full flex flex-col justify-center items-start gap-3 px-5 md:px-[5%]">
            <h1 class="text-4xl md:text-4xl font-bold text-white animate__animated animate__bounce">Leading Flutter <br> App
                Development <br> Company
            </h1>
            <h1 class="md:w-[40%] text-4xl md:text-xl font-medium text-[#EB7422]">Transform Your Ideas into Powerful
                Cross-Platform Applications.</h1>
            <div class="w-full md:w-[40%] mt-0">
                <p class="text-white text-sm md:text-lg">At Trivisys, our expert Flutter development team uses Google’s
                    advanced framework to deliver comprehensive mobile app solutions. We design high-performance, visually
                    appealing apps for iOS, Android, web, and desktop—all from a single codebase—efficiently bringing your
                    ideas to life.
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
                    Flutter has gained immense popularity in Android and iOS app development due to its flexibility, speed,
                    and cost-efficiency. With its powerful UI toolkit, Flutter enables developers to create stunning,
                    natively compiled applications for mobile, web, and desktop—all from a single codebase.
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
                            Future-Ready Apps</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Faster Time-to-Market</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Modular Architecture</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            User-First UI & UX</li>
                    </ul>
                </div>

                <div class="w-full sm:w-[350px] h-auto  rounded md:py-10 px-3">
                    <ul class="flex flex-col gap-3">
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Exceptional Features</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Smooth Integration</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Cross-Platform Capabilities</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Native Performance</li>
                    </ul>
                </div>

                <div class="w-full sm:w-[350px] h-auto  rounded md:py-10 px-3">
                    <ul class="flex flex-col gap-3">
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Improved Scalability</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Quicker Debugging</li>
                        <li class="text-lg text-[#4F5255]"><i class="fa-solid fa-check p-1 rounded-full text-[#E97424]"></i>
                            Strong Community Support</li>
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
            <p class="text-3xl md:text-4xl font-bold text-white">Time to Level Up Your App Presence!</p>
            <p class="text-3xl md:text-4xl font-bold text-[#FF3C0F]">Let’s Build Something Amazing Together.</p>
            <p class="text-lg md:text-xl mt-3 text-white">Get in touch with our team and get started today.</p>
            <button class="px-6 py-2 bg-white text-md rounded-[20px] font-medium mt-3 flex items-center justify-center">
                <a href="{{ route('contact') }}">Contact Us</a> <span class="text-red-600 ml-2"><i
                        class="fa-solid fa-arrow-right"></i></span>
            </button>
        </div>
    </div>
    {{-- Time to Level Up Your Online Presence. section end --}}


    <div class="w-full md:h-auto h-auto bg-[#f3f3f3] mt-6 md:px-0 px-3 md:py-5 py-3">
        <div class="w-full h-auto flex flex-col justify-center items-center text-center mt-6">
            <p class="text-3xl md:text-4xl font-bold uppercase">Trivisys’ Flutter App Development Services</p>
            <p class="text-lg md:text-xl mt-2 md:w-[60%]">As a trusted Flutter development company, we specialize in
                transforming
                visionary concepts into high-performance digital solutions through our comprehensive Flutter application
                development services. Known for our excellence in Flutter technology, our team of certified developers
                blends technical expertise with innovative solutions to deliver superior results and ensure your success in
                a competitive market.</p>
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
                            <img src="{{ asset('storage/img/message.png') }}" alt="" />
                        </div>
                    </div>
                    <div>
                        <p class="text-xl font-medium mt-2">Flutter App Consulting</p>
                        <p class="mt-2 text-sm md:text-base">Navigating the complexities of app development requires more
                            than just technical expertise—it demands strategic insight. Our Flutter app ideation and
                            consulting services are designed to refine your project concept and align it with the latest
                            industry standards. We conduct thorough research and feasibility analysis to ensure your Flutter
                            app idea not only meets market demands but also stands out in a competitive landscape.
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
                            <img src="{{ asset('storage/img/ui.png') }}" alt="" />
                        </div>
                    </div>
                    <div>
                        <p class="text-xl font-medium mt-2">Flutter App UI/UX Design</p>
                        <p class="mt-2 text-sm md:text-base">User experience is fundamental to the success of any
                            application. Our Flutter UI/UX design services focus on creating interfaces that are not only
                            visually stunning but also highly functional. We work closely with you to design intuitive,
                            user-centric interfaces that enhance interaction and satisfaction. Our design process includes
                            in-depth user research and iterative testing to ensure every element of your app's UI
                            contributes to a smooth and engaging user experience.
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
                            <img src="{{ asset('storage/img/applogo.png') }}" alt="" />
                        </div>
                    </div>
                    <div>
                        <p class="text-xl font-medium mt-2">Flutter App Development</p>
                        <p class="mt-2 text-sm md:text-base">Our Flutter app development services are designed to deliver a
                            seamless multi-platform presence for your business. Our agile developers collaborate with you
                            through every phase—from defining the ideal product-market fit to the precise deployment of your
                            application. We focus on creating robust, scalable, and high-performance development plans
                            tailored to your specific business needs.
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
                            <img src="{{ asset('storage/img/migration.png') }}" alt="" />
                        </div>
                    </div>
                    <div>
                        <p class="text-xl font-medium mt-2">Flutter App Migration</p>
                        <p class="mt-2 text-sm md:text-base">For businesses seeking to leverage Flutter’s capabilities, we
                            offer expert migration services to transition your existing apps to the Flutter framework. Our
                            migration process is meticulously planned to enhance performance while preserving the core
                            functionality of your app. Our certified Flutter app developers specialize in migrating
                            applications from native Android and iOS environments to Flutter, ensuring a smooth and
                            efficient transition.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- contact form section start --}}
    <div class="w-full h-auto md:mt-8 mt-6">
        <div class="w-[90%] mx-auto py-3 bg-[#202125] p-4 rounded-xl">
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
            <div>
                <form action="{{ route('storeClientDetail') }}" class="flex flex-col gap-5 mt-6" method="POST"
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
    {{-- contact form section end --}}
@endsection
