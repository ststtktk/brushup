@extends('layouts.layout')

@section('content')

@auth

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

<label for="main_name">本人:{{ $user->name }}</label><br>
    
<div class="form">    
        <div class="teams">
        <h2>Team Menber</h2>
            @foreach($teams as $team)
            <p hidden>{{ $team->user_id }}</p>
            <div class="menber">
            <table>
                <tr>
                    @if($team->team_menber1 == "")
                        <td><label for="team_menber1">メンバー1</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber1">メンバー1</label></td>                        
                        <td>{{$team->team_menber1}}</td>
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber2 == "")
                        <td><label for="team_menber2">メンバー2</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber2">メンバー2</label></td>
                        <td>{{$team->team_menber2}}</td>                        
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber3 == "")
                        <td><label for="team_menber3">メンバー3</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber3">メンバー3</label></td>
                        <td>{{$team->team_menber3}}</td>                        
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber4 == "")
                        <td><label for="team_menber4">メンバー4</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber4">メンバー4</label></td>
                        <td>{{$team->team_menber4}}</td>                        
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber5 == "")
                        <td><label for="team_menber5">メンバー5</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber5">メンバー5</label></td>
                        <td>{{$team->team_menber5}}</td>                        
                    @endif
                </tr>
                <tr>
                    @if($team->team_menber6 == "")
                        <td><label for="team_menber6">メンバー6</label></td>
                        <td>メンバーがいません</td>
                    @else
                        <td><label for="team_menber6">メンバー6</label></td>                        
                        <td>{{$team->team_menber6}}</td>
                    @endif
                </tr>
            </table>
            </div>    
            
        

        <form action="{{ route('menber',['team'=>$team->user_id]) }}" method="POST">
        {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ $team->user_id }}">
            <input type="submit" value="編集する">
        </form>
        @endforeach
        </div>

</div>

<br>
<br>
<br>
<br>

@endauth
@endsection