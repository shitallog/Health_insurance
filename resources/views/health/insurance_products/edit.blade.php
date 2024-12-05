
@extends('backend.layouts.master')

@section('title')
    {{ __('Admins - Admin Panel') }}
@endsection
@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection
@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">{{ __('Admins') }}</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
                    <li><span>{{ __('All Admins') }}</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">

<h1>Edit Insurance Product</h1>

<form action="{{ route('health.insurance_products.update', $insuranceProduct->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name</label>
        <input  class="form-control" type="text" id="name" name="name" required value="{{ old('name', $insuranceProduct->name) }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="description">Description</label>
        <textarea  class="form-control" id="description" name="description">{{ old('description', $insuranceProduct->description) }}</textarea>
        @error('description')
            <div>{{ $message }}</div>
        @enderror
    </div>

<div>
    <label>Monthly Price</label>
        <input  class="form-control" type="number" step="0.01" name="monthly_price" value="{{ $insuranceProduct->monthly_price }}" required>
</div>
<div>
        <label>Annual Price</label>
        <input   class="form-control" type="number" step="0.01" name="annual_price" value="{{ $insuranceProduct->annual_price }}" required>
</div>
    <div>
        <label for="price">Price</label>
        <input  class="form-control" type="number" id="price" name="price" step="0.01" required value="{{ old('price', $insuranceProduct->price) }}">
        @error('price')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="category_id">Category</label>
        <select  class="form-control" id="category_id" name="category_id" required>
            <option value="">Select a category</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id', $insuranceProduct->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="product_code">Product Code</label>
        <input  class="form-control" type="text" id="product_code" name="product_code" required value="{{ old('product_code', $insuranceProduct->product_code) }}">
        @error('product_code')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="image">Image</label>
        <input  class="form-control" type="file" id="image" name="image">
        @error('image')
            <div>{{ $message }}</div>
        @enderror
        @if ($category->image)
                <img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}" style="width: 100px; height:100px;">
                @endif
    </div>

    <div>
        <label for="cover_amount">Cover Amount</label>
        <input  class="form-control" type="number" id="cover_amount" name="cover_amount" step="0.01" required value="{{ old('cover_amount', $insuranceProduct->cover_amount) }}">
        @error('cover_amount')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="cashless_hospitals">Number of Cashless Hospitals</label>
        <input  class="form-control" type="number" id="cashless_hospitals" name="cashless_hospitals" required value="{{ old('cashless_hospitals', $insuranceProduct->cashless_hospitals) }}">
        @error('cashless_hospitals')
            <div>{{ $message }}</div>
        @enderror
    </div>
<br>
    <button type="submit" class="btn btn-primary">Update Product</button>
    <a class="btn btn-primary" href="{{ route('health.insurance_products.index') }}">Back to Products</a>

</form>


<script src="{{ asset('js/app.js') }}"></script>
</div>
    @endsection
    @section('scripts')
     <!-- Start datatable js -->
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
     
     <script>
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }
     </script>
@endsection