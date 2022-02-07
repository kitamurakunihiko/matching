@extends('layouts.admin')
@section('title', 'マッチ一覧')

@section('content')
<div id="fh5co-contact">
  @if (count($matched_users) == 0)
    <p class="text-center">マッチしているユーザーがいません</p>
  @else
  <div class="container">
    <div class="row">
  		<div class="col-md-10 col-md-push-1 animate-box">
  			<div class="row">
			  @foreach($matched_users as $matched_user)
			    @if ($matched_user->profile->profile_images != NULL)
    			  @if (count($matched_user->profile->profile_images) == 1)
              @foreach ($matched_user->profile->profile_images as $index => $profile_image)
                <div>
                  <img src="{{ asset('storage/image/' . $profile_image->image_path) }}" class="rounded-circle">
                　<a href="#" class="stretched-link ml-3" style="font-size: 16px">
                　  {{ $matched_user->profile->nickname }}
                　</a>
                </div>
              @endforeach
            @else
            　<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  @foreach($matched_user->profile->profile_images as $index => $profile_image)
                    <div class="carousel-item {{ $index==0 ? "active" : "" }}">
                      <img src="{{ asset('storage/image/' . $profile_image->image_path) }}" class="rounded-circle">
                    　<a href="#" class="stretched-link ml-3" style="font-size: 16px">
                    　  {{ $matched_user->profile->nickname }}
                    　</a>
                    </div>
                  @endforeach
                </div>
              </div>
            @endif
          @endif
        @endforeach
      </div>
    </div>
  </div>
  @endif
</div>

@endsection