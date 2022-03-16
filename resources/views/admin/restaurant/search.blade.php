@extends('layouts.admin')
@section('title', 'お店を探す')

@section('content')
<div id="fh5co-contact">
  <div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
			  <form action="{{ action('Admin\RestaurantController@search') }}" method="post" enctype="multipart/form-data">
  			  @csrf
  			  <h3>お店を探す</h3>
  				<div class="form-group search">
            <input type="text" placeholder="例)名古屋駅 焼肉" class="form-control" name="keyword" value="{{ old('nickname') }}">
            <button class="btnn btn-primary" type="submit">検索</button>
          </div>  
        </form>
      </div>
      
      <div id="fh5co-portfolio">
    		<div class="container">
    			<div class="row animate-box">
    				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
    					<h3>検索結果</h3>
    				</div>
    			</div>
    			<div class="row">
    			  @if(!empty($restaurants['results_returned']))
            @for ($i = 0; $i < $restaurants['results_returned']; $i++)
    				<div class="col-md-4">
    					<div class="fh5co-portfolio animate-box">
    						<a href="{{ $restaurants['shop'][$i]['urls']['pc'] }}">
    							<div class="portfolio-entry" style="background-image: url({{ $restaurants['shop'][$i]['photo']['pc']['l'],$restaurants['shop'][$i]['photo']['mobile']['l'] }});"></div>
    							<div class="portfolio-text">
    								<h3 class="shop-name">{{ $restaurants['shop'][$i]['name'] }}</h3>
    							</div> 
    						</a>
    					</div>
    				</div>
    				@endfor
    				@endif
    				
      
      
      
      <table border="1">
        <tr>
          <th>店舗名</th>
          <th>営業時間</th>
        </tr>
        @if(!empty($restaurants['results_returned']))
        @for ($i = 0; $i < $restaurants['results_returned']; $i++)
          <tr>
            <td><a href="{{ $restaurants['shop'][$i]['urls']['pc'] }}">{{ $restaurants['shop'][$i]['name'] }}</a></td>
            <td>{{ $restaurants['shop'][$i]['open'] }}</td>
          </tr>
        @endfor
        @endif
      </table>
@endsection