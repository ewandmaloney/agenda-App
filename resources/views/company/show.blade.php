@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">Company Details</div>
          <div class="card-body">
            <p>Name: {{ $company->name }} </p>
            <p>Address: {{ $company->address }} </p>
            <p>Email: <a class="text-decoration-none" href="mailto:{{ $company->email }}">{{ $company->email }}</a></p>
            <p>Phone Number: <a class="text-decoration-none"
                href="tel:{{ $company->phone_number }}">{{ $company->phone_number }}</a></p>
            <p>Created at: {{ $company->created_at }}</p>
            <p>Last updated: {{ $company->updated_at }}</p>
            <div class="text-center">
              <a href="{{ url()->previous() }}" class="btn btn-primary text-center">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection