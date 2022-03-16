@extends('layouts.admin')
@section('title', 'プロフィールの編集')

@section('content')
<div id="fh5co-contact">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h3><strong>プロフィール編集</strong></h3>
				<br>
			</div>
		</div>
	</div>
	<form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    @endif
    
  	<div class="container">
		  <div class="row">
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="row">
						<div class="col-md-6">
							<label class="form-label">氏名(幹事)</label>
              <input type="text" class="form-control" name="name" placeholder="" value="{{ $profile->name }}">
						</div>
						
						<div class="col-md-6">
							<label class="form-label">グループ名(表示名)</label>
              <input type="text" class="form-control" name="nickname" placeholder="" value="{{ $profile->nickname }}">
						</div>
						
						<div class="col-md-6">
							<label for="zip" class="form-label">メンバーAge</label>
              <input type="text" class="form-control" name="age" value="{{ $profile->age }}">
						</div>
						
						<div class="col-md-6">
							<label class="form-label">性別</label>
              <select class="form-control" name="gender">
                <option value="">選択</option>
                <option value="1" selected @if($profile->age=="1") selected @endif>男</option>
                <option value="0" @if($profile->age=="0") selected @endif>女</option>
              </select>
						</div>
						
						<div class="col-md-6">
							<label for="zip" class="form-label">職業(幹事)</label>
              <select class="form-control" name="occupation">
                @foreach(config('occupation') as $occupation => $name)
                  <option value="{{ $occupation }}" @if($profile->occupation==$occupation) selected @endif {{ old('_occupation') === $occupation ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
						</div>
						
						<div class="col-md-6">
              <label class="form-label">都道府県</label>
              <select class="form-control" name="prefectures">
                @foreach(config('prefectures') as $prefectures => $name)
                @php echo $name; @endphp
                  <option value="{{ $prefectures }}" @if($profile->prefectures==$prefectures) selected @endif {{ old('_prefectures') === $prefectures ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
            </div>
            
            
            <div class="col-md-6">
              <label class="form-label">お酒の強さ</label>
              <select class="form-control" name="alcohol">
                @foreach(config('alcohol') as $alcohol => $name)
                  <option value="{{ $alcohol }}" @if($profile->alcohol==$alcohol) selected @endif {{ old('_alcohol') === $alcohol ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
            </div>
            
            <div class="col-md-6">
              <label class="form-label">希望人数</label>
              <select class="form-control" name="count">
                @foreach(config('count') as $count => $name)
                  <option value="{{ $count }}" @if($profile->count==$count) selected @endif {{ old('_count') === $count ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
            </div>
						
						<div class="col-md-12">
              <label class="form-label">グループ紹介欄</label>
              <textarea class="form-control" name="introduction" rows="20">{{ $profile->introduction }}</textarea>
            </div>
            
            <div class="col">
              <label class="col-md-12">画像(※画像は当日参加者を投稿してね&#128248)</label>
                <div class="form-text text-info">
                    @foreach ($profile->profile_images as $profile_image)
                    設定中画像:  {{ $profile_image->image_path }}<br>
                    @endforeach
                </div>
              <div class="col-md-10">
                  <input type="file" class="form-control-file" value="{{ $profile->image_path }}" name="image[]" accept="image/*" multiple="multiple">
              </div>
              <div class="col-md-10">
                  <input type="file" class="form-control-file" value="{{ old('image.1') }}" name="image[]" accept="image/*" multiple="multiple">
              </div>
              <div class="col-md-10">
                  <input type="file" class="form-control-file" value="{{ old('image.2') }}" name="image[]" accept="image/*" multiple="multiple">
              </div>
              <div class="col-md-10">
                  <input type="file" class="form-control-file" value="{{ old('image.3') }}" name="image[]" accept="image/*" multiple="multiple">
              </div>
              <div class="col-md-10">
                  <input type="file" class="form-control-file" value="{{ old('image.4') }}" name="image[]" accept="image/*" multiple="multiple">
              </div>
            </div>
          </div>
          
          <hr class="my-4">
          <div align="center">
              <input type="hidden" name="id" value="{{ $profile->id }}">
              {{ csrf_field() }}
              <input type="submit" class="w-100 btn btn-primary btn-lg" value="更新">
          </div>
        </div>
			</div>
  	</div>
  </form>
</div>

@endsection



