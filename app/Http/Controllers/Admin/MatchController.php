<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Profile;
use App\Swipe;
use App\Message;
use Carbon\Carbon;

class MatchController extends Controller
{
    //
    public function index() 
    {
      $matched_users = Swipe::matched_users(Auth::user()->profile->id);
                           
      return view('admin.match.index', ['matched_users' => $matched_users]);  
    }
    
    public function detail(Request $request) 
    {
      $matched_user = Profile::where('id', $request->id)->first();
      
      return view('admin.match.detail',  ['matched_user' => $matched_user]);  
    }
    
    public function show(Request $request) 
    {
      //自分がマッチした相手との、送・受信のmessageを取得する
      
      //自分のidを取得
      $send = Auth::user()->profile->id;
      
      //requestから来たidを$recieveへ代入する(chat画面でのMessage Modelのrecieveに保存する為)
      $recieve = $request->id;
      
      //自分がマッチした相手を取得する
      // $query = Swipe::query();
      // $query->Swipe::where('to_user_id', $recieve);
      // $query->Swipe::where('from_user_id' , Auth::user()->profile->id);
      // $query->Swipe::where('is_like', true);
      // $query->with('profile');
      // $matched_user = $query->first();
      
      $matched_user = Swipe::where('to_user_id', $recieve)
               ->where('from_user_id' , Auth::user()->profile->id)
               ->where('is_like', true)
               ->with('profile')
               ->first();

      // 送信 / 受信のメッセージを取得する
      $query = Message::where('send' , $send)->where('recieve' , $recieve);

      $query->orWhere(function($query) use($send , $recieve){
          $query->where('send' , $recieve);
          $query->where('recieve' , $send);
      });
      
      $messages = $query->get();
      
 
      return view('admin.match.chat', ['messages' => $messages, 'recieve' => $request, 'matched_user' => $matched_user]);
    }
    
    public function chat(Request $request) 
    {
      $this->validate($request, Message::$rules);
      // リクエストパラメータ取得
      $massages = new Message;
      
      $massages_form = [
          'send' => Auth::user()->profile->id,
          'recieve' => $request->recieve,
          'message' => $request->message,
      ];

      $massages->fill($massages_form);
      $massages->save();
      
      return redirect('admin/match/chat?id=' . $request->recieve);    
    }
}      
