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
                            <h3 class="text-center">Update Portfolio</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('UpdatePortfolio', $portfolio->id) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Upload Img</label>
                                    <input type="file" class="form-control" name="img" id="exampleInputEmail1"
                                        placeholder="Enter Brand">
                                        <img src="{{ asset('storage/' . $portfolio->img) }}" alt="" style="width: 40px">
                                    @error('img')
                                        <span class="text-danger">{{  $message  }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Portfolio Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                        placeholder="Enter Portfolio Title" value="{{ $portfolio->title }}">
                                    @error('title')
                                        <span class="text-danger">{{  $message  }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Portfolio Description</label>
                                    <input type="text" class="form-control" name="Description" id="exampleInputEmail1"
                                        placeholder="Enter Portfolio Description" value="{{ $portfolio->des }}">
                                    @error('Description')
                                        <span class="text-danger">{{  $message  }}</span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('viewPortfolio') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}
@endsection
