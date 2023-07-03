@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="{{ route('contacts.index') }}" method="get">
          <div class="input-group">
            <input type="search" class="form-control" name="query" placeholder="Search Contact">
            <div class="input-group-prepend">
              <button class="btn btn-primary ms-2" type="submit">Search</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container pt-4 p-3">
    <div class="row">


      @forelse ($contacts as $contact)
        <div class="col-md-4 mb-3">
          <div class="card text-center">
            <div class="card-body">
              <a class="text-decoration-none text-dark" href="{{ route('contacts.show', $contact->id) }}">
                <img class="profile-picture" src="{{ Storage::url($contact->profile_picture) }}" alt="profile_picture">
                <h3 class="card-title text-capitalize">{{ $contact->name }}</h3>
              </a>
              <p class="m-2">{{ $contact->phone_number }}</p>
              <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-secondary mb-2">Edit Contact</a>
              <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-2">Delete
                  Contact</button>
              </form>
            </div>
          </div>
        </div>

      @empty
        <div class="d-flex align-items-center justify-content-center">
          <div class="text-center">
            <p>Still no contacts. <a class="btn btn-primary" href="{{ route('contacts.create') }}">Add here</a></p>
          </div>
        </div>
      @endforelse
      {{ $contacts->links() }}
    </div>
  @endsection
