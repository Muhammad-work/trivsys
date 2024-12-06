@section('sidebar')
    <div class="w-full h-screen flex justify-end fixed top-0 left-0 sidebar z-50"
        style="transform: translateX(100%); transition: transform 1s;">
        <div class="w-[300px] h-full bg-[white] flex relative justify-start p-10 shadow-lg">
            <i class="fa-solid fa-x absolute left-4 top-2 cancel text-2xl"></i>
            <ul class="flex flex-col gap-9 text-lg mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li class="relative group">
                    <a href="#" class="flex items-center">
                        Services
                        <i class="fa-solid fa-caret-down ml-1"></i>
                    </a>
                    <ul
                        class=" py-2 w-48 text-center rounded-lg">
                        <li class="p-2 cursor-pointer mt-3 border-b">
                            <p>App Development</p>
                        </li>
                        <li class="p-2 cursor-pointer mt-3 border-b">
                            <p>Web Development</p>
                        </li>
                        <li class="p-2 cursor-pointer mt-3 border-b">
                            <p>Graphic Designing</p>
                        </li>
                        <li class="p-2 cursor-pointer mt-3">
                            <p>UI/UX Designing</p>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
@endsection
