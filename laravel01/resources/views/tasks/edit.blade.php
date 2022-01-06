@extends('layouts.layout')

@section('content')

@auth


@foreach($tasks as $task)
<p class="createday">作成日:{{ $task->time }}</p>
<div class="form">
@csrf
        <div class="my_profile">
        <h2>MyProfile</h2>
        <form action="{{ route('update',['task'=>$task->id]) }}" method="POST">
        {{ csrf_field() }}
            <div class="profile">
                <label for="id"></label>
                <input type="hidden" name="id" id="id" value="{{ $task->id }}">
                <label for="name">氏名</label>
                <input type="text" name="name" id="name" value="{{ $task->name }}">
                <br>
                <label for="class">部署</label>
                <input type="text" name="class" id="class" value="{{ $task->class }}">
                <br>
                <label for="workyears">勤続年数</label>
                    @if($task->workyears == 1)
                    <select name="workyears" id="workyears">
                    <option value="">選択してください</option>
                    <option value="1" selected>1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @elseif($task->workyears == 2)
                    <select name="workyears" id="workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2" selected>3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @elseif($task->workyears == 3)
                    <select name="workyears" id="workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3" selected>6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @elseif($task->workyears == 4)
                    <select name="workyears" id="workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4" selected>9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @elseif($task->workyears == 5)
                    <select name="workyears" id="workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5" selected>11年目~</option>
                    </select>
                    @else
                    <select name="workyears" id="workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @endif
            </div>
            <div class="task">
                <p>仕事内容</p>
                <textarea name="task" cols="50" rows="5">{{ $task->task }}</textarea>
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
                        @if($task->ability1 === 'A')
                        <input type="radio" name="ability1" id="ability1" value="A" checked>A
                        <input type="radio" name="ability1" id="ability1" value="B">B
                        <input type="radio" name="ability1" id="ability1" value="C">C
                        <input type="radio" name="ability1" id="ability1" value="D">D
                        <input type="radio" name="ability1" id="ability1" value="E">E
                        <br>
                        @elseif($task->ability1 === 'B')
                        <input type="radio" name="ability1" id="ability1" value="A">A
                        <input type="radio" name="ability1" id="ability1" value="B" checked>B
                        <input type="radio" name="ability1" id="ability1" value="C">C
                        <input type="radio" name="ability1" id="ability1" value="D">D
                        <input type="radio" name="ability1" id="ability1" value="E">E
                        <br>
                        @elseif($task->ability1 === 'C')
                        <input type="radio" name="ability1" id="ability1" value="A">A
                        <input type="radio" name="ability1" id="ability1" value="B">B
                        <input type="radio" name="ability1" id="ability1" value="C" checked>C
                        <input type="radio" name="ability1" id="ability1" value="D">D
                        <input type="radio" name="ability1" id="ability1" value="E">E
                        <br>
                        @elseif($task->ability1 === 'D')
                        <input type="radio" name="ability1" id="ability1" value="A">A
                        <input type="radio" name="ability1" id="ability1" value="B">B
                        <input type="radio" name="ability1" id="ability1" value="C">C
                        <input type="radio" name="ability1" id="ability1" value="D" checked>D
                        <input type="radio" name="ability1" id="ability1" value="E">E
                        <br>
                        @elseif($task->ability1 === 'E')
                        <input type="radio" name="ability1" id="ability1" value="A">A
                        <input type="radio" name="ability1" id="ability1" value="B">B
                        <input type="radio" name="ability1" id="ability1" value="C">C
                        <input type="radio" name="ability1" id="ability1" value="D">D
                        <input type="radio" name="ability1" id="ability1" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="ability1" id="ability1" value="A">A
                        <input type="radio" name="ability1" id="ability1" value="B">B
                        <input type="radio" name="ability1" id="ability1" value="C">C
                        <input type="radio" name="ability1" id="ability1" value="D">D
                        <input type="radio" name="ability1" id="ability1" value="E">E
                        <br>
                        @endif
                    <label for="my_result2">2.成果への追求</label><br>
                        @if($task->ability2 === 'A')
                        <input type="radio" name="ability2" id="ability2" value="A" checked>A
                        <input type="radio" name="ability2" id="ability2" value="B">B
                        <input type="radio" name="ability2" id="ability2" value="C">C
                        <input type="radio" name="ability2" id="ability2" value="D">D
                        <input type="radio" name="ability2" id="ability2" value="E">E
                        <br>
                        @elseif($task->ability2 === 'B')
                        <input type="radio" name="ability2" id="ability2" value="A">A
                        <input type="radio" name="ability2" id="ability2" value="B" checked>B
                        <input type="radio" name="ability2" id="ability2" value="C">C
                        <input type="radio" name="ability2" id="ability2" value="D">D
                        <input type="radio" name="ability2" id="ability2" value="E">E
                        <br>
                        @elseif($task->ability2 === 'C')
                        <input type="radio" name="ability2" id="ability2" value="A">A
                        <input type="radio" name="ability2" id="ability2" value="B">B
                        <input type="radio" name="ability2" id="ability2" value="C" checked>C
                        <input type="radio" name="ability2" id="ability2" value="D">D
                        <input type="radio" name="ability2" id="ability2" value="E">E
                        <br>
                        @elseif($task->ability2 === 'D')
                        <input type="radio" name="ability2" id="ability2" value="A">A
                        <input type="radio" name="ability2" id="ability2" value="B">B
                        <input type="radio" name="ability2" id="ability2" value="C">C
                        <input type="radio" name="ability2" id="ability2" value="D" checked>D
                        <input type="radio" name="ability2" id="ability2" value="E">E
                        <br>
                        @elseif($task->ability2 === 'E')
                        <input type="radio" name="ability2" id="ability2" value="A">A
                        <input type="radio" name="ability2" id="ability2" value="B">B
                        <input type="radio" name="ability2" id="ability2" value="C">C
                        <input type="radio" name="ability2" id="ability2" value="D">D
                        <input type="radio" name="ability2" id="ability2" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="ability2" id="ability2" value="A">A
                        <input type="radio" name="ability2" id="ability2" value="B">B
                        <input type="radio" name="ability2" id="ability2" value="C">C
                        <input type="radio" name="ability2" id="ability2" value="D">D
                        <input type="radio" name="ability2" id="ability2" value="E">E
                        <br>
                        @endif
                    <label for="my_result3">3.社内ルール・法令の把握と理解</label><br>
                        @if($task->ability3 === 'A')
                        <input type="radio" name="ability3" id="ability3" value="A" checked>A
                        <input type="radio" name="ability3" id="ability3" value="B">B
                        <input type="radio" name="ability3" id="ability3" value="C">C
                        <input type="radio" name="ability3" id="ability3" value="D">D
                        <input type="radio" name="ability3" id="ability3" value="E">E
                        <br>
                        @elseif($task->ability3 === 'B')
                        <input type="radio" name="ability3" id="ability3" value="A">A
                        <input type="radio" name="ability3" id="ability3" value="B" checked>B
                        <input type="radio" name="ability3" id="ability3" value="C">C
                        <input type="radio" name="ability3" id="ability3" value="D">D
                        <input type="radio" name="ability3" id="ability3" value="E">E
                        <br>
                        @elseif($task->ability3 === 'C')
                        <input type="radio" name="ability3" id="ability3" value="A">A
                        <input type="radio" name="ability3" id="ability3" value="B">B
                        <input type="radio" name="ability3" id="ability3" value="C" checked>C
                        <input type="radio" name="ability3" id="ability3" value="D">D
                        <input type="radio" name="ability3" id="ability3" value="E">E
                        <br>
                        @elseif($task->ability3 === 'D')
                        <input type="radio" name="ability3" id="ability3" value="A">A
                        <input type="radio" name="ability3" id="ability3" value="B">B
                        <input type="radio" name="ability3" id="ability3" value="C">C
                        <input type="radio" name="ability3" id="ability3" value="D" checked>D
                        <input type="radio" name="ability3" id="ability3" value="E">E
                        <br>
                        @elseif($task->ability3 === 'E')
                        <input type="radio" name="ability3" id="ability3" value="A">A
                        <input type="radio" name="ability3" id="ability3" value="B">B
                        <input type="radio" name="ability3" id="ability3" value="C">C
                        <input type="radio" name="ability3" id="ability3" value="D">D
                        <input type="radio" name="ability3" id="ability3" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="ability3" id="ability3" value="A">A
                        <input type="radio" name="ability3" id="ability3" value="B">B
                        <input type="radio" name="ability3" id="ability3" value="C">C
                        <input type="radio" name="ability3" id="ability3" value="D">D
                        <input type="radio" name="ability3" id="ability3" value="E">E
                        <br>
                        @endif  
                    <label for="my_result4">4.上司との報告・連絡・相談</label><br>
                        @if($task->ability4 === 'A')
                        <input type="radio" name="ability4" id="ability4" value="A" checked>A
                        <input type="radio" name="ability4" id="ability4" value="B">B
                        <input type="radio" name="ability4" id="ability4" value="C">C
                        <input type="radio" name="ability4" id="ability4" value="D">D
                        <input type="radio" name="ability4" id="ability4" value="E">E
                        <br>
                        @elseif($task->ability4 === 'B')
                        <input type="radio" name="ability4" id="ability4" value="A">A
                        <input type="radio" name="ability4" id="ability4" value="B" checked>B
                        <input type="radio" name="ability4" id="ability4" value="C">C
                        <input type="radio" name="ability4" id="ability4" value="D">D
                        <input type="radio" name="ability4" id="ability4" value="E">E
                        <br>
                        @elseif($task->ability4 === 'C')
                        <input type="radio" name="ability4" id="ability4" value="A">A
                        <input type="radio" name="ability4" id="ability4" value="B">B
                        <input type="radio" name="ability4" id="ability4" value="C" checked>C
                        <input type="radio" name="ability4" id="ability4" value="D">D
                        <input type="radio" name="ability4" id="ability4" value="E">E
                        <br>
                        @elseif($task->ability4 === 'D')
                        <input type="radio" name="ability4" id="ability4" value="A">A
                        <input type="radio" name="ability4" id="ability4" value="B">B
                        <input type="radio" name="ability4" id="ability4" value="C">C
                        <input type="radio" name="ability4" id="ability4" value="D" checked>D
                        <input type="radio" name="ability4" id="ability4" value="E">E
                        <br>
                        @elseif($task->ability4 === 'E')
                        <input type="radio" name="ability4" id="ability4" value="A">A
                        <input type="radio" name="ability4" id="ability4" value="B">B
                        <input type="radio" name="ability4" id="ability4" value="C">C
                        <input type="radio" name="ability4" id="ability4" value="D">D
                        <input type="radio" name="ability4" id="ability4" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="ability4" id="ability4" value="A">A
                        <input type="radio" name="ability4" id="ability4" value="B">B
                        <input type="radio" name="ability4" id="ability4" value="C">C
                        <input type="radio" name="ability4" id="ability4" value="D">D
                        <input type="radio" name="ability4" id="ability4" value="E">E
                        <br>
                        @endif
                    <label for="my_result5">5.業務内容とのマッチング度</label><br>
                        @if($task->ability5 === 'A')
                        <input type="radio" name="ability5" id="ability5" value="A" checked>A
                        <input type="radio" name="ability5" id="ability5" value="B">B
                        <input type="radio" name="ability5" id="ability5" value="C">C
                        <input type="radio" name="ability5" id="ability5" value="D">D
                        <input type="radio" name="ability5" id="ability5" value="E">E
                        <br>
                        @elseif($task->ability5 === 'B')
                        <input type="radio" name="ability5" id="ability5" value="A">A
                        <input type="radio" name="ability5" id="ability5" value="B" checked>B
                        <input type="radio" name="ability5" id="ability5" value="C">C
                        <input type="radio" name="ability5" id="ability5" value="D">D
                        <input type="radio" name="ability5" id="ability5" value="E">E
                        <br>
                        @elseif($task->ability5 === 'C')
                        <input type="radio" name="ability5" id="ability5" value="A">A
                        <input type="radio" name="ability5" id="ability5" value="B">B
                        <input type="radio" name="ability5" id="ability5" value="C" checked>C
                        <input type="radio" name="ability5" id="ability5" value="D">D
                        <input type="radio" name="ability5" id="ability5" value="E">E
                        <br>
                        @elseif($task->ability5 === 'D')
                        <input type="radio" name="ability5" id="ability5" value="A">A
                        <input type="radio" name="ability5" id="ability5" value="B">B
                        <input type="radio" name="ability5" id="ability5" value="C">C
                        <input type="radio" name="ability5" id="ability5" value="D" checked>D
                        <input type="radio" name="ability5" id="ability5" value="E">E
                        <br>
                        @elseif($task->ability5 === 'E')
                        <input type="radio" name="ability5" id="ability5" value="A">A
                        <input type="radio" name="ability5" id="ability5" value="B">B
                        <input type="radio" name="ability5" id="ability5" value="C">C
                        <input type="radio" name="ability5" id="ability5" value="D">D
                        <input type="radio" name="ability5" id="ability5" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="ability5" id="ability5" value="A">A
                        <input type="radio" name="ability5" id="ability5" value="B">B
                        <input type="radio" name="ability5" id="ability5" value="C">C
                        <input type="radio" name="ability5" id="ability5" value="D">D
                        <input type="radio" name="ability5" id="ability5" value="E">E
                        <br>
                        @endif
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
                    <select name="chief_workyears" id="chief_workyears">
                    <option value="">選択してください</option>
                    <option value="1" selected>1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @elseif($task->chief_workyears == 2)
                    <select name="chief_workyears" id="chief_workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2" selected>3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @elseif($task->chief_workyears == 3)
                    <select name="chief_workyears" id="chief_workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3" selected>6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @elseif($task->chief_workyears == 4)
                    <select name="chief_workyears" id="chief_workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4" selected>9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @elseif($task->chief_workyears == 5)
                    <select name="chief_workyears" id="chief_workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5" selected>11年目~</option>
                    </select>
                    @else
                    <select name="chief_workyears" id="chief_workyears">
                    <option value="">選択してください</option>
                    <option value="1">1年目~2年目</option>
                    <option value="2">3年目~5年目</option>
                    <option value="3">6年目~8年目</option>
                    <option value="4">9年目~10年目</option>
                    <option value="5">11年目~</option>
                    </select>
                    @endif
            </div>
            <div class="task">
                <p>仕事内容</p>
                <textarea name="task" cols="50" rows="5">入力の必要はありません</textarea>
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
                    @if($task->chief_ability1 === 'A')
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="A" checked>A
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="B">B
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="C">C
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="D">D
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="E">E
                        <br>
                        @elseif($task->chief_ability1 === 'B')
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="A">A
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="B" checked>B
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="C">C
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="D">D
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="E">E
                        <br>
                        @elseif($task->chief_ability1 === 'C')
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="A">A
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="B">B
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="C" checked>C
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="D">D
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="E">E
                        <br>
                        @elseif($task->chief_ability1 === 'D')
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="A">A
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="B">B
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="C">C
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="D" checked>D
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="E">E
                        <br>
                        @elseif($task->chief_ability1 === 'E')
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="A">A
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="B">B
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="C">C
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="D">D
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="A">A
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="B">B
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="C">C
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="D">D
                        <input type="radio" name="chief_ability1" id="chief_ability1" value="E">E
                        <br>
                        @endif
                    <label for="chief_result2">2.成果への追求</label><br>
                        @if($task->chief_ability2 === 'A')
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="A" checked>A
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="B">B
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="C">C
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="D">D
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="E">E
                        <br>
                        @elseif($task->chief_ability2 === 'B')
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="A">A
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="B" checked>B
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="C">C
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="D">D
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="E">E
                        <br>
                        @elseif($task->chief_ability2 === 'C')
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="A">A
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="B">B
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="C" checked>C
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="D">D
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="E">E
                        <br>
                        @elseif($task->chief_ability2 === 'D')
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="A">A
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="B">B
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="C">C
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="D" checked>D
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="E">E
                        <br>
                        @elseif($task->chief_ability2 === 'E')
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="A">A
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="B">B
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="C">C
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="D">D
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="A">A
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="B">B
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="C">C
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="D">D
                        <input type="radio" name="chief_ability2" id="chief_ability2" value="E">E
                        <br>
                        @endif
                    <label for="chief_result3">3.社内ルール・法令の把握と理解</label><br>
                        @if($task->chief_ability3 === 'A')
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="A" checked>A
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="B">B
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="C">C
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="D">D
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="E">E
                        <br>
                        @elseif($task->chief_ability3 === 'B')
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="A">A
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="B" checked>B
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="C">C
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="D">D
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="E">E
                        <br>
                        @elseif($task->chief_ability3 === 'C')
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="A">A
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="B">B
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="C" checked>C
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="D">D
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="E">E
                        <br>
                        @elseif($task->chief_ability3 === 'D')
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="A">A
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="B">B
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="C">C
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="D" checked>D
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="E">E
                        <br>
                        @elseif($task->chief_ability3 === 'E')
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="A">A
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="B">B
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="C">C
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="D">D
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="A">A
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="B">B
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="C">C
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="D">D
                        <input type="radio" name="chief_ability3" id="chief_ability3" value="E">E
                        <br>
                        @endif 
                    <label for="chief_result4">4.上司との報告・連絡・相談</label><br>
                        @if($task->chief_ability4 === 'A')
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="A" checked>A
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="B">B
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="C">C
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="D">D
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="E">E
                        <br>
                        @elseif($task->chief_ability4 === 'B')
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="A">A
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="B" checked>B
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="C">C
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="D">D
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="E">E
                        <br>
                        @elseif($task->chief_ability4 === 'C')
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="A">A
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="B">B
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="C" checked>C
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="D">D
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="E">E
                        <br>
                        @elseif($task->chief_ability4 === 'D')
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="A">A
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="B">B
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="C">C
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="D" checked>D
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="E">E
                        <br>
                        @elseif($task->chief_ability4 === 'E')
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="A">A
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="B">B
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="C">C
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="D">D
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="A">A
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="B">B
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="C">C
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="D">D
                        <input type="radio" name="chief_ability4" id="chief_ability4" value="E">E
                        <br>
                        @endif
                    <label for="chief_result5">5.業務内容とのマッチング度</label><br>
                        @if($task->chief_ability5 === 'A')
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="A" checked>A
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="B">B
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="C">C
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="D">D
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="E">E
                        <br>
                        @elseif($task->chief_ability5 === 'B')
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="A">A
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="B" checked>B
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="C">C
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="D">D
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="E">E
                        <br>
                        @elseif($task->chief_ability5 === 'C')
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="A">A
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="B">B
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="C" checked>C
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="D">D
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="E">E
                        <br>
                        @elseif($task->chief_ability5 === 'D')
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="A">A
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="B">B
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="C">C
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="D" checked>D
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="E">E
                        <br>
                        @elseif($task->chief_ability5 === 'E')
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="A">A
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="B">B
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="C">C
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="D">D
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="E" checked>E
                        <br>
                        @else
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="A">A
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="B">B
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="C">C
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="D">D
                        <input type="radio" name="chief_ability5" id="chief_ability5" value="E">E
                        <br>
                        @endif
                </div>
            </div>

            <div class="report">
                <p>所見欄(思ったこと・感じたことを自由に記入して下さい)</p>
                <div class="report_box">
                    <label for="chief_free">上司記入欄</label>
                    <textarea name="chief_free" id="chief_free" cols="50" rows="5">{{ $task->chief_free }}</textarea>
                </div>
            </div>

            <input type="submit" name="btn_submit" value="内容を更新する">
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