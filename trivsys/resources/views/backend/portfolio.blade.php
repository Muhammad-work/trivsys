@extends('layout.app')
@extends('backend.nav')
@extends('backend.saidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <h1 class="m-0 d-inline">Portfolio</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <h1 class="m-0 d-inline"><a href="{{ route('viewAddPortfolioForm') }}" class="btn btn-primary">Add New</a></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            @if (session('success'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>PORTFOLIO IMG</th>
                                    <th>PORTFOLIO TITLE</th>
                                    <th>PORTFOLIO DESCRIPTION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolio as $index  => $data)
                                     <tr>
                                        <td> {{ $index + 1 }} </td>
                                        <td>  
                                            <img  src="{{ asset('storage/' . $data->img) }}" alt="" style="width: 40px">
                                        </td>
                                        <td> {{ $data->title }} </td>
                                        <td>{{ $data->des }}</td>
                                        <td>
                                            <a href="{{ route('editPortfolioViewForm',$data->id) }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ route('deletePortfolio',$data->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                     </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
