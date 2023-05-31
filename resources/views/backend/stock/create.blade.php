@extends('backend.layouts.master')
@section('title', 'Manage Stock')
@section('subheading', __('messages.product-stock'))
@section('content')
    <div class="row">

        <div class="col-lg-12 col-md-12 col-12 mt-2">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">{{ __('messages.create-new-stock') }}</h3>
                    </div>
                </div>
                <form action="{{ route('stock.store') }}" method="POST">
                    <div class="card-body">
                        <div class="card card-custom gutter-b example example-compact">

                            <div class="card-body">
                                @csrf
                                <div class="addMoreStep">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>{{ __('messages.product-category') }}
                                                    <span class="text-danger">*</span></label>
                                                <select id="categoryId" class="form-control" name="cat_id" id="">
                                                    <option value="">--Select Category--</option>
                                                    @foreach ($categories as $cat)
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('cat_id')
                                                    <span class="form-text text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label>{{ __('messages.product-name') }}
                                                    <span class="text-danger">*</span></label>
                                                <select class="form-control" name="p_id" id="product_id">
                                                    <option value="">--Select Product--</option>
                                                </select>
                                                @error('p_id')
                                                    <span class="form-text text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label>{{ __('messages.product-qty') }}
                                                    <span class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('qty')
                                                        is-invalid
                                                    @enderror"
                                                    name="qty" id="qty" placeholder="Quantity..." />
                                                @error('qty')
                                                    <span class="form-text text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <label>{{ __('messages.product-current-qty') }}
                                                    <span class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('c_qty')
                                                        is-invalid
                                                    @enderror"
                                                    name="c_qty" id="c_qty" readonly
                                                    placeholder="Current Quantity..." />
                                                @error('c_qty')
                                                    <span class="form-text text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <label>{{ __('messages.action') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>{{ __('messages.product-category') }}
                                                <span class="text-danger">*</span></label>
                                            <select onchange="categoryProduct()" class="form-control" name="cat_id"
                                                id="">
                                                <option value="">--Select Category--</option>
                                                @foreach ($categories as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('cat_id')
                                                <span class="form-text text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>{{ __('messages.product-name') }}
                                                <span class="text-danger">*</span></label>
                                            <select class="form-control" name="p_id" id="">
                                            </select>
                                            @error('p_id')
                                                <span class="form-text text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>{{ __('messages.product-qty') }}
                                                <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('qty')
                                                    is-invalid
                                                @enderror"
                                                name="qty" placeholder="Quantity..." />
                                            @error('qty')
                                                <span class="form-text text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>{{ __('messages.product-current-qty') }}
                                                <span class="text-danger">*</span></label>
                                            <input type="text"
                                                class="form-control @error('c_qty')
                                                    is-invalid
                                                @enderror"
                                                name="c_qty" readonly placeholder="Current Quantity..." />
                                            @error('c_qty')
                                                <span class="form-text text-danger">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button type="button"
                                            class="mt-8 btn btn-sm btn-danger">{{ __('messages.remove') }}</button>
                                    </div>
                                </div>
                                <div id="showaddmorerow_content"></div>
                                <button type="button" onclick="addmorerow()"
                                    class="float-right mr-30 btn btn-info btn-sm">{{ __('messages.add-more') }}</button>

                            </div>
                            <button type="submit"
                                class="btn btn-primary mt-2 justify-content-center d-flex align-items-center">{{ __('messages.save') }}</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // category wise product show on dropdown
            $('#categoryId').change(function() {
                var id = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getCategory.product') }}',
                    data: {
                        'id': id
                    },
                    success: function(data) {
                        $('#product_id').html(data);
                        // console.log(data);
                    }
                });

                $('#product_id').change(function() {
                    var productId = $(this).val();
                    // $.ajax({
                    //     type: 'POST',
                    //     url: '{{ route('fillter.product') }}',
                    //     type: 'JSON',
                    //     data: {
                    //         'productId': productId
                    //     },
                    //     success: function(data) {
                    //         console.log(data);
                    //     }
                    // });
                    $.ajax({
                        type: "POST",
                        url: "{{ route('fillter.product') }}",
                        data: {
                            'productId' : productId
                        },
                        dataType: "JSON",
                        success: function (response) {

                        }
                    });
                });

            });

            // onchange qty
            $('#qty').blur(function() {
                var quantity = $(this).val();
                $('#c_qty').val(quantity);
            });

            function addmorerow() {
                var numberofrow = ($('.addMoreStep .row').length - 0) + 1;
                var html = '';
                $('.addMoreStep').append(html);
            }
        });
    </script>
@endsection
