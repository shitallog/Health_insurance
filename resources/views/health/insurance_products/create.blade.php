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
<h1 class="text-center">Create Insurance Product</h1>

<div class="container">

<form action="{{ route('insurance_products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control"  required value="{{ old('name') }}">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea id="description" class="form-control"  name="description">{{ old('description') }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
        <label>Monthly Price</label>
        <input type="number" class="form-control" step="0.01" name="monthly_price" required>
        @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
        <label>Annual Price</label>
        <input type="number" class="form-control" step="0.01" name="annual_price" required>
        @error('description')
                <div>{{ $message }}</div>
            @enderror
</div>
        <div>
            <label for="price">Price</label>
            <input class="form-control"  type="number" id="price" name="price" step="0.01" required value="{{ old('price') }}">
            @error('price')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="category_id">Category</label>
            <select  class="form-control"  id="category_id" name="category_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="product_code">Product Code</label>
            <input class="form-control"  type="text" id="product_code" name="product_code" required value="{{ old('product_code') }}">
            @error('product_code')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="image">Image</label>
            <input class="form-control"  type="file" id="image" name="image">
            @error('image')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="cover_amount">Cover Amount</label>
            <input class="form-control"  type="number" id="cover_amount" name="cover_amount" step="0.01" required value="{{ old('cover_amount') }}">
            @error('cover_amount')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="cashless_hospitals">Number of Cashless Hospitals</label>
            <input class="form-control"  type="number" id="cashless_hospitals" name="cashless_hospitals" required value="{{ old('cashless_hospitals') }}">
            @error('cashless_hospitals')
                <div>{{ $message }}</div>
            @enderror
        </div>
<br><br>
        <button type="submit" class="pd-5 btn btn-primary">Create Product</button>
        <a href="{{ route('health.insurance_products.index') }}" class="pd-5 btn btn-primary">Back to Products</a>
        </div>
        </div>
    <script src="{{ asset('js/app.js') }}"></script>

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