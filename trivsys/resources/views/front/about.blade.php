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

    {{-- Hero Section start --}}
    <div class="w-full h-[400px] bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('storage/img/baner7.jpg') }});">
        <div class="w-full  h-full flex flex-col justify-center place-items-center">
            <p class="text-5xl font-bold text-[#2A2D31]">About</p>
            <p class="mt-6 text-center">Feel free to contact us for turning your idea into a robust mobile app.</p>
        </div>
    </div>
    {{-- Hero Section end --}}

    {{-- Our Philosophy section start --}}
    <div class="w-full h-auto mt-6">
        <div class="md:w-[90%] w-[95%]  h-full flex flex-col justify-center px-5">
            <p class="text-xl sm:text-2xl md:text-3xl font-semibold">Our Philosophy</p>
            <p class="text-3xl sm:text-4xl md:text-4xl font-bold text-[#EC7329] md:mt-0 mt-3">Essence That Drives Our Vision
            </p>
            <p class="mt-3 text-sm sm:text-base md:text-lg">At the core of Intersys lies a relentless pursuit of innovation,
                driven by cutting-edge technology in order
                to fuel the growth of your company. We are driven by the commitment to redefine the boundaries, ushering in
                a future where intelligence meets creativity. Our vision is supported by the pillars of adaptability,
                precision, and ethical considerations, ensuring that every solution we create coherently aligns with the
                ever-evolving needs of the industries.</p>
            <p class="mt-3 text-sm sm:text-base md:text-lg">With the essence of AI transforming challenges into
                opportunities, and where the convergence of human insight
                and AI pave a new era of unprecedented possibilities, we are dedicated to strengthening our partnership with
                businesses of all sizes around the globe. Let’s propel toward the future of limitless possibilities
                together!</p>
        </div>
    </div>
    {{-- Our Philosophy section end --}}

    {{-- Our Services section start --}}
    <div class="w-full h-auto mt-6">
        <div class="w-full h-full px-6 py-10 flex flex-col lg:flex-row justify-between">
            <!-- Left Column (Text Section) -->
            <div class="w-full lg:w-[50%] h-full mb-8 lg:mb-0  md:sticky top-0 left-0">
                <p class="text-2xl">Our Services</p>
                <p class="text-4xl font-bold">Empowering our partners to embrace the forefront of innovation</p>
                <p class="mt-3">Together, with our modern solutions, let’s reimagine the processes propelling business
                    towards unparalleled success.</p>
            </div>

            <!-- Right Column (Services List) -->
            <div class="w-full lg:w-[50%]">
                <div class="w-full bg-white">
                    <ul class="flex flex-col gap-[3rem] lg:gap-[5rem]">
                        <li class="about">
                            <p class="py-2 text-xl font-medium">Visual Designs</p>
                            <p>Our visual designs transcend the confined boundaries of aesthetics, weaving narratives
                                through the language of visuals while embracing functionality.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium">Web Design & Development</p>
                            <p>We help in designing and developing high-performing, digitally transformative, and
                                user-friendly websites to fuel the growth of your enterprise.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium">App Development</p>
                            <p>We help enterprises around the globe in developing functional and user-friendly apps,
                                providing guidance from idea to concept to ongoing support.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium">Software Development</p>
                            <p>We help the enterprise strategize new ideas and accelerate the value by providing custom
                                software development solutions, product engineering, and QA testing.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium">AI/ML Solutions</p>
                            <p>We assist businesses in transforming data into useful insights by integrating advanced ML
                                solutions, generative AI, analytics, and connected intelligence.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Our Services section end --}}

    {{-- Innovate section start --}}
    <div class="w-full h-[200px] mt-6 flex flex-col justify-center items-center px-4">
        <p class="text-3xl md:text-4xl font-medium text-center">Innovate, Integrate, and Succeed</p>
        <p class="mt-3 text-lg md:text-xl text-center">Are you ready to integrate the solutions to thrive in the ecosystem?
        </p>
        <button class="px-6 py-2 bg-[#EC7329] text-white text-md rounded-[20px] font-medium mt-3">
            <a href="{{ route('contact') }}" class="flex items-center justify-center">
                Contact Us <span class="text-white ml-2"><i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </button>
    </div>

    {{-- Innovate section end --}}
@endsection
