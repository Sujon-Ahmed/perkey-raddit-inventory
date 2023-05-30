@extends('backend.layouts.master')
@section('title', 'Manage Stock')
@section('subheading', __('messages.product-stock'))
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 mt-2">
            <div class="card card-custom">
                <div class="card-header flex-wrap">
                    <div class="card-title">
                        <h3 class="card-label">{{ __('messages.product-stock') }}</h3>
                        <a href="{{ route('stock.create') }}" class="btn btn-success">{{ __('messages.add-item-to-stock') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product Name</th>
                                <th>Current Stock</th>
                                <th>Product Price</th>
                                <th>Created_At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stocks as $key => $p)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $p->product->name }}</td>
                                    <td>
                                        {{ $p->stock }}
                                    </td>
                                    <td>
                                        {{ $p->price }}
                                    </td>
                                    <td>{{ date('d M, Y', strtotime($p->created_at)) }}</td>
                                    <td>
                                        {{-- <a data-toggle="modal" data-target="#exampleModal_{{ $p->id }}"
                                            href="{{ route('product.category.edit', encrypt($p->id)) }}" class="mx-2"><i
                                                class="fa fa-edit text-primary"></i></a> --}}

                                        <!-- Modal-->
                                        {{-- <div class="modal fade" id="exampleModal_{{ $p->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update Product
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form
                                                            action="{{ route('product.category.update', encrypt($p->id)) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Product Name
                                                                    <span class="text-danger">*</span></label>
                                                                <input type="text"
                                                                    class="form-control @error('name')
                                                                        is-invalid
                                                                    @enderror"
                                                                    name="name" value="{{ $p->name }}" />
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
                                        </div> --}}
                                        <a onclick="confirm('Are You Sure?')"
                                            href="{{ route('stock.delete', encrypt($p->id)) }}"
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
        {{-- <div class="col-lg-5 col-md-5 col-12 mt-2">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">{{ __('messages.create-new-stock') }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card card-custom gutter-b example example-compact">
                        <!--begin::Form-->
                        <div class="card-body">
                            <form action="{{ route('product.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('messages.product-category') }}
                                        <span class="text-danger">*</span></label>
                                    <select class="form-control" name="cat_id" id="">
                                        <option value="">--Select Category--</option>
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('cat_id')
                                        <span class="form-text text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.product-name') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('name')
                                            is-invalid
                                        @enderror"
                                        name="name" placeholder="Enter product name..." />
                                    @error('name')
                                        <span class="form-text text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>{{ __('messages.product-price') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text"
                                        class="form-control @error('price')
                                            is-invalid
                                        @enderror"
                                        name="price" placeholder="Enter product price..." />
                                    @error('price')
                                        <span class="form-text text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Add</button>
                            </form>
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div> --}}
    </div>
@endsection
