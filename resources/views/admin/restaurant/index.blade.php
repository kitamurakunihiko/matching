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
            <input type="text" placeholder="例)名古屋駅 焼肉" class="form-control" name="keyword" value="{{ old('keyword') }}">
            <button class="btnn btn-primary" type="submit">検索</button>
          </div>  
        </form>
      </div>
    </div>
  </div>
</div>
@endsection