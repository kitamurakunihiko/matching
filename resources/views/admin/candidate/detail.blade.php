@extends('layouts.candidate_index')
@section('title', '相手候補詳細')

@section('content')
<div id="fh5co-contact">
    	<div class="container">
    		<div class="row animate-box">
    			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
    				<h3>{{ $profile->nickname }}</h3>
    			</div>
    		</div>
    	</div>
  <!--<div class="card, text-center" style="width:300px;">-->
  <div class="card, text-center">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <!--<div class="carousel-indicators">-->
      <!--  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-label="Slide 1"></button>-->
      <!--  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
      <!--  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
      <!--  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>-->
      <!--  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>-->
      <!--</div> -->
    
      <div class="carousel-inner">
        @if ($profile->profile_images != NULL)
            @foreach ($profile->profile_images as $profile_image)
                <div class="carousel-item active">
                  <img src="{{ asset('storage/image/' . $profile_image->image_path) }}" class="d-block w-100" alt="...">
                </div>
            @endforeach
        @endif
      </div>
    
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">前へ</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">次へ</span>
      </button>
    </div>
    <br />
    
    <div class="card-badge">
      <span class="badge rounded-pill bg-primary">{{ $profile->occupation }}</span>
      <span class="badge rounded-pill bg-primary">{{ $profile->prefectures }}</span>
      <span class="badge rounded-pill bg-primary">{{ $profile->alcohol }}</span>
      <span class="badge rounded-pill bg-primary">{{ $profile->count }}</span>
      <br>
    </div>
    <br />
  
    <div class="container">
  	  <div class="row">
  			<div class="col-md-10 col-md-push-1">
  				<div class="row">
            <label class="form-label text-center">グループ紹介欄</label>
            <div class="col-md-12">
              <textarea class="form-control" name="introduction" rows="12">{{ $profile->introduction }}</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection