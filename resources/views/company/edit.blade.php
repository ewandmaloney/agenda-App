@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Edit Company</div>

          <div class="card-body">
            <form method="POST" action="{{ route('company.store') }}">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') ?? $company->name }}" autocomplete="name" autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="address" class="col-md-4 col-form-label text-md-end">Address</label>
                <div class="col-md-6">
                  <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    name="address" value="{{ old('address') ?? $company->address }}" autocomplete="address" autofocus>
                  @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                <div class="col-md-6">
                  <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') ?? $company->email }}" autocomplete="email" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="phone_number" class="col-md-4 col-form-label text-md-end">Phone Number</label>
                <div class="col-md-6">
                  <input id="phone_number" type="tel" class="form-control @error('phone_number') is-invalid @enderror"
                    name="phone_number" value="{{ old('phone_number') ?? $company->phone_number }}" autocomplete="phone_number">
                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
