@extends('layout.app')
@extends('admin.nav')
@extends('admin.saidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-2">
                        <h1 class="m-0 d-inline">All Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                        <h1 class="m-0 d-inline"><a href="{{ route('addUser') }}" class="btn btn-primary">Add New</a></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Users</li>
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
                                    <th>USER NAME</th>
                                    <th>USER EMAIL</th>
                                    <th>USER PHONE</th>
                                    <th>ROLE</th>
                                    <th>SALES COUNT</th> <!-- Sales Count Column -->
                                    <th>MONTH</th>
                                    <th>LOGIN STATUS</th> <!-- Login Status -->
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($users as $index => $user)
                                    @if ($user->role == 'user')
                                        <tr>
                                            <td> {{ $index + 1 }} </td>
                                            <td> {{ $user->name }} </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                @php
                                                    // Get sales count from salesData array
                                                    $salesCount = $salesData[$user->id] ?? 0;
                                                @endphp
                                                {{ $salesCount }} <!-- Display sales count -->
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::now()->month($currentMonth)->format('F') }}
                                                <!-- Display current month name -->
                                            </td>
                                            <td>
                                                @if ($user->ip_address === '0')
                                                   <span class="bg-danger px-1 py-2 d-inline-block text-center rounded mt-1">Deactivate</span>
                                                @else
                                                  <span class="bg-success px-1 py-2 d-inline-block text-center rounded mt-1">Active</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('viewEditFormUser', $user->id) }}" class="btn btn-primary">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="{{ route('deleteUser', $user->id) }}" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
