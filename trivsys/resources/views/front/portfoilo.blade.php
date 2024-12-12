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
            <p class="md:text-6xl text-2xl font-bold text-[#EC7329]">Our Portfolio</p>
            <p class="mt-6 text-center md:text-2xl text-1xl md:w-[55%]">With years of experience, Trivisys takes pride in
                delivering a diverse range of solutions across industries, showcasing our expertise in creating impactful
                and innovative applications.</p>
        </div>
    </div>
    {{-- Hero Section end --}}


    {{-- our project section start --}}
    <div class="w-full h-auto  mt-6 pb-3 md:py-0 py-4">
        <div class="w-full md:h-[200px] h-auto">
            <div class="w-[80%] h-full ] mx-auto flex flex-col justify-center gap-2">
                <p class="text-2xl">Portfolio</p>
                <p class="text-4xl font-bold text-[#2A2D31] uppercase ">Every project is unique, just like our clients!</p>
                <p>We showcase how our expertise and creativity transform concepts into fully functional solutions. Explore
                    our portfolio to discover the success stories of our satisfied clients and the exceptional work we’ve
                    delivered across various industries.</p>
            </div>
        </div>

        <div class="w-full h-full  md:px-0 px-3 py-3  md:mt-0 mt-3">
            <div class="w-full h-full flex flex-wrap justify-center gap-3">

                {{-- @foreach ($portfolio as $data)
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
                @endforeach --}}

                <div class="w-[40%] h-auto p-3 rounded shadow-lg shadow-dark-500/90">
                    <img class="w-full" src="{{ asset('storage/img/uma.png') }}" alt="">
                    <div>
                        <p class="mt-2 font-medium">Uma Imports Inc</p>
                        <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iusto
                            voluptate sequi
                            temporibus autem animi officia sunt expedita quidem qui dolore ipsa labore, harum blanditiis quo
                            neque non consequatur saepe!</p>
                    </div>
                </div>
                <div class="w-[40%] h-auto p-3 rounded shadow-lg shadow-dark-500/90">
                    <img class="w-full" src="{{ asset('storage/img/desi.png') }}" alt="">
                    <div>
                        <p class="mt-2 font-medium">Desi Shuttle Service</p>
                        <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iusto
                            voluptate sequi
                            temporibus autem animi officia sunt expedita quidem qui dolore ipsa labore, harum blanditiis quo
                            neque non consequatur saepe!</p>
                    </div>
                </div>
                <div class="w-[40%] h-auto p-3 rounded shadow-lg shadow-dark-500/90">
                    <img class="w-full" src="{{ asset('storage/img/pbs.png') }}" alt="">
                    <div>
                        <p class="mt-2 font-medium">CRM Software</p>
                        <p class="mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis iusto
                            voluptate sequi
                            temporibus autem animi officia sunt expedita quidem qui dolore ipsa labore, harum blanditiis quo
                            neque non consequatur saepe!</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
    {{-- our project section end --}}




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
