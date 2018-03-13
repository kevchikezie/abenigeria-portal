@extends('auth.layouts.app')

@section('content')
        <div id="page-container" class="main-content-boxed">
            {{-- Main Container --}}
            <main id="main-container">
                {{-- Page Content --}}
                <div class="bg-gd-sea">
                    <div class="hero-static content content-full bg-white invisible" data-toggle="appear">
                        {{-- Header --}}
                        <div class="py-30 px-5 text-center">
                            <a class="link-effect font-w700" href="{{ url('/') }}">
                                <img src="{{ asset('/assets/img/ABE-logo.png') }}" height="30" width="102">
                            </a>
                            <h1 class="h2 font-w700 mt-50 mb-10">Reset Password</h1>
                            <h2 class="h4 font-w400 text-muted mb-0">Please enter your new password</h2>
                        </div>
                        {{-- END Header --}}

                        {{-- Reminder Form --}}
                        <div class="row justify-content-center px-5">
                            <div class="col-sm-8 col-md-6 col-xl-4">
                                <form method="POST" action="{{ route('password.request') }}" autocomplete="off">
                                    {{ csrf_field() }}

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group{{ $errors->has('email') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="email" class="form-control" id="email" name="email" value="{{ $email or old('email') }}" required>
                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="email"> Email</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="password" name="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="password"> Password</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' text-danger' : '' }} row">
                                        <div class="col-12">
                                            <div class="form-material floating">
                                                <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
                                                @if ($errors->has('password_confirmation'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </span>
                                                @endif
                                                <label for="password-confirm"> Confirm Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-hero btn-noborder btn-rounded btn-alt-primary">
                                            <i class="fa fa-asterisk mr-10"></i> Reset Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- END Reminder Form --}}
                    </div>
                </div>
                {{-- END Page Content --}}
            </main>
            {{-- END Main Container --}}
        </div>
        {{-- END Page Container --}}
@endsection
