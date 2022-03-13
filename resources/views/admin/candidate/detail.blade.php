@extends('layouts.admin')
@section('title', '候補相手詳細')

@section('content')
<div id="fh5co-contact">
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
                <img src="{{ $profile_image->image_path }}" class="d-block w-100 home-img" alt="...">
              　<div class="tname"></div>
              　@endforeach
              </div>
            @else
              <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  @foreach ($candidate_user->profile_images as $index => $profile_image)
                  <div class="carousel-item {{ $index==0 ? "active" : "" }}">
                    <img src="{{ $profile_image->image_path }}" class="d-block w-100 home-img" alt="...">
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
              <span class="badge rounded-pill bg-primary col">{{ config('occupation')[$candidate_user->occupation] }}</span>
              <span class="badge rounded-pill bg-primary col">{{ config('prefectures')[$candidate_user->prefectures] }}</span>
              <span class="badge rounded-pill bg-primary col">{{ config('alcohol')[$candidate_user->alcohol] }}</span>
              <span class="badge rounded-pill bg-primary col">{{ config('count')[$candidate_user->count] }}</span>
            </div>
          </div>
          <br />
          
          <div class="container">
            <div class="row">
          		<div class="col-md-10 col-md-push-1">
          			<div class="row">
                  <label class="form-label text-center">グループ紹介欄</label>
                  <div class="col-md-12">
                    <textarea class="form-control" name="introduction" rows="12" readonly>{{ $candidate_user->introduction }}</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
          
        
        
      </div>
    </div>
  </div>  

</div>
@endsection
      
              
      
  