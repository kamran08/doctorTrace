@extends('main')

@section('container')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register as Doctor') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('doctor.register.submit') }}">
                        @csrf
                        {{-- name --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Adress --}}

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __(' Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Phone --}}

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __(' Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone"type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Chamber Location --}}

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __(' Location') }}</label>

                            <div class="col-md-6">
                                
                                <select id="location" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" value="{{ old('location') }}" required>
                                        <option  disabled selected>Choose a City</option>
                                        <option value="Sylhet">Sylhet</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Chattagram">Chattagram</option>
                                      </select>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Sitting Time --}}

                        <div class="form-group row">
                            <label for="degree" class="col-md-4 col-form-label text-md-right">{{ __('Degree Information') }}</label>

                            <div class="col-md-6">
                                <input id="degree" type="text" class="form-control{{ $errors->has('degree') ? ' is-invalid' : '' }}" name="degree" value="{{ old('degree') }}" required>

                                @if ($errors->has('degree'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('degree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Specialties" class="col-md-4 col-form-label text-md-right">{{ __('Specialties') }}</label>

                            <div class="col-md-6">
                                <input id="specialties" type="text" class="form-control{{ $errors->has('specialties') ? ' is-invalid' : '' }}" name="specialties" value="{{ old('specialties') }}" required>

                                @if ($errors->has('specialties'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('specialties') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4 ">
                            <a class="btn btn-link pl-0" href="{{ route('register') }}">
                                {{ __('Sign up as User') }}
                            </a>
                            {{-- <a class="btn btn-link pl-0" href="{{ route('hospital.register') }}">
                                {{ __('Sign up as  Organization') }}
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
