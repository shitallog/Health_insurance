@extends('layouts.app')

@section('content')
    <h1>{{ $insuranceProduct->name }}</h1>
    <p>{{ $insuranceProduct->description }}</p>
    <p>Monthly Price: ₹{{ $insuranceProduct->monthly_price }}</p>
    <p>Annual Price: ₹{{ $insuranceProduct->annual_price }}</p>
    <p>Cover Amount: ₹{{ $insuranceProduct->cover_amount }}</p>
    <p>Cashless Hospitals: {{ $insuranceProduct->cashless_hospitals }}</p>
    <a href="{{ route('insurance_products.edit', $insuranceProduct->id) }}">Edit</a>
    <form action="{{ route('insurance_products.destroy', $insuranceProduct->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('insurance_products.index') }}">Back to Products</a>
   
@endsection