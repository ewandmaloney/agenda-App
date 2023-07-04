@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Update Contact</div>
          <div class="card-body">
            <form method="POST" action="{{ route('contacts.update', $contact->id) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') ?? $contact->name }}" autocomplete="name" autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="lastname" class="col-md-4 col-form-label text-md-end">Lastname</label>
                <div class="col-md-6">
                  <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"
                    name="lastname" value="{{ old('lastname') ?? $contact->lastname }}" autocomplete="lastname" autofocus>
                  @error('lastname')
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
                    name="email" value="{{ old('email') ?? $contact->email }}" autocomplete="email" autofocus>
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
                    name="phone_number" value="{{ old('phone_number') ?? $contact->phone_number }}" autocomplete="phone_number">
                  @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="company_id" class="col-md-4 col-form-label text-md-end">Company</label>
                <div class="col-md-6">
                  <select name="company_id" id="company_id" class="form-select">
                    @foreach ($companies as $company)
                      <option class="form-control @error('company_id') is-invalid @enderror" value="{{ old('company_id') ?? $company->id }}">{{ $company->name }}</option>
                    @endforeach
                  </select>
                  @error('company_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="profile_picture" class="col-md-4 col-form-label text-md-end">Profile Picture</label>
                <div class="col-md-6">
                  <input id="profile_picture" type="file" class="form-control @error('age') is-invalid @enderror"
                    name="profile_picture" autofocus>
                  @error('profile_picture')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
