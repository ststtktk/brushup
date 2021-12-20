<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

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
          return redirect('tasks/access');
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
       * タスク入力
       * 
       */

       Public function taskadd(Request $request)
       {
           $this->validate($request,[
               
           ])
       }
}