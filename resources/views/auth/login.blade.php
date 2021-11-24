@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<div {{-- class="py-4 bg-dark" style="background-size: cover; background-position: center top;" --}}>
  <div class="container">
    <div class="row my-4">
      <div class="mx-auto col-md-6 col-10 col-xl-4 px-4">
        <div class="card bg-primary">
          <div class="card-body text-center">
            <div class="row mt-5">
              <div class="col-md-12">
                <h5 class="mb-4">
                <b>ÁREA DO USUÁRIO</b>
                </h5>
                <!--                   <button class="btn btn-icon rounded btn-light mx-1 btn-facebook shadow" type="button">
                <i class="fa fa-fw fa-lg fa-facebook-square"></i>
                </button> -->
                <button class="btn btn-icon rounded btn-lg btn-light mx-1 btn-twitter shadow" type="button">
                <img class="img-fluid d-block shadow rounded-circle" src="{{ url('img/img/user-male-icon_34332.png') }}">
                </button>
                <!--                   <button class="btn btn-icon rounded btn-light mx-1 btn-google shadow" type="button">
                <i class="fa fa-fw fa-google-plus fa-lg"></i>
                </button> -->
              </div>
            </div>
            <div class="row mt-4 pt-2">
              <div class="col">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                  @csrf
                  <!--                     <div class="form-group mb-2">
                    <div class="input-group border-0">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                          <i class="now-ui-icons users_circle-08 lg"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="First Name..."> </div>
                    </div> -->
                    <div class="form-group mb-3">
                      <div class="input-group border-0">
                        <div class="input-group-prepend ">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons ui-1_email-85 lg"></i>
                          </span>
                        </div>
                        <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" id="inlineFormInputGroup" placeholder="Email:" required autofocus>
                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group mb-2">
                      <div class="input-group border-0">
                        <div class="input-group-prepend ">
                          <span class="input-group-text" id="basic-addon1">
                            <i class="now-ui-icons text_caps-small lg"></i>
                          </span>
                        </div>
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="inlineFormInputGroup" placeholder="Senha:" required>
                        
                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <button type="submit" class="btn mt-4 mb-3 btn-light rounded btn-lg text-primary">Acessar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Login') }}</div>
          <div class="card-body">
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @csrf
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
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
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                  </button>
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  @endsection