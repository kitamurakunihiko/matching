@extends('layouts.admin')
@section('title', '候補相手一覧')

@section('content')
<div id="fh5co-contact">
  @if (is_null($candidate_user))
    <p class="text-center">あなたの周りにユーザーはいません</p>
  @else
  	<div class="container">
  	　<div class="row animate-box">
  			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
  				<h3>{{ $candidate_user->nickname }}({{ $candidate_user->age }})</h3>
  			</div>
  		</div>
  	</div>

    <div class="container">
      <div class="row">
    		<div class="col-md-10 col-md-push-1 animate-box">
    			<div class="row">
  			    @if ($candidate_user->profile_images != NULL)
              @if (count($candidate_user->profile_images) == 1)
                <div>
                  @foreach ($candidate_user->profile_images as $index => $profile_image)
                  <a href="{{ action('Admin\CandidateController@detail') }}"><img src="{{ $profile_image->image_path }}" class="d-block w-100 home-img"></a>
                　<div class="tname"></div>
                　@endforeach
                </div>
              @else
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    @foreach ($candidate_user->profile_images as $index => $profile_image)
                    <div class="carousel-item {{ $index==0 ? "active" : "" }}">
                      <a href="{{ action('Admin\CandidateController@detail') }}"><img src="{{ $profile_image->image_path }}" class="d-block w-100 home-img"></a>
                    　<div class="tname"></div>
                    </div>
                    @endforeach
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>  
              @endif
            @endif
  			    
  			    <div class="container col-md-12 col-md-push-1">
    			    <div class="card-badge">
                <span class="badge rounded-pill bg-primary">{{ config('occupation')[$candidate_user->occupation] }}</span>
                <span class="badge rounded-pill bg-primary">{{ config('prefectures')[$candidate_user->prefectures] }}</span>
                <span class="badge rounded-pill bg-primary">{{ config('alcohol')[$candidate_user->alcohol] }}</span>
                <span class="badge rounded-pill bg-primary">{{ config('count')[$candidate_user->count] }}</span>
              </div>
            </div> 
            <br />
    
            <div class="tcontrols">
              <div class="container">
                <div class="row ">
                  <div class="col-md-6 mb-1">
                  　<form class="form_button" action="{{ action('Admin\CandidateController@swipe') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type='hidden' name='to_user_id' value='{{ $candidate_user->id }}'>
                      <input type='hidden' name='is_like' value='0'>
                      <button class="tno" type="submit">
                        <i class="fa fa-times" aria-hidden="true"></i>
                      </button>
                    </form>
                  </div>
                    
                  <div class="col-md-6 mb-1">
                    <form class="form_button" action="{{ action('Admin\CandidateController@swipe') }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <input type='hidden' name='to_user_id' value='{{ $candidate_user->id }}'>
                      <input type='hidden' name='is_like' value='1'>
                      <button class="tyes" type="submit">
                        <i class="fa fa-heart" aria-hidden="true"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endsection