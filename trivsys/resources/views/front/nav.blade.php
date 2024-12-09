@section('nav')
    <nav class="w-full h-[80px] bg-[white] flex justify-between md:px-3 px-3 place-items-center">
        <!-- Logo Section -->
        <div class="md:w-[15%] w-[40%]">
           <a href="{{ route('home') }}"><img class="w-[100%]" src="{{ asset('storage/img/Untitled-1-removebg-preview.png') }}" alt="Company Logo"></a>
        </div>

        <!-- Navigation Menu (Visible on medium screens and larger) -->
        <div class="md:block hidden">
            <ul class="flex gap-4 text-lg relative">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li class="relative group ease duration-300">
                    <a href="#" class="flex items-center">
                        Services
                        <i class="fa-solid fa-caret-down ml-1"></i>
                    </a>
                    <ul class="absolute top-full left-0 bg-white shadow-lg py-2 w-48 text-center rounded-lg hidden group-hover:block">
                        <li class="p-2 cursor-pointer mt-3 border-b hover:bg-[#EB7422] hover:text-white ease duration-300"><p><a href="{{ route('web') }}">Web Development</a></p></li>
                        <li class="p-2 cursor-pointer mt-3 border-b hover:bg-[#EB7422] hover:text-white ease duration-300"><p><a href="{{ route('app') }}">App Development</a></p></li>
                        <li class="p-2 cursor-pointer mt-3 border-b hover:bg-[#EB7422] hover:text-white ease duration-300"><p><a href="{{ route('digital') }}">Digital Marketing</a></p></li>
                        <li class="p-2 cursor-pointer mt-3 border-b hover:bg-[#EB7422] hover:text-white ease duration-300"><p><a href="{{ route('erp') }}">ERP Software Servic</a></p></li>
                        <li class="p-2 cursor-pointer mt-3 border-b hover:bg-[#EB7422] hover:text-white ease duration-300"><p><a href="{{ route('crm') }}">CRM Software </a></p></li>
                    </ul>
                </li>
                <li><a href="{{ route('portfoilo') }}">Portfolio</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            
        </div>

        <!-- Contact Info Section (Visible on medium screens and larger) -->
        <div class="md:block hidden">
            <div class="flex gap-3">
                <img class="w-[20%]" src="{{ asset('storage/img/cell.png') }}" alt="Phone Icon">
                <div>
                    <p class="text-[#EB7422]">Call us now</p>
                    <p class="text-xl">+1-888-442-4644</p>
                </div>
            </div>
        </div>

        <!-- Mobile Hamburger Menu (Hidden on medium screens and larger) -->
        <div class="md:hidden block">
            <i class="fa-solid fa-bars text-4xl menubar"></i>
        </div>
    </nav>
@endsection
