@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    {{-- Hero section start --}}
    <section class="w-full h-auto md:h-[600px] bg-cover bg-center bg-no-repeat py-6"
        style="background-image: url({{ asset('storage/img/hero.jpg') }});">
        <div class="w-full h-full flex flex-col justify-center items-start gap-3 px-5 md:px-[5%]">
            <h1 class="text-4xl md:text-xl font-medium text-[#fff]">Empower Your Business with Trivsys</h1>
            <h1 class="text-4xl md:text-4xl font-bold text-[#EB7422] animate__animated animate__bounce">Don't Just Build a
                <br>Website, Build an <br> Experience.
            </h1>
            <div class="w-full md:w-[40%] mt-0">
                <p class="text-white text-sm md:text-lg">
                    <span class="font-medium text-white">At Trivsys, we specialize in creating visually stunning and
                        highly functional websites that provide an exceptional user experience. Our expertise in web design
                        and development ensures your business stands out with responsive, adaptive, and performance-driven
                        websites that work seamlessly across all devices and platforms.
                </p>
            </div>
        </div>
    </section>
    {{-- Hero section end --}}

    {{-- Innovative, section start --}}
    <div class="w-full md:h-[400px] h-auto  mt-10 md:py-0 py-3 overflow-hidden">
        <div class="w-[85%] h-full flex flex-col md:flex-row items-center justify-between mx-auto">
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="uppercase text-4xl font-bold animate__animated animate__bounce">Innovative, Intuitive, and
                    Scalable Web Development</p>
                <p class="mt-2 text-lg">At Trivsys, we leverage the latest technologies and innovative design to create
                    websites that keep you ahead in your industry. From concept to launch, we focus on your unique needs to
                    build a website that truly represents your brand and drives results.
                </p>
                <p class="mt-3 text-lg">Ready to Experience the Difference? <span class="text-[#EB7422] font-bold">Let’s
                        Talk!</span></p>
            </div>
            <div class="w-full md:w-[50%] mt-4 md:mt-0 md:ms-10">
                <img class="w-[100%]  mx-auto md:mx-0" src="{{ asset('storage/img/web.jpg') }}" alt="Web development image">
            </div>
        </div>
    </div>
    {{-- Innovative, section end --}}

    {{-- services cards section start --}}
    <div class="w-full h-auto mt-10 bg-cover bg-center bg-no-repeat md:px-0 px-4"
        style="background-image: url({{ asset('storage/img/bg3.jpg') }})">
        <!-- Heading Section -->
        <div class="w-full h-[150px] flex justify-center items-center">
            <div class="text-center">
                <p class="text-3xl font-bold text-[#2A2D31] uppercase">Your Destination for Comprehensive Web Solutions</p>
                <p class="text-xl">Explore our full range of web development <br> services designed to elevate your <br>
                    online presence and drive success.</p>
            </div>
        </div>

        <!-- Services Section -->
        <div class="w-full py-5">
            <div class="w-full flex justify-center flex-wrap gap-4">
                <!-- Service Card 1 -->
                <div class="w-full sm:w-[350px] h-[280px] border-2 border-[#DAEAF4] rounded py-10 px-3">
                    <div class="flex justify-start items-center gap-4">
                        <div>
                            <img src="{{ asset('storage/img/front.png') }}" alt="Frontend Development">
                        </div>
                        <div>
                            <p class="text-lg font-medium">Frontend <br> Development</p>
                        </div>
                    </div>
                    <p class="ms-[10px] mt-3">We bring your website’s vision to life with pixel-perfect designs, seamless
                        user experiences, and clean, efficient code that ensures your site looks and performs flawlessly.

                    </p>
                </div>

                <!-- Service Card 2 -->
                <div class="w-full sm:w-[350px] h-[280px]  border-2 border-[#DAEAF4] rounded py-10 px-3">
                    <div class="flex justify-start items-center gap-4">
                        <div>
                            <img src="{{ asset('storage/img/back.png') }}" alt="Backend Development">
                        </div>
                        <div>
                            <p class="text-lg font-medium">Backend <br> Development</p>
                        </div>
                    </div>
                    <p class="ms-[10px] mt-3">We build the robust systems that power your website, ensuring smooth
                        performance, secure data handling, and scalability to support future growth.</p>
                </div>

                <!-- Service Card 3 -->
                <div class="w-full sm:w-[350px] h-[280px]  border-2 border-[#DAEAF4] rounded py-10 px-3">
                    <div class="flex justify-start items-center gap-4">
                        <div>
                            <img src="{{ asset('storage/img/full-stack.png') }}" alt="Full Stack Development">
                        </div>
                        <div>
                            <p class="text-lg font-medium">Full Stack <br> Development</p>
                        </div>
                    </div>
                    <p class="ms-[10px] mt-3">We master both frontend and backend, delivering seamless, fully integrated
                        websites with beautiful designs and powerful, scalable infrastructure.
                    </p>
                </div>

                <!-- Service Card 4 -->
                <div class="w-full sm:w-[350px] h-[280px]  border-2 border-[#DAEAF4] rounded py-10 px-3">
                    <div class="flex justify-start items-center gap-4">
                        <div>
                            <img src="{{ asset('storage/img/web-design.png') }}" alt="Web Design">
                        </div>
                        <div>
                            <p class="text-lg font-medium">Web <br> Design</p>
                        </div>
                    </div>
                    <p class="ms-[10px] mt-3">We create websites that not only look stunning but also drive results. By
                        blending user-focused design with beautiful visuals, we craft experiences that engage and encourage
                        action..</p>
                </div>

                <!-- Service Card 5 -->
                <div class="w-full sm:w-[350px] h-[280px]  border-2 border-[#DAEAF4] rounded py-10 px-3">
                    <div class="flex justify-start items-center gap-4">
                        <div>
                            <img src="{{ asset('storage/img/cms.png') }}" alt="Content Management Systems">
                        </div>
                        <div>
                            <p class="text-lg font-medium">Content Management <br> Systems (CMS)</p>
                        </div>
                    </div>
                    <p class="ms-[10px] mt-3">We set up intuitive CMS platforms that allow you to easily manage and update
                        your website content, keeping it fresh and engaging for your audience.</p>
                </div>

                <!-- Service Card 6 -->
                <div class="w-full sm:w-[350px] h-[280px]  border-2 border-[#DAEAF4] rounded py-10 px-3">
                    <div class="flex justify-start items-center gap-4">
                        <div>
                            <img src="{{ asset('storage/img/api.png') }}" alt="API Development">
                        </div>
                        <div>
                            <p class="text-lg font-medium">API <br> Development</p>
                        </div>
                    </div>
                    <p class="ms-[10px] mt-3">We build powerful APIs that enable seamless data exchange, connecting your
                        website with other applications to unlock new capabilities and enhance functionality.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- services cards section end --}}

    {{-- Time to Level Up Your Online Presence. section start --}}
    <div class="w-full h-[400px]  mt-6 bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('storage/img/baner6.jpg') }})">
        <div class="w-full h-full flex flex-col justify-center items-center text-center">
            <p class="text-3xl md:text-4xl font-bold text-white">Time to Level Up Your Online Presence with Trivisys!</p>
            <p class="text-3xl md:text-4xl font-bold text-[#FF3C0F]">Let's Build Something Amazing Together.</p>
            <p class="text-lg md:text-xl mt-3 text-white">Contact Our Representatives Today and Get Started Right Away.</p>
            <button class="px-6 py-2 bg-white text-md rounded-[20px] font-medium mt-3 flex items-center justify-center">
                <a href="{{ route('contact') }}">Contact Us</a> <span class="text-red-600 ml-2"><i
                        class="fa-solid fa-arrow-right"></i></span>
            </button>
        </div>
    </div>
    {{-- Time to Level Up Your Online Presence. section end --}}


    <div class="w-full md:h-screen h-auto bg-[#f3f3f3] mt-6 md:px-0 px-3 md:py-0 py-3">
        <div class="w-full h-[150px] flex flex-col justify-center items-center text-center">
            <p class="text-3xl md:text-4xl font-bold uppercase">Delivering Excellence at Every Step</p>
            <p class="text-lg md:text-xl mt-2">Explore Our Meticulous Approach to Success.</p>
        </div>

        <div class="w-full h-full py-6">
            <div class="w-full flex flex-wrap justify-center gap-6">
                <!-- Card 1 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Ideation">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">01</p>
                        <p class="text-xl font-medium mt-2">Ideation</p>
                        <p class="mt-2 text-sm md:text-base">We kick off the project by discussing concepts and planning a
                            pragmatic approach for the development phase.</p>
                    </div>
                    <i
                        class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>

                <!-- Card 2 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Design">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">02</p>
                        <p class="text-xl font-medium mt-2">Design</p>
                        <p class="mt-2 text-sm md:text-base">We craft intuitive, attractive interfaces tailored to your
                            business needs, capturing the essence of your brand.</p>
                    </div>
                    <i
                        class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>

                <!-- Card 3 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Development">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">03</p>
                        <p class="text-xl font-medium mt-2">Development</p>
                        <p class="mt-2 text-sm md:text-base">We implement high-performance front-end and scalable back-end
                            functionalities, integrating all aspects to deliver a unique customer experience.</p>
                    </div>
                    <i
                        class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>

                <!-- Card 4 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Testing">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">04</p>
                        <p class="text-xl font-medium mt-2">Testing</p>
                        <p class="mt-2 text-sm md:text-base">We conduct thorough component-based and integrated testing,
                            employing various approaches to ensure every element is perfectly synchronized.</p>
                    </div>
                    <i
                        class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>

                <!-- Card 5 -->
                <div
                    class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Launch">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">05</p>
                        <p class="text-xl font-medium mt-2">Launch & Scale</p>
                        <p class="mt-2 text-sm md:text-base">We deploy full-scale software while continuously maintaining
                            and updating it based on user insights and demand, ensuring improved performance and evolution
                            with changing trends.</p>
                    </div>
                    <i
                        class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
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
