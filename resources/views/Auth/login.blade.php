@extends('Layout.auth')

@section('authContent')
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="{{ url('/') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{ asset('/images/logos/dark-logo.svg') }}" width="180" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form method="POST" action="{{route('login.auth')}}">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama">
                    @error('nama')
                      <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control @error ('nama') is-invalid @enderror" name="email">
                    @error('email')
                      <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control @error ('nama') is-invalid @enderror" name="password" id="password">
                    @error('password')
                      <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkbox">
                    <label class="form-check-label">Show password</label>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                </form>
              </div>
            </div>
          </div>

        
@endsection
