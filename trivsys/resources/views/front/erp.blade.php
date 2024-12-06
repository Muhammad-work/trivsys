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
            <p class="text-3xl text-center md:text-left">Offering Digital Experiences That Boost Your Growth</p>
            <p class="text-xl mt-3 text-center md:text-left">Bridging a Link with Your Target Audience</p>
            <p class="mt-3 text-center md:text-left">At Intersys, we work closely with you and offer customised marketing services based on your strategy and requirements. We’ve been a trusted partner for business owners who want to grow and achieve their long-term business goals.</p>
        </div>
    </div>


    {{-- Our Services section start --}}
    <div class="w-full h-auto mt-6">
        <div class="w-full h-full px-6 py-10 flex flex-col lg:flex-row justify-between">
            <!-- Left Column (Text Section) -->
            <div class="w-full lg:w-[49%] h-full mb-8 lg:mb-0  md:sticky top-0 left-0">
                <p class="text-2xl">What do we do?</p>
                <p class="text-4xl font-bold">Our ERP Software Expertise</p>
                <p class="mt-3">Overcome your business challenges and transform your startup with our team of experts who
                    offer strategies based on your goals and business insights.</p>
            </div>

            <!-- Right Column (Services List) -->
            <div class="w-full lg:w-[50%]">
                <div class="w-full bg-white">
                    <ul class="flex flex-col gap-[3rem] lg:gap-[5rem]">
                        <li class="about">
                            <p class="py-2 text-xl font-medium">Search Engine Optimization (SEO)</p>
                            <p>Our proven SEO strategies give you visibility and drive organic traffic to your website. We
                                optimise your content and improve your website's performance to rank higher on search engine
                                results pages (SERPs).</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium">Social Media Marketing (SMM)</p>
                            <p>Social media marketing is a powerful tool for making strong connections and interacting with
                                your visitors. Our social media experts create strategic campaigns to increase customer
                                engagement.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium">Search Engine Marketing (SEM)</p>
                            <p>Boost your online traffic with targeted SEM campaigns. We use different advertisement ticks
                                and ideas that target the related audience.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium">Email Marketing & Automation</p>
                            <p>Create conversions with keen email campaigns and automation. We create personalised
                                experiences to develop the visitor's interest and make them interact with your services.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium">Content Marketing</p>
                            <p>Share your brand story with the people so that they understand the message and value your
                                brand has. We create brand stories that the audience can relate to.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Our Services section end --}}

    <div class="w-full h-[200px] mt-6 flex flex-col justify-center items-center px-4">
        <p class="text-3xl md:text-4xl font-medium text-center">Start Your Success Journey With Intersys</p>
        <p class="mt-3 text-lg md:text-xl text-center">Let's start your journey with us to transform your digital presence and seize new opportunities.
        </p>
        <button class="px-6 py-2 bg-[#EC7329] text-white text-md rounded-[20px] font-medium mt-3">
            <a href="{{ route('contact') }}" class="flex items-center justify-center">
                Contact Us <span class="text-white ml-2"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </button>
    </div>

@endsection
