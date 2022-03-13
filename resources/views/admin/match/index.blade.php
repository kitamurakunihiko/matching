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
  			  <table class="table">
            <thead>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>chat</th>
              </tr>
            </thead>
            <tbody>
              @foreach($matched_users as $index => $matched_user)
              <tr>
                <th class="match-menu">
                  No,{{ $index+1  }}
                </th>
                <td class="match-menu">
                @if ($matched_user->profile->profile_images != NULL)
    			        @if (count($matched_user->profile->profile_images) == 1)
                    @foreach ($matched_user->profile->profile_images as $index => $profile_image)
                      <div>
                        <img src="{{ $profile_image->image_path }}" class="rounded-circle">
                      　<a href="{{ action('Admin\MatchController@detail', ['id' => $matched_user->profile->id]) }}" class="stretched-link ml-3" style="font-size: 16px">
                      　  {{ $matched_user->profile->nickname }}
                      　</a>
                      </div>
                    @endforeach
                  @else
                　<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      @foreach($matched_user->profile->profile_images as $index => $profile_image)
                        <div class="carousel-item {{ $index==0 ? "active" : "" }}">
                          <img src="{{ $profile_image->image_path }}" class="rounded-circle">
                        　<a href="{{ action('Admin\MatchController@detail', ['id' => $matched_user->profile->id]) }}" class="stretched-link ml-3" style="font-size: 16px">
                        　  {{ $matched_user->profile->nickname }}
                        　</a>
                        　@if ($index == 0)
                           @break
                          @endif  
                        </div>
                      @endforeach
                    </div>
                  </div>
                  @endif
                @endif
                </td>
                <td class="match-menu">
                  <a href="{{ action('Admin\MatchController@show', ['id' => $matched_user->profile->id]) }}">
                    <button type="button" class="btn btn-primary">Chatをする</button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>

@endsection