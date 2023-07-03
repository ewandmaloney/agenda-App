@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form action="{{ route('company.index') }}" method="get">
        <div class="input-group">
          <input type="search" class="form-control" name="query" placeholder="Search Company">
          <div class="input-group-append">
            <button class="btn btn-primary ms-2" type="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="container pt-4 p-3">
  <div class="row">

    @forelse ($company as $companies)
      <div class="col-md-4 mb-3">
        <div class="card text-center">
          <div class="card-body">
            <a class="text-decoration-none text-dark" href="{{ route('company.show', $companies->id) }}">
              <h3 class="card-title text-capitalize">{{ $companies->name }}</h3>
            </a>
            <p class="m-2">Phone number: {{ $companies->phone_number }}</p>
            <p class="m-2">Address: {{ $companies->address }}</p>
            <a href="{{ route('company.edit', $companies->id) }}"
              class="btn btn-secondary mb-2">Edit Contact</a>
            <form action="{{ route('company.destroy', $companies->id) }}"
              method="POST">
              @csrf
              @method("DELETE")
              <button type="submit" class="btn btn-danger mb-2">Delete
                Contact</button>
            </form>
          </div>
        </div>
      </div>

@empty
  <div class="d-flex align-items-center justify-content-center">
    <div class="text-center">
      <p>Still no companies. <a class="btn btn-primary" href="{{ route('company.create') }}">Add here</a></p>
    </div>
  </div>
  @endforelse

  </div>
@endsection
