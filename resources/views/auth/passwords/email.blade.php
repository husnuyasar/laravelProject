@extends('masters.entry.master')

@section('content')


<form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
    @csrf
    <div class="form-group row">
        <label for="username" class="col-md-6 col-form-label text-md-right">{{ __('Username') }}</label>

        <div class="col-md-6">
            <input id="email" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

            @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </div>
</form>
@endsection