@extends('layouts.layout')

@section('content')

@auth



<div class="form">
@csrf

    @foreach($tasks as $task)
    {{ $task->time }}
        <div class="my_profile">
        <h2>MyProfile</h2>
        <form action="{{ route('taskadd') }}" method="POST">
        {{ csrf_field() }}
            <div class="profile">
                <label for="name">氏名</label>
                <input type="text" name="name" id="name" value="{{ $task->name }}">
                <br>
                <label for="class">部署</label>
                <input type="text" name="class" id="class" value="{{ $task->class }}">
                <br>
                <label for="workyears">勤続年数</label>
                    @if($task->workyears == 1)
                        1年目~2年目
                    @elseif($task->workyears == 2)
                        3年目~5年目
                    @elseif($task->workyears == 3)
                        6年目~8年目
                    @elseif($task->workyears == 4)
                        9年目~10年目
                    @elseif($task->workyears == 5)
                        11年目~
                    @else
                        選択されていません
                    @endif
            </div>
            <div class="task">
                <p>仕事内容</p>
                <textarea name="task" cols="70" rows="5">{{ $task->task }}</textarea>
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
                    {{ $task->ability1 }}
                    <br>
                    <label for="my_result2">2.成果への追求</label><br>
                    {{ $task->ability2 }}
                    <br>
                    <label for="my_result3">3.社内ルール・法令の把握と理解</label><br>
                    {{ $task->ability3 }}
                    <br>
                    <label for="my_result4">4.上司との報告・連絡・相談</label><br>
                    {{ $task->ability4 }}
                    <br>
                    <label for="my_result5">5.業務内容とのマッチング度</label><br>
                    {{ $task->ability5 }}
                    <br>
                </div>
            </div>

            <div class="report">
                <p>所見欄(思ったこと・感じたことを自由に記入して下さい)</p>
                <div class="report_box">
                    <label for="free">本人記入欄</label>
                    <textarea name="free" id="free" cols="50" rows="5">{{ $task->free }}</textarea>
                </div>
            </div>

            <!--<input type="submit" name="btn_submit" value="内容を確認する">
        </form>-->
    </div>
    
    <div class="chief_profile">
        <h2>ChiefProfile</h2>
        <!--<form action="{{ route('taskadd') }}" method="post">-->
            <div class="profile">
                <label for="chief_name">上司氏名</label>
                <input type="text" name="chief_name" id="chief_name" value="{{ $task->chief_name }}">
                <br>
                <label for="chief_class">部署</label>
                <input type="text" name="chief_class" id="chief_class" value="{{ $task->chief_class }}">
                <br>
                <label for="chief_workyears">勤続年数</label>
                    @if($task->chief_workyears == 1)
                        1年目~2年目
                    @elseif($task->chief_workyears == 2)
                        3年目~5年目
                    @elseif($task->chief_workyears == 3)
                        6年目~8年目
                    @elseif($task->chief_workyears == 4)
                        9年目~10年目
                    @elseif($task->chief_workyears == 5)
                        11年目~
                    @else
                        選択されていません
                    @endif
            </div>
            <div class="works">
                <p>仕事内容</p>
                <textarea name="works" cols="70" rows="5">入力の必要はありません</textarea>
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
                    {{ $task->chief_ability1 }}
                    <br>
                    <label for="chief_result">2.成果への追求</label><br>
                    {{ $task->chief_ability2 }}
                    <br>
                    <label for="chief_result">3.社内ルール・法令の把握と理解</label><br>
                    {{ $task->chief_ability3 }}
                    <br>
                    <label for="chief_result">4.上司との報告・連絡・相談</label><br>
                    {{ $task->chief_ability4 }}
                    <br>
                    <label for="chief_result">5.業務内容とのマッチング度</label><br>
                    {{ $task->chief_ability5 }}
                    <br>
                </div>
            </div>

            <div class="report">
                <p>所見欄(思ったこと・感じたことを自由に記入して下さい)</p>
                <div class="report_box">
                    <label for="chief_free">上司記入欄</label>
                    <textarea name="chief_free" id="chief_free" cols="50" rows="5">{{ $task->chief_free }}</textarea>
                </div>
            </div>

            <input type="submit" name="btn_submit" value="内容を確認する">
        </form>
    </div>
    @endforeach
</div>



<a href="career">戻る</a>


<br>
<br>
<br>
<br>

@endauth
@endsection