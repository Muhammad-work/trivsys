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
    {{-- Hero section start --}}
    
    <section class="w-full h-auto md:h-[500px] bg-cover bg-center bg-no-repeat py-6"
        style="background-image: url({{ asset('storage/img/digital.png') }});">
        <div class="flex flex-col md:flex-row justify-around items-start md:items-start">
            <!-- Content Section -->
            <div class="w-full h-full flex flex-col justify-start items-start gap-3 px-5 md:px-[5%] text-left">
                <h1 class="text-3xl md:text-4xl font-medium text-[#fff]">Empower Your Business With Digital Marketing</h1>
                <h1 class="text-3xl md:text-4xl font-bold text-[#EB7422] animate__animated animate__bounce">
                    Don't Just Build a <br> Brand, Build an Impact.
                </h1>
                <div class="w-full md:w-[100%] mt-3">
                    <p class="text-white text-sm md:text-lg">
                        At
                        <span class="font-medium text-[#EB7422]">Trivisys,</span> we are experts in driving
                        digital success with cutting-edge marketing strategies that deliver real results. We specialize in
                        crafting tailored digital marketing campaigns that elevate your online presence, engage your target
                        audience, and increase conversions across all platforms. Our approach combines creativity with
                        data-driven insights to ensure your brand stands out in the digital world.
                    </p>
                </div>
                <button class="px-6 py-2 bg-white text-md rounded-[20px] font-medium mt-3 flex items-center justify-start">
                    <a href="{{ route('contact') }}" class="flex items-center">
                        <span>Contact Us</span>
                        <span class="ml-2 text-[red]"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </button>
            </div>

            <!-- Image Section -->
            <div class="w-full h-full mt-5 md:mt-0 text-center md:text-left">
                <img class="w-[80%] md:w-[70%]" src="{{ asset('storage/img/digital-logo-bg.png') }}" alt="Digital Logo">
            </div>
        </div>
    </section>

    {{-- Hero section end --}}


    {{-- Offering Digital Experiences section start --}}
    <div class="w-full md:h-[200px] h-auto mt-6">
        <div class="md:w-[70%] w-full px-6 md:mx-0 mx-auto">
            <p class="text-3xl text-center md:text-left text-[#EB7422]">Offering Digital Experiences That Boost Your Growth
            </p>
            <p class="text-xl mt-3 text-center md:text-left">Bridging the Gap to Your Target Audience</p>
            <p class="mt-3 text-center md:text-left">At Trivisys, we collaborate closely with you to offer customized
                digital marketing services tailored to your unique strategy and needs. As a trusted partner for businesses
                aiming to grow and achieve long-term success, we focus on delivering results-driven marketing solutions that
                engage your audience and elevate your brand.</p>
        </div>
    </div>

    {{-- Offering Digital Experiences section end --}}




    {{-- baner section start --}}
    <div class="w-full h-auto overflow-hidden bg-blue-500">
        <div class="w-full h-full overflow-hidden">
            <img class="w-[100%] " src="{{ asset('storage/img/digital-bg.png') }}" alt="">
        </div>
    </div>
    {{-- baner section end --}}


    {{-- Our Services section start --}}
    <div class="w-full h-auto mt-6">
        <div class="w-full h-full px-6 py-10 flex flex-col lg:flex-row justify-between">
            <!-- Left Column (Text Section) -->
            <div class="w-full lg:w-[49%] h-full mb-8 lg:mb-0  md:sticky top-0 left-0">
                <p class="text-2xl">What Do We Do?</p>
                <p class="text-4xl font-bold text-[#E97427]">Our Digital Marketing Expertise</p>
                <p class="mt-3">Overcome your business challenges and transform your brand with our expert team offering
                    customized strategies based on your goals and insights.</p>
            </div>

            <!-- Right Column (Services List) -->
            <div class="w-full lg:w-[50%]">
                <div class="w-full bg-white">
                    <ul class="flex flex-col gap-[3rem] lg:gap-[5rem]">
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Search Engine Optimization (SEO)</p>
                            <p>Our proven SEO strategies increase your visibility and drive organic traffic to your website.
                                We optimize your content and improve your site’s performance to help you rank higher on
                                search engine results pages (SERPs).</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Social Media Marketing (SMM)</p>
                            <p>Social media marketing is key to building strong connections and engaging with your audience.
                                Our social media experts design strategic campaigns to boost customer interaction and brand
                                loyalty.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Search Engine Marketing (SEM)</p>
                            <p>Amplify your online presence with targeted SEM campaigns. We leverage a range of advertising
                                tactics to drive traffic and engage with your ideal audience effectively.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Email Marketing & Automation</p>
                            <p>Create meaningful conversions with tailored email campaigns and automation. We craft
                                personalized experiences to capture visitor interest and encourage interaction with your
                                services.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Content Marketing</p>
                            <p>Share your brand story with the world, helping your audience understand and connect with your
                                values. We create compelling content that resonates with your audience and strengthens your
                                brand's message.

                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Our Services section end --}}




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
