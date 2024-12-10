@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    <style>
        #project-contant {
            /* display: none; */
            visibility: hidden;
            transition: ease 1s;
            z-index: -1;
        }

        #project-container:hover #project-contant {
            /* display: block; */
            z-index: 1;
            visibility: visible;
            height: 100%;
            transition: ease 1s;
        }
    </style>

    {{-- Hero Section start --}}
    <div class="w-full h-[400px] bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('storage/img/baner7.jpg') }});">
        <div class="w-full  h-full flex flex-col justify-center place-items-center">
            <p class="md:text-5xl text-2xl font-bold text-[#2A2D31]">Our Collection of Projects
            </p>
            <p class="mt-6 text-center">With years of experience, Retrocube prides in developing
                a plethora of apps across industries.
            </p>
        </div>
    </div>
    {{-- Hero Section end --}}


    {{-- our project section start --}}
    <div class="w-full h-auto  mt-6 pb-3 md:py-0 py-4">
        <div class="w-full md:h-[200px] h-auto">
            <div class="w-[80%] h-full ] mx-auto flex flex-col justify-center gap-2">
                <p class="text-2xl">CASE STUDIES</p>
                <p class="text-4xl font-bold text-[#2A2D31] uppercase ">Each case study is unique. <br>
                    just like our clients!</p>
                <p>We Showcase how our skilled hands and creative minds turn a concept into a fully-functional product.
                    Here, you will discover satisfied clients with amazing stories!

                </p>
            </div>
        </div>

        <div class="w-full h-full  md:px-0 px-3 py-3  md:mt-0 mt-3">
            <div class="w-full h-full flex flex-wrap justify-center gap-3">

                @foreach ($portfolio as $data)
                    <div class="w-[350px] h-[400px] bg-[white] rounded-xl relative cursor-pointer bg-cover bg-center bg-no-repeat"
                        id="project-container" style="background-image: url({{ asset('storage/' . $data->img) }})">
                        <div class="w-full h-0 md:block lg:block hidden absolute top-0 left-0 bg-[#E97524]  rounded-xl text-white "
                            id="project-contant">
                            <div class="w-full h-full flex flex-col justify-end pb-9 px-4">
                                <h1 class="text-2xl font-bold">{{ $data->title }}</h1>
                                <p> {{ $data->des }} </p>
                            </div>
                        </div>
                        <div
                            class="w-[50%] h-[auto] md:-z-1 z-10 md:hidden lg:hidden block absolute -bottom-10 left-20 bg-[#E97524] rounded-xl px-2 py-3 text-white">
                            <p class="text-xl font-bold"> {{ $data->title }} </p>
                            <p> {{ $data->des }} </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>
    {{-- our project section end --}}

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
                    <img class="absolute top-8 md:left-5 left-9 w-[80%] md:w-[85%] md:h-[26rem] h-[36rem] rounded-2xl mobile-img"
                        src="{{ asset('storage/img/m3.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- Expand your horizons end --}}


    {{-- contact form section start --}}
    <div class="w-full h-auto md:mt-0 mt-6">
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
