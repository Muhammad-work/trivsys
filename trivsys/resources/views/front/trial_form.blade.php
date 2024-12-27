@extends('layout.index')
@extends('front.nav')
@extends('front.sidebar')
@extends('front.footer')

@section('home')
    <div class="w-full h-uto  p-3 flex justify-center place-items-center mt-3">
        <div class="w-[50%] h-full bg-[#202125] px-3 py-6 rounded">
            <h1 class="text-center text-xl font-bold text-white">Sign Up Now</h1>
            <form action="{{ route('storeTrialCustomerdata') }}" method="POST" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-white">Full Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Enter Your Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-white">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Enter Your Email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-white">Phone</label>
                    <input type="number" class="form-control" name="phone" id="exampleFormControlInput1"
                        placeholder="Enter Your Phone Number">
                </div>

                <button class="py-2 px-4 bg-[white] rounded">Submit</button>
            </form>
        </div>
    </div>
@endsection
