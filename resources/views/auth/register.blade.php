{{-- @extends('layouts.app') --}}

@extends('layout.base')

{{-- @include("{{ asset('js/registrer.js') }}") --}}



@section('title', 'Valhalla Gaming REGISTRER')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" novalidate id="registerForm">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>


                                <span class="invalid-feedback" role="alert">
                                @if ($errors->has('name'))
                                        <strong>{{ $errors->first('name') }}</strong>
                                        @endif
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>


                                <span class="invalid-feedback" role="alert">
                                @if ($errors->has('username'))
                                        <strong>{{ $errors->first('username') }}</strong>
                                        @endif
                                    </span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                
                                <span class="invalid-feedback" role="alert">
                                @if ($errors->has('email'))
                                    <strong>{{ $errors->first('email') }}</strong>
                                    @endif
                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6 countryClass">
                                <select name="country" id="countriesSelect" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required
                                autofocus>
                                    <option value="">Choose one</option>
                                </select>   

                                {{-- <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus> --}}

                                <span class="invalid-feedback" role="alert">
                                @if ($errors->has('country'))
                                        <strong>{{ $errors->first('country') }}</strong>
                                        @endif
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row" style="display:none;" id="provinceContainer">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('Province') }}</label>

                            <div class="col-md-6 provinceClass">
                                <select name="province" id="provinceSelect" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="province" value="{{ old('province') }}" required
                                autofocus>
                                </select>   

                                <span class="invalid-feedback" role="alert">
                                @if ($errors->has('province'))
                                        <strong>{{ $errors->first('province') }}</strong>
                                        @endif
                                    </span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                
                                <span class="invalid-feedback" role="alert">
                                @if ($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                        @endif
                                    </span>
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <span class="errorTxt"></span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="avatar" type="text" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" value="{{ old('avatar') }}" required autofocus>
                                <span class="errorTxt"></span>

                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
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
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/registrer.js') }}"></script>
</div>
@endsection
