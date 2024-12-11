@extends('layout.app')
@extends('backend.nav')
@extends('backend.saidebar')



@section('content')
    {{-- <section class="content"> --}}
    <div class="content-wrapper">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-6  b-block m-auto mt-4">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="text-center">Send Mail Form  {{ $mailRequest->name }} </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('sendMailToClient') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
        
                                <div class="form-group">
                                    <label for="exampleInputEmail1">To Mail</label>
                                    <input type="text" class="form-control" name="email" id="exampleInputEmail1"
                                        placeholder="Enter Portfolio Title" value="{{ $mailRequest->email }}">
                                    @error('email')
                                        <span class="text-danger">{{  $message  }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="exampleInputEmail1"
                                        placeholder="Enter Subject" value="">
                                    @error('subject')
                                        <span class="text-danger">{{  $message  }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Message</label>
                                    <textarea class="form-control" placeholder="Enter Message" name="message" id="floatingTextarea"></textarea>
                                    @error('message')
                                        <span class="text-danger">{{  $message  }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('viewClientTable') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-primary">Send Mail</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}
@endsection
