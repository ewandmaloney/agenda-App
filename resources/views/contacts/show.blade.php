@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header text-center">Contact Details</div>
          <div class="card-body">
            <div class="d-flex justify-content-center">
              <img class="profile-picture" src="{{ Storage::url($contact->profile_picture) }}" alt="logo">
            </div>
            <p>Name: {{ $contact->name }} {{ $contact->lastname }}</p>
            <p>Email: <a class="text-decoration-none" href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
            <p>Phone Number: <a class="text-decoration-none"
                href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a></p>
            <p>Works for: <a href="{{ route('company.show', $company->id) }}">{{ $company->name }}</a></p>
            <p>Created at: {{ $contact->created_at }}</p>
            <p>Last updated: {{ $contact->updated_at }}</p>
            <div class="text-center">
              <a href="{{ route('home') }}" class="btn btn-primary text-center">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
