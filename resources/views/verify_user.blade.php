@extends('layouts.main')

@section('content')
<br><br><br><br><br>
<center>
    <div class="container">
        <center>
            <h1>Please enter these credentials to verify if you have previously registered.</h1>
        </center>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Registeration Email</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Registeration Phone number</label>

                <div class="col-md-6">
                    <input id="password" type="text" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        Proceed to Submit entry
                    </button>

                </div>
            </div>
        </form>
    </div>
</center>
<br><br>
@endsection
