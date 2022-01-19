@extends('layouts.layout')

@section('content')

@auth

<div class="access-view">
    <p class="teaching">チームメンバーに登録することで、自分のタスクを観覧できるメンバーを設定できます。</p>
    <div class="loginname">
        <h2>ログインユーザー：<?php $user=Auth::User(); ?>{{ $user->name }}</h2>
    </div>
    <div class="title">
        <a href="home">ホーム</a>
    </div>
</div>
<div class="menber">
    <div class="menberadd">
        <h2>チームを新規作成</h2>
        <form action="{{ route('menberadd') }}" method="POST">
            @csrf
            <label for="user_id"></label>
            <input type="hidden" id="user_id" name="user_id" value="{{$user->id}}">
            <label for="main_name"></label>
            <input type="hidden" id="main_name" name="main_name" value="{{$user->name}}">
            <div class="menber1">
                <p>メンバー1</p>
                <input type="text" id="team_menber1" name="team_menber1" placeholder="氏名">
                <input type="email" id="email_menber1" name="email_menber1" placeholder="メールアドレス">
            </div>
            <div class="menber2">
                <p>メンバー2</p>
                <input type="text" id="team_menber2" name="team_menber2" placeholder="氏名">
                <input type="email" id="email_menber2" name="email_menber2" placeholder="メールアドレス">
            </div>
            <div class="menber3">
                <p>メンバー3</p>
                <input type="text" id="team_menber3" name="team_menber3" placeholder="氏名">
                <input type="email" id="email_menber3" name="email_menber3" placeholder="メールアドレス"> 
            </div>
            <div class="menber4">
                <p>メンバー4</p>
                <input type="text" id="team_menber4" name="team_menber4" placeholder="氏名">
                <input type="email" id="email_menber4" name="email_menber4" placeholder="メールアドレス">
            </div>
            <div class="menber5">
                <p>メンバー5</p>
                <input type="text" id="team_menber5" name="team_menber5" placeholder="氏名">
                <input type="email" id="email_menber5" name="email_menber5" placeholder="メールアドレス">
            </div>
            <div class="menber6">
                <p>メンバー6</p>
                <input type="text" id="team_menber6" name="team_menber6" placeholder="氏名">
                <input type="email" id="email_menber6" name="email_menber6" placeholder="メールアドレス">
            </div>
            <input type="submit" value="登録する">    
        </form> 
    </div>
    <div class="menberchange">
        <h2>チームメンバー変更</h2>
        <div class="formchange">    
            @foreach($teams as $team)
            <form action="{{ route('upload',['team'=>$team->id]) }}" method="POST">
                @csrf
                <input type="hidden" id="id" name="id" value="{{$team->id}}">
                <label for="user_id"></label>
                <input type="hidden" id="user_id" name="user_id" value="{{$user->id}}">
                <label for="main_name"></label>
                <input type="hidden" id="main_name" name="main_name" value="{{$user->name}}">
                <div class="menber1">
                    @if($team->team_menber1 == "")
                        <p>メンバー1</p>
                        <input type="text" id="team_menber1" name="team_menber1" value="メンバーがいません">
                        <input type="email" id="email_menber1" name="email_menber1" value="">
                    @else
                        <p>メンバー1</p>                     
                        <input type="text" id="team_menber1" name="team_menber1" value="{{$team->team_menber1}}">
                        <input type="email" id="email_menber1" name="email_menber1" value="{{$team->email_menber1}}">
                    @endif
                </div>
                <div class="menber2">
                    @if($team->team_menber2 == "")
                        <p>メンバー2</p>
                        <input type="text" id="team_menber2" name="team_menber2" value="メンバーがいません">
                        <input type="email" id="email_menber2" name="email_menber2" value="">
                    @else
                        <p>メンバー2</p>                     
                        <input type="text" id="team_menber2" name="team_menber2" value="{{$team->team_menber2}}">
                        <input type="email" id="email_menber2" name="email_menber2" value="{{$team->email_menber2}}">
                    @endif
                </div>
                <div class="menber3">
                    @if($team->team_menber3 == "")
                        <p>メンバー3</p>
                        <input type="text" id="team_menber3" name="team_menber3" value="メンバーがいません">
                        <input type="email" id="email_menber3" name="email_menber3" value="">
                    @else
                        <p>メンバー3</p>
                        <input type="text" id="team_menber3" name="team_menber3" value="{{$team->team_menber3}}">
                        <input type="email" id="email_menber3" name="email_menber3" value="{{$team->email_menber3}}">
                    @endif
                </div>
                <div class="menber4">
                    @if($team->team_menber4 == "")
                        <p>メンバー4</p>
                        <input type="text" id="team_menber4" name="team_menber4" value="メンバーがいません">
                        <input type="email" id="email_menber4" name="email_menber4" value="">
                    @else
                        <p>メンバー4</p>                 
                        <input type="text" id="team_menber4" name="team_menber4" value="{{$team->team_menber4}}">
                        <input type="email" id="email_menber4" name="email_menber4" value="{{$team->email_menber4}}">
                    @endif
                </div>
                <div class="menber5">
                    @if($team->team_menber5 == "")
                        <p>メンバー5</p>
                        <input type="text" id="team_menber5" name="team_menber5" value="メンバーがいません">
                        <input type="email" id="email_menber5" name="email_menber5" value="">
                    @else
                        <p>メンバー5</p>                     
                        <input type="text" id="team_menber5" name="team_menber5" value="{{$team->team_menber5}}">
                        <input type="email" id="email_menber5" name="email_menber5" value="{{$team->email_menber5}}">
                    @endif
                </div>
                <div class="menber6">
                    @if($team->team_menber6 == "")
                        <p>メンバー6</p>
                        <input type="text" id="team_menber6" name="team_menber6" value="メンバーがいません">
                        <input type="email" id="email_menber6" name="email_menber6" value="">
                    @else
                        <p>メンバー6</p>                  
                        <input type="text" id="team_menber6" name="team_menber6" value="{{$team->team_menber6}}">
                        <input type="email" id="email_menber6" name="email_menber6" value="{{$team->email_menber6}}">
                    @endif
                </div> 
                <input type="submit" value="変更する">   
            </form>  
            @endforeach                
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>

@endauth
@endsection