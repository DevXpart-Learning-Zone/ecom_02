@extends('layout.admin.admin') @section ('title','Brand List') @section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-lg-flex flex-nowrap align-items-center">
                    <div class="page-title mr-4 pr-4 border-right">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="breadcrumb-bar align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Dashboard
                                </li>

                            </ol>
                        </nav>
                    </div>
                    <div class="ml-auto d-flex align-items-center secondary-menu text-center">
                        <a href="{{ route('admin.category.create') }}" class="tooltip-wrapper" >
                            <i class="fe fe-plus btn btn-icon text-primary"></i>
                        </a>

                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- Success message -->

        @if(Session::has('success'))
            <div class="row message">
                <div class="col-md-12">
                    <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                        <strong>Congrtz!</strong> {{  Session::get('success') }}
                        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ti ti-close"></i>
                        </button> --}}
                    </div>
                </div>
            </div>
        @endif


        <!-- Error message -->

        @if(Session::has('error'))
            <div class="row message">
                <div class="col-md-12">
                    <div class="alert border-0 alert-warning bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">
                        <strong>Congrtz!</strong> {{  Session::get('error') }}
                        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ti ti-close"></i>
                        </button> --}}
                    </div>
                </div>
            </div>
        @endif
        <!-- end row -->
        <!-- begin row -->
        <div class="row">

        <form action="{{ route('admin.brand.store') }}" style="width: 60%" method="post">
            @csrf
            @method('POST')
                <div class="form-group">
                    <label for="">Enter brand name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
