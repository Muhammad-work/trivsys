@extends('layout.app')
@extends('backend.nav')
@extends('backend.saidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 d-inline">All Client Data</h1>
                    </div><!-- /.col -->

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Client Data</li>
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
                                    <th>CLIENT NAME</th>
                                    <th>CLIENT EMAIL</th>
                                    <th>CLIENT PHONE</th>
                                    <th>SERVICE</th>
                                    <th>MESSAGE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mail_requests as $index => $data)
                                    <tr>
                                        <td> {{ $index + 1 }} </td>
                                        <td> {{ $data->name }} </td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->service }}</td>
                                        <td>
                                            @if ($data->mesg)
                                                {{ $data->mesg }}
                                            @else
                                                No Message
                                            @endif
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
