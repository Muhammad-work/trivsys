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
            <p class="md:text-6xl text-4xl font-bold text-[#EC7329]">About Trivsys</p>
            <p class="mt-6 text-center md:text-2xl text-2xl md:w-[50%]">At Trivsys, we specialize in creating innovative web,
                app, and
                software solutions that bring your ideas to life. Our team is dedicated to delivering seamless, high-quality
                digital experiences for your business.</p>
        </div>
    </div>
    {{-- Hero Section end --}}

    {{-- Our Philosophy section start --}}
    <div class="w-full h-auto mt-6">
        <div class="md:w-[90%] w-[95%]  h-full flex flex-col justify-center px-5">
            <p class="text-xl sm:text-2xl md:text-3xl font-semibold">Our Philosophy</p>
            <p class="text-3xl sm:text-4xl md:text-4xl font-bold text-[#EC7329] md:mt-0 mt-3">Essence That Drives Our Vision
            </p>
            <p class="mt-3 text-sm sm:text-base md:text-lg">At Trivsys, innovation is at the heart of everything we do. We
                blend cutting-edge technology with creative solutions to fuel your business’s growth, ensuring every project
                we deliver is tailored to your unique needs. Our vision is to push boundaries and create intelligent,
                adaptable, and ethical solutions that drive success in a rapidly evolving world.</p>
        </div>
    </div>
    {{-- Our Philosophy section end --}}

    {{-- Our Services section start --}}
    <div class="w-full h-auto mt-6">
        <div class="w-full h-full px-6 py-10 flex flex-col lg:flex-row justify-between">
            <!-- Left Column (Text Section) -->
            <div class="w-full lg:w-[50%] h-full mb-8 lg:mb-0  md:sticky top-0 left-0">
                <p class="text-2xl">Our Services</p>
                <p class="text-4xl font-bold text-[#EC7329]">Empowering our partners to embrace the forefront of innovation</p>
                <p class="mt-3">Together, with our modern solutions, let’s reimagine the processes propelling business
                    towards unparalleled success.</p>
            </div>

            <!-- Right Column (Services List) -->
            <div class="w-full lg:w-[50%]">
                <div class="w-full bg-white">
                    <ul class="flex flex-col gap-[3rem] lg:gap-[5rem]">
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EC7329]">Web & App Development</p>
                            <p>We design and develop high-performing, user-friendly websites and mobile apps that fuel your
                                business growth and digital transformation.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EC7329]">ERP & CRM Software</p>
                            <p>We offer custom ERP and CRM solutions to streamline your operations, improve efficiency, and
                                enhance customer relationships.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EC7329]">App Development</p>
                            <p>We help enterprises around the globe in developing functional and user-friendly apps,
                                providing guidance from idea to concept to ongoing support.</p>
                        </li>
                        <li class="about">
                            <p class="py-2 text-xl font-medium text-[#EC7329]">Digital Marketing</p>
                            <p>Our digital marketing strategies help businesses build their online presence, engage their
                                audience, and drive meaningful results.</p>
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
