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
            <img class="w-[100%] " src="{{ asset('storage/img/crm.png') }}" alt="">
        </div>
    </div>
    {{-- baner section end --}}


    <div class="w-full md:h-[200px] h-auto mt-6">
        <div class="md:w-[70%] w-full px-6 md:mx-0 mx-auto">
            <p class="text-3xl text-center md:text-left font-bold text-[#E97427]">Offering CRM Software Solutions That
                Accelerate Your Growth</p>
            <p class="text-xl mt-3 text-center md:text-left">Bridging the Connection with Your Customers</p>
            <p class="mt-3 text-center md:text-left">At Trivisys, we collaborate closely with you to provide customized CRM
                software solutions tailored to your business strategy and customer relationship needs. As a trusted partner
                for businesses aiming to enhance customer engagement and drive long-term success, we help you streamline
                interactions and optimize customer experiences through intelligent CRM systems.</p>
        </div>
    </div>

    {{-- Expand your horizons start --}}
    <div class="w-full h-auto md:h-[550px] flex flex-col justify-center">
        <div class="w-[90%] md:w-[85%] h-auto md:h-[420px] mx-auto rounded-3xl bg-cover bg-center bg-no-repeat flex flex-col md:flex-row justify-between place-items-center relative px-10 overflow-hidden mt-4"
            style="background-image: url({{ asset('storage/img/bg.gif') }})">
            <!-- Left Image -->
            <div class="w-full md:w-auto">
                <img class="w-full md:w-[100%] h-[auto] md:h-[25rem] mt-6 md:mt-0"
                    src="{{ asset('storage/img/crm-dashbord.png') }}" alt="">
            </div>

            <!-- Text and Button -->
            <div class=" md:text-left mt-6 md:mt-0">
                <p class="text-xl md:text-3xl font-bold text-center  text-white">Expand Your Customer Relationships and
                    Achieve <br> Success with Trivisys CRM Solutions
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
                        src="{{ asset('storage/img/crm2.png') }}" alt="">
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
                <p class="text-4xl font-bold text-[#E97427]">Our CRM Software Expertise</p>
                <p class="mt-3">Overcome your business challenges and optimize your customer relationships with our CRM
                    software solutions. Our expert team offers strategies and systems tailored to your business goals,
                    enhancing customer engagement, retention, and growth.</p>
            </div>

            <!-- Right Column (Services List) -->
            <div class="w-full lg:w-[50%]">
                <div class="w-full bg-white">
                    <ul class="flex flex-col gap-[3rem] lg:gap-[5rem]">
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">CRM Implementation</p>
                            <p>We help you implement a customized CRM system that centralizes your customer data and
                                automates processes, improving customer service and boosting operational efficiency.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Customization & Integration</p>
                            <p>Our CRM solutions are fully customizable to meet your specific business needs. We integrate
                                the CRM system seamlessly with your existing software, providing a unified solution that
                                improves your sales and marketing efforts.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Customer Data Management</p>
                            <p>With our CRM software, you can manage customer interactions effectively and gain valuable
                                insights into customer behaviors. We ensure your data is organized, accessible, and
                                actionable, helping you make informed decisions.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Sales & Marketing Automation</p>
                            <p>Automate sales and marketing tasks to increase efficiency and improve customer engagement.
                                Our CRM system streamlines lead management, email campaigns, and follow-ups, ensuring no
                                opportunity is missed.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Analytics & Reporting</p>
                            <p>Our CRM software provides in-depth analytics and reporting to track performance, customer
                                interactions, and sales. We help you make data-driven decisions to optimize your business
                                strategies.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#E97427]">Ongoing Support & Maintenance</p>
                            <p>We offer continuous support and maintenance for your CRM system, ensuring smooth operation
                                and keeping it aligned with your evolving business needs.</p>
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
