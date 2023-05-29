@extends('backend.layouts.master')
@section('title', 'Product Category')
@section('subheading', 'Product Category')
@section('content')
    <div class="row">
        <div class="col-lg-7 col-md-7 col-12 mt-2">
            <div class="card card-custom">
                <div class="card-header flex-wrap">
                    <div class="card-title">
                        <h3 class="card-label">Product Categories
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Created_At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td>
                                        @if ($category->status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-warning">Deactive</span>
                                        @endif
                                    </td>
                                    <td>{{ date('d M, Y', strtotime($category->created_at)) }}</td>
                                    <td>
                                        <a href="#" class="mx-2"><i class="fa fa-edit text-primary"></i></a>
                                        <a href="#" class="mx-2"><i class="fa fa-trash-alt text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-12 mt-2">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Create Product Categories</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card card-custom gutter-b example example-compact">
                        <!--begin::Form-->
                        <div class="card-body">
                            <form action="{{ route('product.category.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>Product Category Name
                                        <span class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                        name="name" placeholder="Enter category name..." />
                                    @error('name')
                                        <span class="form-text text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
    </div>
@endsection
