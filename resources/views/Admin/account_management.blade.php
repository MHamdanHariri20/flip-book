@extends('Layout.sidebar_admin')

@section('dashboardContent')
  @if(Auth::check())
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Add Admin Account</h5>
          <div class="card">
            <div class="card-body">
              <form method="POST" action="{{route('register.input')}}">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control @error ('nama') is-invalid @enderror" name="nama">
                  @error('nama')
                    <div class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email">
                  @error('email')
                    <div class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="password">
                  @error('password')
                    <div class="form-text text-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="checkbox">
                  <label class="form-check-label">Show password</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body p-4">
              <h5 class="card-title fw-semibold mb-4">Admin Account Management</h5>
              <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">No</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Name</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Email</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Action</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($accounts as $account)
                    <tr>
                      <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $loop->iteration }}.</h6></td>
                      <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">{{ $account['nama'] }}</h6>
                      </td>
                      <td class="border-bottom-0">
                        <p class="mb-0 fw-normal">{{ $account['email'] }}</p>
                      </td>
                      <td class="border-bottom-0">
                        <form method="POST" action="{{ route('delete.account', $account['id']) }}">
                          @csrf
                          @method('DELETE')

                          <div class="d-flex align-items-center gap-2">
                            <a href="{{ route('edit.account', $account['id']) }}" class="ti ti-pencil fs-6" style="border: none; background-color:transparent;color:green;"></a>
                            <span> | </span>
                            <button type="submit" class="ti ti-trash fs-6" style="border: none; background-color:transparent;color:red;"></button>
                          </div>
                        </form>
                      </td>
                    </tr>        
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  @endif
@endsection
        
