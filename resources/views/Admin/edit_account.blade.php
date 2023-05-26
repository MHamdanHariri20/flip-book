@extends('Layout.sidebar_admin')

@section('dashboardContent')
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/dashboard/admin/account/update/{{ $account['id'] }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="nama" value="{{ $account['nama'] }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ $account['email'] }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="{{ $account['password'] }}">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox">
                            <label class="form-check-label">Show password</label>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button href="/dashboard/admin/account" class="btn btn-danger">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection