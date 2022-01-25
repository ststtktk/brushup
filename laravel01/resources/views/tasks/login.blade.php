@extends('layouts.layout')

@section('content')


<!-- ログインしている -->
@auth
<div class="logout">
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">logout</button>
    </form>
</div>
<h2>ログインユーザー：<?php $user=Auth::User(); ?>{{ $user->name }}</h2>
<div class="access-view">
    <div class="point">
        <div class="career">
            <form action="{{ route('timeview') }}">
                <input type="hidden" value="{{ $user->email }}" name="email">    
                <input type="image" src="/img/Career.svg" value="チームメンバーを表示" name="search">
            </form>
        </div>
        <div class="brushup">
            <a href="brushup"><img src="/img/Brush up.svg" alt="burshupの画像"></a>
        </div>
        <div class="team">
            <a href="{{ route('team') }}"><img src="/img/teams.svg" alt="teamsの画像"></a>
        </div>
        <div class="more">
            <a href="manual"><img src="/img/More.svg" alt="moreの画像"></a>
        </div>
    </div>
    <div class="mountain">
        <img src="/img/mountain.svg" alt="mountainの画像">
    </div>
    <br>
    <br>
    <br>
</div>
@endauth

<!-- ログインしていない -->
@guest
<div class="block">
    <div class="container">
        <div class="card-header">会員登録画面</div>
        <div class="side">
            <div class="human">
                <img src="/img/white-human.svg" alt="人の画像">
            </div>
            <div class="card line">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3 line2">
                            <label for="name" class="col-md-4 col-form-label text-md-right line3">氏名</label>
                            <div class="col-md-6 line3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 line2">
                            <label for="email" class="col-md-4 col-form-label text-md-right line3">メールアドレス</label>
                            <div class="col-md-6 line3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 line2">
                            <label for="password" class="col-md-4 col-form-label text-md-right line3">パスワード</label>
                            <div class="col-md-6 line3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 line2 ">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right line3">もう一度、パスワードを入力して下さい</label>
                            <div class="col-md-6 line3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 btn1">
                                <button type="submit" class="btn btn-primary line2">
                                    登録する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
            <div class="card-header">ログイン画面</div>
            <div class="side">
            <div class="human">
                <img src="/img/black-human.svg" alt="人間の画像">
            </div>
            <div class="card line">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3 line2">
                            <label for="email" class="col-md-4 col-form-label text-md-right line3">メールアドレス</label>
                            <div class="col-md-6 line3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3 line2">
                            <label for="password" class="col-md-4 col-form-label text-md-right line3">パスワード</label>
                            <div class="col-md-6 line3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label line2 line3" for="remember">
                                    次回からログイン状態にする
                                </label>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 btn1">
                                <button type="submit" class="btn btn-primary">
                                    ログインする
                                </button>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link line2 line3" href="{{ route('password.request') }}">
                                    パスワードを忘れた方はこちら
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endguest
@endsection