@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    {{-- Hero Section start --}}
    <div class="w-full h-[400px] bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('storage/img/baner7.jpg') }});">
        <div class="w-full h-full flex flex-col justify-center place-items-center">
            <p class="md:text-6xl text-5xl font-bold text-[#EC7329]">Get in Touch</p>
            <p class="mt-6 text-center md:text-2xl text-1xl w-[55%]">Ready to bring your vision to life? Contact us today, and let’s turn your ideas into a powerful and scalable mobile app.</p>
        </div>
    </div>
    {{-- Hero Section end --}}


    {{-- baner section start --}}

    <div class="w-full h-[500px]  mt-4 md:p-3 px-0">
        <div class="md:w-[95%] w-full h-full  mx-auto rounded-3xl bg-cover bg-center bg-no-repeat relative"
            style="background-image: url({{ asset('storage/img/baner8.jpg') }})">
            <div
                class="md:w-[350px] md:h-[350px] w-[250px] h-auto bg-[#E97327] absolute -top-12 md:left-12 left-2 rounded-xl px-4 text-white">
                <p class="text-3xl font-bold mt-12">Talk to Us</p>
                <p class="text-2xl font-medium mt-2">We’re Excited to Hear from You!</p>
                <p class="mt-3">Our team is eager to explore new and creative ideas, ensuring excellence in mobile app development.</p>
                <p class="mt-4"><i class="fa-solid fa-phone"></i> +1-844-706-0053</p>
                <p class="mt-3"><i class="fa-solid fa-phone"></i> +1-888-442-4644</p>
            </div>
        </div>
    </div>

    {{-- baner section end --}}


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
            <div class="flex flex-col gap-5 mt-6">
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
