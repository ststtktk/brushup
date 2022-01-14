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

<div class="form-brushup">
    <form action="{{ route('taskadd') }}" method="POST">
        {{ csrf_field() }}
    <div class="my_profile">
        <h2>MyProfile</h2>
        <div class="time">
            <label for="time">作成日</label>
            <input type="month" name="time">
        </div>
        <div class="profile">
            <input type="hidden" name="user_id" value="<?php $user = Auth::user(); ?>{{ $user->id }}">
            <label for="name">氏名</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
            <br>
            <label for="class">部署</label>
            <input type="text" name="class" id="class" value="">
            <br>
            <label for="workyears">勤続年数</label>
            <select name="workyears" id="workyears">
                <option value="">選択してください</option>
                <option value="1">1年目~2年目</option>
                <option value="2">3年目~5年目</option>
                <option value="3">6年目~8年目</option>
                <option value="4">9年目~10年目</option>
                <option value="5">11年目~</option>
            </select>
        </div>
        <div class="task">
            <p>仕事内容</p>
            <textarea name="task" cols="50" rows="5"></textarea>
        </div>
        <div class="result">
            <p>評価</p>
            <ul>
                <li>A:とてもできた(とても合っている)</li>
                <li>B:できた(合っている)</li>
                <li>C:どちらでもない</li>
                <li>D:できなかった(合っていない)</li>
                <li>E:全くできなかった(とても合っていない)</li>
            </ul>
            <div class="result_box">
                <p>自己評価</p>
                <label for="my_result1">1.仕事内容の理解と把握</label><br>
                <input type="radio" name="ability1" id="ability1" value="A">A
                <input type="radio" name="ability1" id="ability1" value="B">B
                <input type="radio" name="ability1" id="ability1" value="C">C
                <input type="radio" name="ability1" id="ability1" value="D">D
                <input type="radio" name="ability1" id="ability1" value="E">E
                <br>
                <label for="my_result2">2.成果への追求</label><br>
                <input type="radio" name="ability2" id="ability2" value="A">A
                <input type="radio" name="ability2" id="ability2" value="B">B
                <input type="radio" name="ability2" id="ability2" value="C">C
                <input type="radio" name="ability2" id="ability2" value="D">D
                <input type="radio" name="ability2" id="ability2" value="E">E 
                <br>
                <label for="my_result3">3.社内ルール・法令の把握と理解</label><br>
                <input type="radio" name="ability3" id="ability3" value="A">A
                <input type="radio" name="ability3" id="ability3" value="B">B
                <input type="radio" name="ability3" id="ability3" value="C">C
                <input type="radio" name="ability3" id="ability3" value="D">D
                <input type="radio" name="ability3" id="ability3" value="E">E
                <br>
                <label for="my_result4">4.上司との報告・連絡・相談</label><br>
                <input type="radio" name="ability4" id="ability4" value="A">A
                <input type="radio" name="ability4" id="ability4" value="B">B
                <input type="radio" name="ability4" id="ability4" value="C">C
                <input type="radio" name="ability4" id="ability4" value="D">D
                <input type="radio" name="ability4" id="ability4" value="E">E  
                <br>
                <label for="my_result5">5.業務内容とのマッチング度</label><br>
                <input type="radio" name="ability5" id="ability5" value="A">A
                <input type="radio" name="ability5" id="ability5" value="B">B
                <input type="radio" name="ability5" id="ability5" value="C">C
                <input type="radio" name="ability5" id="ability5" value="D">D
                <input type="radio" name="ability5" id="ability5" value="E">E 
                <br>
            </div>
        </div>
        <div class="report">
            <p>所見欄(思ったこと・感じたことを自由に記入して下さい)</p>
            <div class="report_box">
                <label for="free">本人記入欄</label>
                <textarea name="free" id="free" cols="50" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="chief_profile">
        <h2>ChiefProfile</h2>
        <div class="time">
            <label for="time">作成日</label>
        </div>
        <div class="profile">
            <label for="chief_name">上司氏名</label>
            <input type="text" name="chief_name" id="chief_name" value="">
            <br>
            <label for="chief_class">部署</label>
            <input type="text" name="chief_class" id="chief_class" value="">
            <br>
            <label for="chief_workyears">勤続年数</label>
            <select name="chief_workyears" id="chief_workyears">
                <option value="">選択してください</option>
                <option value="1">1年目~2年目</option>
                <option value="2">3年目~5年目</option>
                <option value="3">6年目~8年目</option>
                <option value="4">9年目~10年目</option>
                <option value="5">11年目~</option>
            </select>
        </div>
        <div class="task">
            <p>仕事内容</p>
            <textarea name="task" cols="50" rows="5" value="入力の必要はありません"></textarea>
        </div>
        <div class="result">
            <p>評価</p>
            <ul>
                <li>A:とてもできた(とても合っている)</li>
                <li>B:できた(合っている)</li>
                <li>C:どちらでもない</li>
                <li>D:できなかった(合っていない)</li>
                <li>E:全くできなかった(とても合っていない)</li>
            </ul>
            <div class="result_box">
                <p>上司評価</p>
                <label for="chief_result1">1.仕事内容の理解と把握</label><br>
                <input type="radio" name="chief_ability1" id="chief_ability1" value="A">A
                <input type="radio" name="chief_ability1" id="chief_ability1" value="B">B
                <input type="radio" name="chief_ability1" id="chief_ability1" value="C">C
                <input type="radio" name="chief_ability1" id="chief_ability1" value="D">D
                <input type="radio" name="chief_ability1" id="chief_ability1" value="E">E
                <br>
                <label for="chief_result">2.成果への追求</label><br>
                <input type="radio" name="chief_ability2" id="chief_ability2" value="A">A
                <input type="radio" name="chief_ability2" id="chief_ability2" value="B">B
                <input type="radio" name="chief_ability2" id="chief_ability2" value="C">C
                <input type="radio" name="chief_ability2" id="chief_ability2" value="D">D
                <input type="radio" name="chief_ability2" id="chief_ability2" value="E">E 
                <br>
                <label for="chief_result">3.社内ルール・法令の把握と理解</label><br>
                <input type="radio" name="chief_ability3" id="chief_ability3" value="A">A
                <input type="radio" name="chief_ability3" id="chief_ability3" value="B">B
                <input type="radio" name="chief_ability3" id="chief_ability3" value="C">C
                <input type="radio" name="chief_ability3" id="chief_ability3" value="D">D
                <input type="radio" name="chief_ability3" id="chief_ability3" value="E">E
                <br>
                <label for="chief_result">4.上司との報告・連絡・相談</label><br>
                <input type="radio" name="chief_ability4" id="chief_ability4" value="A">A
                <input type="radio" name="chief_ability4" id="chief_ability4" value="B">B
                <input type="radio" name="chief_ability4" id="chief_ability4" value="C">C
                <input type="radio" name="chief_ability4" id="chief_ability4" value="D">D
                <input type="radio" name="chief_ability4" id="chief_ability4" value="E">E  
                <br>
                <label for="chief_result">5.業務内容とのマッチング度</label><br>
                <input type="radio" name="chief_ability5" id="chief_ability5" value="A">A
                <input type="radio" name="chief_ability5" id="chief_ability5" value="B">B
                <input type="radio" name="chief_ability5" id="chief_ability5" value="C">C
                <input type="radio" name="chief_ability5" id="chief_ability5" value="D">D
                <input type="radio" name="chief_ability5" id="chief_ability5" value="E">E 
                <br>
            </div>
        </div>
        <div class="report">
            <p>所見欄(思ったこと・感じたことを自由に記入して下さい)</p>
            <div class="report_box">
                <label for="chief_free">上司記入欄</label>
                <textarea name="chief_free" id="chief_free" cols="50" rows="5"></textarea>
            </div>
        </div>
    </div>
        <input class="brushup" type="submit" name="btn_submit" value="送信する">
    </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection