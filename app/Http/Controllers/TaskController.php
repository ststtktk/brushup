<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Task;
use App\Models\Team;

class TaskController extends Controller
{
    /**
     * 新規登録
     * 
     * 
     */
     Public function useradd(Request $request)
     {
         $this->validate($request,[
             'name'=>'required|max:120',
             'email'=>'required',
             'password'=>'required'
         ]);
         User::create([
             'user_id'=>0,
             'name'=>$request->name,
             'email'=>$request->email,
             'password'=>$request->password,
          ]);
          return redirect('home');
     }

     /**
      * ログアウト
      */
      Public function logout()
      {
          Auth::logout();
          return redirect('/');
      }

      /**
       * タスク作成
       * 
       */
       Public function taskadd(Request $request)
       {
           Task::create([
               'user_id'=>$request->user_id,
               'time'=>$request->time,
               'name'=>$request->name,
               'class'=>$request->class,
               'workyears'=>$request->workyears,
               'task'=>$request->task,
               'chief_name'=>$request->chief_name,
               'chief_class'=>$request->chief_class,
               'chief_workyears'=>$request->chief_workyears,
               'ability1'=>$request->ability1,
               'ability2'=>$request->ability2,
               'ability3'=>$request->ability3,
               'ability4'=>$request->ability4,
               'ability5'=>$request->ability5,
               'chief_ability1'=>$request->chief_ability1,
               'chief_ability2'=>$request->chief_ability2,
               'chief_ability3'=>$request->chief_ability3,
               'chief_ability4'=>$request->chief_ability4,
               'chief_ability5'=>$request->chief_ability5,
               'free'=>$request->free,
               'chief_free'=>$request->chief_free
           ]);
           return redirect('home');
       }

        /**
        * 作成月の表示
        */
        Public function timeview(Request $request)
        {
            $userid = auth()->id();
            $teammail = $request->email;
            $tasks = Task::where('user_id',$userid)->orderBy('created_at','desc')->get();
            dd(Team::where('email_menber1',$teammail));
            $teams = Team::where('email_menber1',$teammail)->orwhere('email_menber2',$teammail)->orwhere('email_menber3',$teammail)->orwhere('email_menber4',$teammail)->orwhere('email_menber5',$teammail)->orwhere('email_menber6',$teammail)->get();
            return view('tasks.career',[
                'tasks' => $tasks,
                'teams' => $teams,
            ]);
        }
        
        /**
         * メンバー作成月表示
         */
        Public function menbercreate(Request $request)
        {
            $userid = auth()->id();
            $teammail = $request->email;
            $teamview = $request->user_id;
            $tasks = Task::where('user_id',$userid)->orderBy('created_at','desc')->get();
            $teams = Team::where('email_menber1',$teammail)->orwhere('email_menber2',$teammail)->orwhere('email_menber3',$teammail)->orwhere('email_menber4',$teammail)->orwhere('email_menber5',$teammail)->orwhere('email_menber6',$teammail)->get();
            $times = Task::where('user_id',$teamview)->orderBy('created_at','desc')->get();
            return view('tasks.career',[
                'teams' => $teams,
                'tasks' => $tasks,
                'times' => $times,
            ]);
        }

        /**
         * ドロップダウンリストの絞り込み
         * 
         */
        Public function show(Request $request)
        {
            $userid = $request->id;
            $teammail = $request->email;
            $times = Task::where('user_id',$request->id)->where('time',$request->time)->get();
            $teams = Team::where('email_menber1',$teammail)->orwhere('email_menber2',$teammail)->orwhere('email_menber3',$teammail)->orwhere('email_menber4',$teammail)->orwhere('email_menber5',$teammail)->orwhere('email_menber6',$teammail)->get();
            $tasks = Task::where('user_id',$userid)->orderBy('created_at','asc')->get();
            return view('tasks.career',[
                'times' =>$times,
                'tasks' => $tasks,
                'teams' => $teams,
            ]);
        }

        /**
         * タスク編集
         * 
         */
        Public function edit(Request $request)
        {
            $user_id = auth()->id();

            $times = $request->time;
            
            $task = Task::where('user_id',$request->id)->where('time',$request->time)->get();
            return view('tasks.edit',[
                'tasks'=>$task,
                'times'=>$times,
            ]);
        }
        
        /**
         * タスクアップデート
         */
        Public function update(Request $request)
        {
            Task::where('id',$request->id)
            ->update([
                'name'=>$request->name,
                'class'=>$request->class,
                'workyears'=>$request->workyears,
                'task'=>$request->task,
                'chief_name'=>$request->chief_name,
                'chief_class'=>$request->chief_class,
                'chief_workyears'=>$request->chief_workyears,
                'ability1'=>$request->ability1, 
                'ability2'=>$request->ability2,  
                'ability3'=>$request->ability3,  
                'ability4'=>$request->ability4,  
                'ability5'=>$request->ability5,
                'chief_ability1'=>$request->chief_ability1,
                'chief_ability2'=>$request->chief_ability2,
                'chief_ability3'=>$request->chief_ability3,
                'chief_ability4'=>$request->chief_ability4,
                'chief_ability5'=>$request->chief_ability5,
                'free'=>$request->free,
                'chief_free'=>$request->chief_free,          
            ]);
            $userid = auth()->id();
            $teammail = $request->email;
            $tasks = Task::where('user_id',$userid)->orderBy('created_at','desc')->get();
            $teams = Team::where('email_menber1',$teammail)->orwhere('email_menber2',$teammail)->orwhere('email_menber3',$teammail)->orwhere('email_menber4',$teammail)->orwhere('email_menber5',$teammail)->orwhere('email_menber6',$teammail)->get();
            return view('tasks.career',[
                'tasks' => $tasks,
                'teams' => $teams,
            ]);
        }

        /**
         * タスク削除
         * 
         */
        Public function destroy(Request $request)
        {
            Task::where('id',$request->id)
            ->delete();
            $userid = auth()->id();
            $teammail = $request->email;
            $tasks = Task::where('user_id',$userid)->orderBy('created_at','desc')->get();
            $teams = Team::where('email_menber1',$teammail)->orwhere('email_menber2',$teammail)->orwhere('email_menber3',$teammail)->orwhere('email_menber4',$teammail)->orwhere('email_menber5',$teammail)->orwhere('email_menber6',$teammail)->get();
            return view('tasks.career',[
                'tasks' => $tasks,
                'teams' => $teams,
            ]);
        }

        /**
         * メンバー登録画面
         * 
         */
        Public function team()
        {
            $userid = auth()->id();
            $teams = Team::where('user_id',$userid)->get();
            return view('tasks.team',[
                'teams' => $teams,
            ]);
        }

        /**
         * メンバー追加
         */
        Public function menberadd(Request $request)
        {
            Team::create([
                'user_id'=>$request->user_id,
                'main_name'=>$request->main_name,
                'team_menber1'=>$request->team_menber1,
                'email_menber1'=>$request->email_menber1,
                'team_menber2'=>$request->team_menber2,
                'email_menber2'=>$request->email_menber2,
                'team_menber3'=>$request->team_menber3,
                'email_menber3'=>$request->email_menber3,
                'team_menber4'=>$request->team_menber4,
                'email_menber4'=>$request->email_menber4,
                'team_menber5'=>$request->team_menber5,
                'email_menber5'=>$request->email_menber5,
                'team_menber6'=>$request->team_menber6,
                'email_menber6'=>$request->email_menber6,
            ]);
            return redirect('team');
        }

        /**
         * メンバー変更
         */
        Public function upload(Request $request)
        {
            Team::where('id',$request->id)
            ->update([
                'team_menber1'=>$request->team_menber1,
                'email_menber1'=>$request->email_menber1,
                'team_menber2'=>$request->team_menber2,
                'email_menber2'=>$request->email_menber2,
                'team_menber3'=>$request->team_menber3,
                'email_menber3'=>$request->email_menber3,
                'team_menber4'=>$request->team_menber4,
                'email_menber4'=>$request->email_menber4,
                'team_menber5'=>$request->team_menber5,
                'email_menber5'=>$request->email_menber5,
                'team_menber6'=>$request->team_menber6,
                'email_menber6'=>$request->email_menber6,
            ]);
            return redirect('team');
        }
}