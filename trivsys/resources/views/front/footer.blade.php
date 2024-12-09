@section('fotter')
    <footer
        class="w-full h-auto bg-[#F3F3F3] flex justify-around md:flex-row flex-col md:px-3 px-9 md:gap-0 gap-3 py-9 mt-7">
        <div>
            <p class="text-xl font-medium">Services</p>
            <ul class="flex flex-col gap-3 mt-3">
                <li class="font-medium cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i> <a href="{{ route('web') }}">Web Development</a></li>
                <li class="font-medium cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i> <a href="{{ route('app') }}">App Development</a></li>
                <li class="font-medium cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i> <a href="{{ route('erp') }}">ERP Software Service</a></li>
                <li class="font-medium cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i> <a href="{{ route('crm') }}">CRM Software Service</a></li>
                <li class="font-medium cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i> <a href="{{ route('digital') }}">Digital Marketing</a></li>
            </ul>
        </div>
        <div>
            <p class="text-xl font-medium">Company</p>
            <ul class="flex flex-col gap-3 mt-3">
                <li class="font-medium cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i> <a href="{{ route('home') }}">Home</a></li>
                <li class="font-medium cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i><a href="{{ route('about') }}">About Us</a></li>
                <li class=" cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i> <a href="{{ route('portfoilo') }}">Portfolio</a></li>
                <li class="font-medium cursor-pointer hover:text-[#EB7422] ease duration-300"><i
                        class="fa-solid fa-arrow-right"></i> <a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
        <div>
            <p class="text-xl font-medium">Contact Us</p>
            <ul class="flex flex-col gap-3 mt-3">
                <li>
                    <p class="font-medium text-[#e29663]">Email Address</p>
                    <p>info.trivsys@gmail.com</p>
                </li>
                <li>
                    <p class="font-medium text-[#e29663]">Conatct Number</p>
                    <p>+1-888-442-4644</p>
                </li>
                <li>
                    <p class="font-medium text-[#e29663]">United States</p>
                    <p>2030E,15thSt, UnitA Los Angeles, CA 90021</p>
                </li>
            </ul>
        </div>

    </footer>
    <div class="w-full h-[80px] bg-[#F3F3F3] ">
        <div class="w-[90%] h-full flex justify-between place-items-center  mx-auto">
            <div>
                <p>Copyright 2024 @ Uma Imports Inc.</p>
            </div>
            <div>
                <div class="flex gap-3 ">
                    <i class="fa-brands fa-x-twitter text-xl md:text-2xl cursor-pointer"></i>
                    <i class="fa-brands fa-facebook text-xl  md:text-2xl cursor-pointer text-[blue]"></i>
                    <i class="fa-brands fa-instagram text-xl  md:text-2xl cursor-pointer text-[#CE04DD]"></i>
                    <i class="fa-brands fa-linkedin text-xl  md:text-2xl cursor-pointer text-[#0C61BF]"></i>
                    <i class="fa-brands fa-tiktok text-xl  md:text-2xl cursor-pointer text-[#000000]"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
