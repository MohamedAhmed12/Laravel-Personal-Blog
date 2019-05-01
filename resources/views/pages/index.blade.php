@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container">
           <div class="row justify-content-center">
                <div class="col">
                        <iframe width="660" height="415" src="https://www.youtube.com/embed/SFm_vIfTIZ8?autoplay=1&mute=1&showinfo=0&controls=0" frameborder="0" autoplay="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
                <!--  Start If the user is guet-->
                @guest
                 <div class="col">
                    <div class="card text-light pt-4 pb-4">
                        <div class="card-header h3">{{ __('Login') }}</div>

                        <div class="card-body pr-0 pl-0">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-7 pr-0 pl-0">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-center pr-4">{{ __('Password') }}</label>

                                    <div class="col-md-7 pr-0 pl-0">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-7 offset-md-1">
                                        <button type="submit" class="btn mb-1">
                                            {{ __('Login') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link pl-0" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endguest
                <!--  End If the user is guet-->
            </div>
        </div>
    </div>
@endsection('content')
