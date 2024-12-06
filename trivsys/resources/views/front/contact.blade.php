@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    {{-- Hero Section start --}}
    <div class="w-full h-[400px] bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('storage/img/baner7.jpg') }});">
        <div class="w-full h-full flex flex-col justify-center place-items-center">
            <p class="text-5xl font-bold text-[#2A2D31]">Contact us</p>
            <p class="mt-6 text-center">Feel free to contact us for turning your idea into a robust mobile app.</p>
        </div>
    </div>
    {{-- Hero Section end --}}


    {{-- baner section start --}}

    <div class="w-full h-[500px]  mt-4 md:p-3 px-0">
        <div class="md:w-[95%] w-full h-full  mx-auto rounded-3xl bg-cover bg-center bg-no-repeat relative"
            style="background-image: url({{ asset('storage/img/baner8.jpg') }})">
            <div class="md:w-[350px] md:h-[350px] w-[250px] h-auto bg-[#E97327] absolute -top-12 md:left-12 left-2 rounded-xl px-4 text-white">
                <p class="text-3xl font-bold mt-12">TALK TO US</p>
                <p class="text-2xl font-medium mt-2">We’re Eager to Know</p>
                <p class="mt-3">Our team is always curious to discuss new and creative ideas for mobile excellence.</p>
                <p class="mt-4"><i class="fa-solid fa-phone"></i> +1-844-706-0053</p>
                <p class="mt-3"><i class="fa-solid fa-phone"></i> +1-888-442-4644</p>
            </div>
        </div>
    </div>

    {{-- baner section end --}}


    {{-- contact form section start --}}
    <div class="w-full h-auto p-4">
        <div class="w-full sm:w-[90%] md:w-[50%] h-full mx-auto bg-[#F3F3F3] rounded-xl p-3 flex flex-col place-items-center">
            <div class="flex flex-col gap-3 w-full">
                <label for="" class="font-medium">Full Name</label>
                <input type="text" name="full-name" id="" placeholder="Enter Full Name"
                    class="py-2 outline-none rounded px-2">
            </div>
    
            <div class="w-full flex flex-col sm:flex-row justify-between gap-3 mx-auto mt-6">
                <div class="flex flex-col gap-3 w-full sm:w-[48%]">
                    <label for="" class="font-medium">Email Address</label>
                    <input type="text" name="email-address" id="" placeholder="Enter Email Address"
                        class="py-2 outline-none rounded px-2">
                </div>
                <div class="flex flex-col gap-3 w-full sm:w-[48%]">
                    <label for="" class="font-medium">Phone Number</label>
                    <input type="text" name="phone-number" id="" placeholder="Enter Phone Number"
                        class="py-2 outline-none rounded px-2">
                </div>
            </div>
    
            <div class="flex flex-col gap-3 w-full mt-6">
                <label for="" class="font-medium">Message</label>
                <textarea name="message" id="" cols="3" rows="3" placeholder="Enter Message" class="p-2 outline-none rounded"></textarea>
            </div>
            <button class="py-2 px-9 bg-[#E97327] text-white mt-6 text-xl rounded">SUBMIT</button>
        </div>
    </div>
    {{-- contact form section end --}}


  
@endsection
