@extends('layouts.admin')
@section('title', 'チャット')

@section('content')
<div id="fh5co-contact">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h3>{{ $matched_user->profile->nickname }}({{ $matched_user->profile->age }})</h3>
			</div>
		</div>
	</div>
    	
	<div class="container">
	  <div class="row">
			<div class="col-md-10 col-md-push-1 animate-box">
				<div class="row">
          <div class="chat-container">
            <!-- タイトル -->
            <div class="chat-user">
              {{ $recieve->nickname }}
            </div>
      
            <div class="chat-contents scroll">  
              @foreach($messages as $key => $message)
              　<!--送信したメッセージを表示-->
                <div class="chat-right">
                  @if($message->send == Auth::user()->profile->id)
                    <div class="text">{{ $message->message }}</div>
                    <div class="right-date">{{ $message->created_at }}</div>
                  @endif
                </div>
              　
              　<!--受信したメッセージを表示-->
                <div class="chat-left">
                  @if($message->recieve == Auth::user()->profile->id)
                    <div class="text">{{ $message->message }}</div>
                    <div class="left-date">{{ $message->created_at }}</div>
                  @endif
                </div>
              @endforeach
            </div>  
          </div>
    
          <form action="{{ action('Admin\MatchController@chat') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
              <ul>
                @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
                @endforeach
              </ul>
            @endif
            {{ csrf_field() }}
            <textarea name="message" style="width:100%"></textarea>
            <input type="hidden" name="recieve" value="{{ $recieve->id }}">
            <button type="submit">送信</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
 
@endsection
