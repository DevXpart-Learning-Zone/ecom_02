@extends('layout.admin.admin') @section ('title','Add Product') @section('content')
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
                    <a href="{{ route('admin.product.index') }}" class="tooltip-wrapper">
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
                <strong>Congrtz!</strong> {{ Session::get('success') }} {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                <strong>Congrtz!</strong> {{ Session::get('error') }} {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="ti ti-close"></i>
                        </button> --}}
            </div>
        </div>
    </div>
    @endif
    <!-- end row -->
    <!-- begin row -->
    <div class="row">

        <form action="{{ route('admin.product.store') }}" style="width: 60%" method="post" enctype="multipart/form-data">
            @csrf @method('POST')
            <div class="form-group">
                <label for="">Enter prouct name</label>
                <input type="text" name="name" class="form-control">
            </div>


            <div class="form-group">
                <label for="">Select Category</label>
                <select name="category_id" id="" class="form-control">
                    <option value="" disabled selected>Select Category</option>
                    @foreach($categories as $key => $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="">Select Brand</label>
                <select name="brand_id" id="" class="form-control">
                    <option value="" disabled selected>Select Brand</option>
                    @foreach($brands as $key => $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" class="form-control">
                </select>
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="">Featured </label>
                <select name="featured" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0" selected>No</option>

                </select>
            </div>
            <div class="form-group">
                <label for="">On sale </label>
                <select name="on_sale" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0" selected>No</option>

                </select>
            </div>




            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection