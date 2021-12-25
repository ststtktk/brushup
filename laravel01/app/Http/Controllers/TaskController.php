<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Task;

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
            Public function timeview()
            {
                $userid = auth()->id();

                $times = Task::where('user_id',$userid)->orderBy('created_at','desc')->get();
                return view('tasks.career',[
                    'times' => $times,
                ]);
            }

            /**
             * ドロップダウンリストの絞り込み
             * 
             */
            Public function show(Request $request)
            {
                $userid = auth()->id();

                $times = Task::where('user_id',$userid)->orderBy('created_at','desc')->get();

                $tasks = Task::where('user_id',$request->id)->where('time',$request->time)->get();
                //foreach($tasks as $task){
                return view('tasks.career',[
                    'times' =>$times,
                    'tasks' => $tasks,
                ]);
                //}
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
       
            //return redirect('tasks/career');
}