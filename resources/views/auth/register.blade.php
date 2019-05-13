@extends('layouts.layout')

@section('header-title', 'Регистрация')

@section('content')

@inject('captcha', 'App\Support\Captcha\CaptchaInterface')

{{ $captcha->getScript() }}

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @if ($errors->has($captcha->getHtmlAttributeName()))
                            <span class="help-block">
                                <strong>{{ $errors->first($captcha->getHtmlAttributeName()) }}</strong>
                            </span>
                        @endif
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{ $captcha->getHtmlView() }}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button id="register-submit" type="submit" class="btn btn-success">Регистрация</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
