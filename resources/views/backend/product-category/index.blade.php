@extends('backend.layouts.master')
@section('title', 'Product Category')
@section('subheading', __('messages.product-category'))
@section('content')
    <div class="row">
        <div class="col-lg-7 col-md-7 col-12 mt-2">
            <div class="card card-custom">
                <div class="card-header flex-wrap">
                    <div class="card-title">
                        <h3 class="card-label">{{ __('messages.product-category') }}</h3>
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
                                        @if ($category->status == 0)
                                            <div class="menu-item px-3">
                                                <a href="{{ route('product.category.status', encrypt($category->id)) }}"
                                                    class="menu-link px-3"><span
                                                        class="badge badge-warning">Deactive</span></a>
                                            </div>
                                        @else
                                            <div class="menu-item px-3">
                                                <a href="{{ route('product.category.status', encrypt($category->id)) }}"
                                                    class="menu-link px-3"><span
                                                        class="badge badge-success">Active</span></a>
                                            </div>
                                        @endif
                                    </td>
                                    <td>{{ date('d M, Y', strtotime($category->created_at)) }}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#exampleModal_{{ $category->id }}"
                                            href="{{ route('product.category.edit', encrypt($category->id)) }}" class="mx-2"><i
                                                class="fa fa-edit text-primary"></i></a>

                                        <!-- Modal-->
                                        <div class="modal fade" id="exampleModal_{{ $category->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update Product
                                                            Category</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('product.category.update', encrypt($category->id)) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Product Category Name
                                                                    <span class="text-danger">*</span></label>
                                                                <input type="text"
                                                                    class="form-control @error('name')
                                                                        is-invalid
                                                                    @enderror"
                                                                    name="name" value="{{ $category->name }}" />
                                                                @error('name')
                                                                    <span class="form-text text-danger">
                                                                        {{ $message }}
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            <div class="flex-end-grid d-md-flex justify-content-md-end">
                                                                <button type="submit"
                                                                    class="btn btn-success mr-2">Update</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a onclick="confirm('Are You Sure?')"
                                            href="{{ route('product.category.delete', encrypt($category->id)) }}"
                                            class="mx-2"><i class="fa fa-trash-alt text-danger"></i></a>
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
                        <h3 class="card-label">{{ __('messages.create-new-category') }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card card-custom gutter-b example example-compact">
                        <!--begin::Form-->
                        <div class="card-body">
                            <form action="{{ route('product.category.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('messages.product-category-name') }}
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
