@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    {{-- Hero section start --}}
    <section class="w-full h-auto md:h-[600px] bg-cover bg-center bg-no-repeat py-6"
        style="background-image: url({{ asset('storage/img/hero.jpg') }});">
        <div class="w-full h-full flex flex-col justify-center items-start gap-3 px-5 md:px-[5%]">
            <h1 class="text-4xl md:text-xl font-medium text-[#fff]">Empower Your Business With</h1>
            <h1 class="text-4xl md:text-4xl font-bold text-[#EB7422] animate__animated animate__bounce">Don't Just Build a
                <br> Website, Build an <br>
                Experience.
            </h1>
            <div class="w-full md:w-[40%] mt-0">
                <p class="text-white text-sm md:text-lg">
                    <span class="font-medium text-[#EB7422]">RetroCube</span> is the global guru in the world of app
                    development services, leading the way through eccentricity and technological creativity. We excel in
                    creating highly responsive and adaptive apps, providing invigorating user experience across all
                    platforms.
                </p>
            </div>
            <button class="px-6 py-2 bg-[white] text-md rounded-[20px] font-medium mt-3"><a href="{{ route('contact') }}">Contact Us</a> <span
                    class="text-[red]"><i class="fa-solid fa-arrow-right"></i> </span></button>
        </div>
    </section>
    {{-- Hero section end --}}

    {{-- Innovative, section start --}}
    <div class="w-full md:h-[400px] h-auto  mt-10 md:py-0 py-3 overflow-hidden">
        <div class="w-[85%] h-full flex flex-col md:flex-row items-center justify-between mx-auto">
            <div class="w-full md:w-[50%] text-center md:text-left">
                <p class="uppercase text-4xl font-bold animate__animated animate__bounce">Innovative, Intuitive and <br>
                    Fully-Scalable Web <br> Development</p>
                <p class="mt-2 text-lg">We stay ahead of the curve with cutting-edge technologies and innovative design
                    approaches keeping you in
                    the driving position of your industry at all times. From concept to creation, we understand your unique
                    needs and goals, translating your vision into a website that truly reflects your brand.
                </p>
                <p class="mt-3 text-lg">Ready to Experience the Difference? <span class="text-[#EB7422] font-bold">Let's
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
                <p class="text-4xl font-bold text-[#2A2D31] uppercase">Your Destination For Holistic Web Solutions</p>
                <p class="text-xl">Our complete suite of web development services</p>
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
                    <p class="ms-[10px] mt-3">We bring your website's vision to life. Pixel-perfect interfaces, seamless
                        user experiences, and code
                        that sings - that's the frontend magic we weave.</p>
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
                    <p class="ms-[10px] mt-3">The unsung heroes of the web. We build the powerful engines that drive your
                        website, ensuring smooth functionality, secure data storage, and scalability for future growth.</p>
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
                    <p class="ms-[10px] mt-3">We speak both languages - frontend and backend. We're your one-stop shop,
                        crafting beautiful interfaces and building the robust infrastructure to power them.</p>
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
                    <p class="ms-[10px] mt-3">More than just aesthetics, we design websites that convert. We blend user
                        psychology with stunning visuals to create experiences that captivate and compel action.</p>
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
                    <p class="ms-[10px] mt-3">Empower yourself! We set up user-friendly CMS platforms so you can easily
                        manage your website content, keeping it fresh and engaging for your audience.</p>
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
                    <p class="ms-[10px] mt-3">The glue that connects your web world. We build APIs that allow seamless data
                        exchange between your website and other applications, unlocking new possibilities.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- services cards section end --}}

    {{-- Time to Level Up Your Online Presence. section start --}}
    <div class="w-full h-[400px]  mt-6 bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('storage/img/baner6.jpg') }})">
        <div class="w-full h-full flex flex-col justify-center items-center text-center">
            <p class="text-3xl md:text-4xl font-bold text-white">Time to Level Up Your Online Presence.</p>
            <p class="text-3xl md:text-4xl font-bold text-[#FF3C0F]">Let's Build Something Amazing!</p>
            <p class="text-lg md:text-xl mt-3 text-white">Get in touch with our representatives and start right away.</p>
            <button class="px-6 py-2 bg-white text-md rounded-[20px] font-medium mt-3 flex items-center justify-center">
                <a href="{{ route('contact') }}">Contact Us</a> <span class="text-red-600 ml-2"><i class="fa-solid fa-arrow-right"></i></span>
            </button>
        </div>
    </div>
    {{-- Time to Level Up Your Online Presence. section end --}}


    <div class="w-full md:h-screen h-auto bg-[#f3f3f3] mt-6 md:px-0 px-3 md:py-0 py-3">
        <div class="w-full h-[150px] flex flex-col justify-center items-center text-center">
            <p class="text-3xl md:text-4xl font-bold uppercase">Delivering Excellence at Every Step</p>
            <p class="text-lg md:text-xl mt-2">Here’s a look at our meticulous approach</p>
        </div>
    
        <div class="w-full h-full py-6">
            <div class="w-full flex flex-wrap justify-center gap-6">
                <!-- Card 1 -->
                <div class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Ideation">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">01</p>
                        <p class="text-xl font-medium mt-2">Ideation</p>
                        <p class="mt-2 text-sm md:text-base">Kick-off the project discussing concept and planning a pragmatic approach for the development phase.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>
    
                <!-- Card 2 -->
                <div class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Design">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">02</p>
                        <p class="text-xl font-medium mt-2">Design</p>
                        <p class="mt-2 text-sm md:text-base">Crafting intuitive, attractive interfaces suited to business needs that encapsulate the essence of the brand.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>
    
                <!-- Card 3 -->
                <div class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Development">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">03</p>
                        <p class="text-xl font-medium mt-2">Development</p>
                        <p class="mt-2 text-sm md:text-base">Implementing performance front-end and scalable back-end functionalities inculcating all the aspects to provide unique customer experience.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>
    
                <!-- Card 4 -->
                <div class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Testing">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">04</p>
                        <p class="text-xl font-medium mt-2">Testing</p>
                        <p class="mt-2 text-sm md:text-base">Conducting thorough component-based and integrated testing using various testing approaches to ensure every element is in synchronization.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>
    
                <!-- Card 5 -->
                <div class="w-full sm:w-[210px] md:w-[210px] lg:w-[210px] h-[450px] bg-white relative px-4 rounded-xl border-2 border-[#ccc] mb-6">
                    <img class="absolute right-0 top-0" src="{{ asset('storage/img/dp.png') }}" alt="Launch">
                    <div class="mt-[5rem]">
                        <p class="text-4xl font-bold text-[#FF3C0F]">05</p>
                        <p class="text-xl font-medium mt-2">Launch & Scale</p>
                        <p class="mt-2 text-sm md:text-base">Deploying the full-scale software, along with maintaining and updating based on user insights and demand to improve performance and evolve with changing trends.</p>
                    </div>
                    <i class="fa-solid fa-arrow-right absolute right-0 bottom-0 bg-[#FF3C0F] text-white px-5 py-3 rounded-s-xl text-2xl cursor-pointer"></i>
                </div>
            </div>
        </div>
    </div>
    
@endsection
