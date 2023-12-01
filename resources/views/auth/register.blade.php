@extends('layouts.auth')

@section('content')
<div class="text-center mt-4">
    <h1 class="h2">Get started</h1>
    <p class="lead">
        Start creating the best Event Attendance for your Participant.
    </p>
</div>

<div class="card">
    <div class="card-body">
        <div class="m-sm-3">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full name</label>
                    <input class="form-control @error('name') is-invalid @enderror form-control-lg" type="text"
                        name="name" placeholder="Enter your name" />

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email"
                        name="email" placeholder="Enter your email" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input class="form-control form-control-lg @error('password') is-invalid @enderror" type="password"
                        name="password" placeholder="Enter password" />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input class="form-control form-control-lg" type="password" name="password_confirmation"
                        placeholder="Enter password" />
                </div>
                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-lg btn-primary">Sign up</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="text-center mb-3">
    Already have account? <a href="{{ route('login') }}">Log In</a>
</div>
@endsection