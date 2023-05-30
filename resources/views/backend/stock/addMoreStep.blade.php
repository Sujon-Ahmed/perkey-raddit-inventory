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
            <select class="form-control" name="p_id" id="">
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
        <label>{{ __('messages.action') }}</label>
    </div>
</div>
