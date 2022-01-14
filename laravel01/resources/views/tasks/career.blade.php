@extends('layouts.layout')

@section('content')

@auth

<div class="search">
    <form action="{{ route('show') }}" method="POST">
    @csrf
        <div class="loginname">
            <h2>ログインユーザー：<?php $user=Auth::User(); ?>{{ $user->name }}</h2>
            <input type="hidden" name="id" value="{{ $user->id }}">
            <input type="hidden" name="email" value="{{ $user->email }}">
        </div>
        <div class="title">
            <a href="home">ホーム画面</a>
        </div>
        <div class="time">
            <h3>自分のタスク</h3>
            <select name="time" id="">  
            @foreach($tasks as $task)
                <option name="time">{{ $task->time }}</option>
            @endforeach
            </select>
            <input type="submit" value="検索" name="search_btn">
        </div>
    </form>
    <br>
    <div class="teammenber">
        <h3>チームメンバー</h3>
        @foreach($teams as $team)
            <div class="loginname">
                <h3>{{ $team->main_name }}</h3>
            </div>
            <div class="time">
                <p>個人ID：{{ $team->user_id }}</p>
                @if(isset($_POST['search']))
                    <form action="{{ route('show') }}" method="post">
                    @csrf
                        @foreach($times as $time)
                        @if($time->user_id===$team->user_id)
                        <input type="radio" name="time" value="{{ $time->time }}" required>{{$time->time}}
                        <input type="hidden"  name="email" value="{{ $user->email }}">
                        <input type="hidden" name="id" value="{{ $team->user_id }}">
                        @endif
                        @endforeach
                        <input type="submit" value="検索" name="search_btn">
                    </form>
                    <form action="{{ route('menbercreate') }}" method="post">
                    @csrf
                        <input type="hidden" name="email" value="{{ $user->email }}">
                        <input type="hidden" name="user_id" value="{{ $team->user_id }}">
                        <input type="submit" value="{{ $team->main_name }}の作成月を表示" name="search">
                    </form>
                @else
                    <form action="{{ route('menbercreate') }}" method="post">
                    @csrf
                        <input type="hidden" name="email" value="{{ $user->email }}">
                        <input type="hidden" name="user_id" value="{{ $team->user_id }}">
                        <input type="submit" value="{{ $team->main_name }}の作成月を表示" name="search">
                    </form>
                @endif
            </div>
        @endforeach
    </div>
</div>
@if(isset($_POST['search_btn']))

@foreach($times as $task)
    <p class="createday">作成月:{{ $task->time }}</p>
    <p class="createday">作成者:{{ $task->name }}</p>
    <div class="form">
        <div class="my_profile">
            <h2>MyProfile</h2>
            {{ csrf_field() }}
            <div class="profile">
                <label for="name">氏名</label><br>
                {{ $task->name }}
                <br>
                <label for="class">部署</label><br>
                {{ $task->class }}
                <br>
                <label for="workyears">勤続年数</label><br>
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
                <label for="">仕事内容</label><br>
                {{ $task->task }}
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
                <p>所見欄</p>
                <div class="report_box">
                    {{ $task->free }}
                </div>
            </div>
        </div>
    
        <div class="chief_profile">
            <h2>ChiefProfile</h2>
            <!--<form action="{{ route('taskadd') }}" method="post">-->
            <div class="profile">
                <label for="chief_name">上司氏名</label><br>
                {{ $task->chief_name }}
                <br>
                <label for="chief_class">部署</label><br>
                {{ $task->chief_class }}
                <br>
                <label for="chief_workyears">勤続年数</label><br>
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
                <label for="">仕事内容</label><br>
                {{ $task->task }}
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
                <p>所見欄</p>
                <div class="report_box">
                    {{ $task->chief_free }}
                </div>
            </div>        
         
        </div> 
    </div>

    <div class="formbutton">
        <form action="{{ route('edit',['task'=>$task->id]) }}" method="POST" class="edit">
            @csrf
            <input type="hidden" name="id" value="{{ $task->user_id }}">
            <input type="hidden" name="time" value="{{ $task->time }}">    
            <input type="submit" value="編集する" name="btn_submit">
        </form>
        <form action="{{ route('tasks.destroy',['task'=>$task->id]) }}" method="POST" class="edit">
            @csrf
            <input type="hidden" value="{{ $task->id }}" name="id">
            <input type="hidden" value="{{ $user->email }}" name="email">    
            <input type="submit" value="削除する">
        </form>
    </div>

    <div class="table">
        <table border="1">     
            <tr>
                <th>名前</th>
                <th>作成年月</th>
                <th>1.仕事内容の理解と把握</th>
                <th>2.成果への追求</th>
                <th>3.社内ルール・法令の把握と理解</th>
                <th>4.上司との報告・連絡・相談</th>
                <th>5.業務内容とのマッチング度</th>
            </tr>
            @foreach($tasks as $task)  
            <tr align="center">
                <td width="10%">{{ $task->name }}</td>
                <td width="10%">{{ $task->time }}</td>
                <td width="15%">{{ $task->ability1 }}</td>
                <td width="15%">{{ $task->ability2 }}</td>
                <td width="15%">{{ $task->ability3 }}</td>
                <td width="15%">{{ $task->ability4 }}</td>
                <td width="15%">{{ $task->ability5 }}</td>
            </tr>
            <tr align="center">
                <td>{{ $task->chief_name }}</td>
                <td>{{ $task->time }}</td>
                <td>{{ $task->chief_ability1 }}</td>
                <td>{{ $task->chief_ability2 }}</td>
                <td>{{ $task->chief_ability3 }}</td>
                <td>{{ $task->chief_ability4 }}</td>
                <td>{{ $task->chief_ability5 }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
    <div class="chart">
        <div class="mychart">
            <canvas id="chart_cv"></canvas>
            <script type="text/javascript">
            
            //グラフを描写
            const a = 50;
            const ctx = document.getElementById('chart_cv');
            const chart_cv = new Chart(ctx,{
                type:'radar',
                data:{
                    labels:['1.仕事内容の理解と把握','2.成果への追求','3.社内ルール・法令の把握と理解','4.上司との報告・連絡・相談','5.業務内容とのマッチング度'],
                    datasets:[{
                        label:'自己評価',
                        data:[a,34,55,66,89],
                        backgroundColor:'rgba(0,0,0,0)',
                        borderWidth:5,
                        borderColor:'rgba(0,228,0,0.5)',
                    },{
                        label:'上司評価',
                        data:[53,67,34,88,36],
                        backgroundColor:'rgba(0,0,0,0)',
                        borderWidth:5,
                        borderColor:'rgba(200,0,0,0.5)',
                    }],
                },
                options: {
                    scale: {
                        ticks: {
                            // 最小値・最大値
                            min:0,
                            max:100,
                            borderColor:'rgba(100,100,100)',
                            fontSize:18,
                        },
                        pointLabels:{
                            fontSize:20,
                        }
                    },
                },
            });
            </script>
        </div>
        <div class="chiefchart">

        </div>
    </div>
@endforeach

@else
@endif
<br>
<br>
<br>
<br>
@endauth
@endsection