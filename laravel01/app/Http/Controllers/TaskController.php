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
          return redirect('tasks/login');
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
               'user_id'=>0,
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
           return redirect('tasks/login');
       }
}