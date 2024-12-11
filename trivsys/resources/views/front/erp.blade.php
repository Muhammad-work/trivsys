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

    <div class="w-full h-auto overflow-hidden bg-blue-500">
        <div class="w-full h-full overflow-hidden">
            <img class="w-[100%] " src="{{ asset('storage/img/erp.png') }}" alt="">
        </div>
    </div>


    <div class="w-full md:h-[200px] h-auto mt-6">
        <div class="md:w-[70%] w-full px-6 md:mx-0 mx-auto">
            <p class="text-3xl text-center md:text-left font-bold text-[#EA7629]">Offering ERP Solutions That Drive Your
                Business Growth</p>
            <p class="text-xl mt-3 text-center md:text-left">Bridging the Gap to Streamlined Operations</p>
            <p class="mt-3 text-center md:text-left">At Trivisys, we work closely with you to provide customized ERP software
                solutions tailored to your business strategy and requirements. We’ve been a trusted partner for businesses
                looking to enhance operational efficiency, improve decision-making, and achieve long-term success through
                seamless ERP integration.</p>
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
                <p class="text-xl md:text-3xl font-bold text-center  text-white">Expand Your Business Potential and Achieve
                    Excellence <br> with Trivisys ERP Solutions
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
                <p class="text-2xl">What Do We Do?</p>
                <p class="text-4xl font-bold text-[#EA7629]">Our ERP Software Expertise</p>
                <p class="mt-3">Overcome your business challenges and streamline your operations with our ERP software
                    solutions. Our expert team delivers strategies and systems based on your goals and business insights,
                    helping you achieve operational efficiency and business growth.</p>
            </div>

            <!-- Right Column (Services List) -->
            <div class="w-full lg:w-[50%]">
                <div class="w-full bg-white">
                    <ul class="flex flex-col gap-[3rem] lg:gap-[5rem]">
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">ERP Implementation</p>
                            <p>Our ERP implementation services ensure a smooth transition to a fully integrated system that
                                streamlines your business processes. We work closely with you to understand your needs and
                                provide a tailored solution that improves efficiency across all departments.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Customization & Integration</p>
                            <p>We offer ERP customization to fit your specific business requirements. Our team integrates
                                the software seamlessly with your existing tools and processes to provide a unified solution
                                that enhances productivity and decision-making.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Data Management & Analytics</p>
                            <p>Our ERP systems empower you with real-time data analytics, improving your ability to make
                                informed decisions. We ensure your data is organized, accessible, and actionable to drive
                                business insights and performance.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Cloud-Based ERP</p>
                            <p>Our cloud-based ERP solutions offer flexibility, scalability, and remote access, ensuring
                                your business is always connected. With secure cloud storage, your business data is safe and
                                easily accessible from anywhere, at any time.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EA7629]">Support & Maintenance</p>
                            <p>We provide ongoing support and maintenance services to ensure your ERP system runs smoothly.
                                From troubleshooting to system upgrades, our team ensures that your system evolves with your
                                business needs.</p>
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
