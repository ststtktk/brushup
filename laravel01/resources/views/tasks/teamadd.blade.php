@extends('layouts.layout')

@section('content')

<div class="access-view">
    <!--
    <div class="point">
        <div class="brushup">
            <img src="/img/Brush up.svg" alt="burshupの画像">
        </div>
    </div>
    -->
    <div class="loginname">
        <h2>ログインユーザー：<?php $user=Auth::User(); ?>{{ $user->name }}</h2>
    </div>
    <div class="title">
        <a href="home">ホーム</a>
    </div>
</div>

<div class="form">
    <label for="main_name">本人</label><br>
    {{ $user->name }}
        <div class="teams">
        <h2>Team Menber 編集</h2>
        @foreach($teams as $team)
        <form action="{{ route('upload',['team'=>$team->user_id]) }}" method="POST">
            @csrf
            <input type="hidden" value="{{ $team->user_id }}">
            <div class="menber">
            <table>
                <tr>
                    @if($team->team_menber1 == "")
                        <td><label for="team_menber1">メンバー1</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber1">メンバー1</label></td>                        
                        <td><input type="text" value="{{$team->team_menber1}}" name="team_menber1"></td>
                    @endif
                    
                </tr>
                <tr>
                    @if($team->team_menber2 == "")
                        <td><label for="team_menber2">メンバー2</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber2">メンバー2</label></td>
                        <td><input type="text" value="{{$team->team_menber2}}" name="team_menber2"></td>                        
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber3 == "")
                        <td><label for="team_menber3">メンバー3</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber3">メンバー3</label></td>
                        <td><input type="text" value="{{$team->team_menber3}}" name="team_menber3"></td>                        
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber4 == "")
                        <td><label for="team_menber4">メンバー4</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber4">メンバー4</label></td>
                        <td><input type="text" value="{{$team->team_menber4}}" name="team_menber4"></td>                        
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber5 == "")
                        <td><label for="team_menber5">メンバー5</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber5">メンバー5</label></td>
                        <td><input type="text" value="{{$team->team_menber5}}" name="team_menber5"></td>                        
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber6 == "")
                        <td><label for="team_menber6">メンバー6</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber6">メンバー6</label></td>                        
                        <td><input type="text" value="{{$team->team_menber6}}" name="team_menber6"></td>
                    @endif
                </tr>
            </table>
            </div>    
            <input type="submit" name="btn_submit" value="内容を更新する">
            @endforeach
        </form>
        </div>
    
</div>

<br>
<br>
<br>
<br>

@endsection