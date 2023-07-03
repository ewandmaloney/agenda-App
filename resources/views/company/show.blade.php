@extends('layouts.app')

@section('content')
  <div class=" d-flex align-items-center justify-content-center">
    <div class="card">
        <div class="text-center">
          <h1>{{ $company->name }}</h1>
          <p>Address: {{ $company->address }}</p>
          <p>Contact phone: {{ $company->phone_number }}</p>
          <p>Email: {{ $company->email }}</p>
          <p><a class="btn btn-success" href="{{ route('company.index') }}">Back</a></p>
        </div>
    </div>
  </div>
@endsection