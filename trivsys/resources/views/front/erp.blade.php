@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    <style>
        .about {
            position: relative;
        }

        .about::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -20px;
            width: 100%;
            height: 2px;
            border-radius: 5px;
            background: #ccc;
        }
    </style>

    {{-- baner section start --}}
    <div class="w-full h-auto overflow-hidden bg-blue-500">
        <div class="w-full h-full overflow-hidden">
            <img class="w-[100%] " src="{{ asset('storage/img/baner9.jpg') }}" alt="">
        </div>
    </div>
    {{-- baner section end --}}


    <div class="w-full md:h-[200px] h-auto mt-6">
        <div class="md:w-[70%] w-full px-6 md:mx-0 mx-auto">
            <p class="text-3xl text-center md:text-left font-bold text-[#EA7629]">Offering Digital Experiences That Boost Your Growth</p>
            <p class="text-xl mt-3 text-center md:text-left">Bridging a Link with Your Target Audience</p>
            <p class="mt-3 text-center md:text-left">At Intersys, we work closely with you and offer customised marketing
                services based on your strategy and requirements. We’ve been a trusted partner for business owners who want
                to grow and achieve their long-term business goals.</p>
        </div>
    </div>


    {{-- Expand your horizons start --}}
    <div class="w-full h-auto md:h-[550px] flex flex-col justify-center">
        <div class="w-[90%] md:w-[85%] h-auto md:h-[420px] mx-auto rounded-3xl bg-cover bg-center bg-no-repeat flex flex-col md:flex-row justify-between place-items-center relative px-10 overflow-hidden mt-4"
            style="background-image: url({{ asset('storage/img/bg.gif') }})">
            <!-- Left Image -->
            <div class="w-full md:w-auto">
                <img class="w-full md:w-[100%] h-[auto] md:h-[25rem] mt-6 md:mt-0" src="{{ asset('storage/img/m1.png') }}"
                    alt="">
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


    {{-- Our Services section start --}}
    <div class="w-full h-auto mt-6">
        <div class="w-full h-full px-6 py-10 flex flex-col lg:flex-row justify-between">
            <!-- Left Column (Text Section) -->
            <div class="w-full lg:w-[49%] h-full mb-8 lg:mb-0  md:sticky top-0 left-0">
                <p class="text-2xl">What do we do?</p>
                <p class="text-4xl font-bold text-[#EA7629]">Our ERP Software Expertise</p>
                <p class="mt-3">Overcome your business challenges and transform your startup with our team of experts who
                    offer strategies based on your goals and business insights.</p>
            </div>

            <!-- Right Column (Services List) -->
            <div class="w-full lg:w-[50%]">
                <div class="w-full bg-white">
                    <ul class="flex flex-col gap-[3rem] lg:gap-[5rem]">
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Search Engine Optimization (SEO)</p>
                            <p>Our proven SEO strategies give you visibility and drive organic traffic to your website. We
                                optimise your content and improve your website's performance to rank higher on search engine
                                results pages (SERPs).</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Social Media Marketing (SMM)</p>
                            <p>Social media marketing is a powerful tool for making strong connections and interacting with
                                your visitors. Our social media experts create strategic campaigns to increase customer
                                engagement.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Search Engine Marketing (SEM)</p>
                            <p>Boost your online traffic with targeted SEM campaigns. We use different advertisement ticks
                                and ideas that target the related audience.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Email Marketing & Automation</p>
                            <p>Create conversions with keen email campaigns and automation. We create personalised
                                experiences to develop the visitor's interest and make them interact with your services.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Content Marketing</p>
                            <p>Share your brand story with the people so that they understand the message and value your
                                brand has. We create brand stories that the audience can relate to.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Our Services section end --}}


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
