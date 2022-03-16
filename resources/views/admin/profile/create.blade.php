@extends('layouts.admin')
@section('title', 'プロフィールの新規作成')

@section('content')
<div id="fh5co-contact">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h3><strong>プロフィール新規作成</strong></h3>
			</div>
		</div>
	</div>
	<form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
    @if (count($errors) > 0)
      <ul>
        @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
        @endforeach
      </ul>
    @endif
		  <div class="row">
				<div class="col-md-10 col-md-push-1 animate-box">
					<div class="row">
						<div class="col-md-6">
							<label class="form-label">氏名(幹事)</label>
              <input type="text" placeholder="例)山田太郎" class="form-control" name="name" value="{{ old('name') }}">
						</div>
						
						<div class="col-md-6">
							<label class="form-label">グループ名(表示名)</label>
              <input type="text" placeholder="例)お肉大好き、港区女子" class="form-control" name="nickname" value="{{ old('nickname') }}">
						</div>
						
						<div class="col-md-6">
							<label for="zip" class="form-label">メンバーAge</label>
              <input type="text" placeholder="例)21~23歳" class="form-control" name="age" value="{{ old('age') }}">
						</div>
						
						<div class="col-md-6">
							<label class="form-label">性別</label>
              <select class="form-control" name="gender">
                @foreach(config('gender') as $gender => $name)
                  <option value="{{ $gender }}" {{ old('gender') === $gender ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
						</div>
						
						<div class="col-md-6">
							<label for="zip" class="form-label">職業(幹事)</label>
              <select class="form-control" name="occupation">
                @foreach(config('occupation') as $occupation => $name)
                  <option value="{{ $occupation }}" {{ old('occupation') === $occupation ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
						</div>
						
						<div class="col-md-6">
              <label class="form-label">都道府県</label>
              <select class="form-control" name="prefectures">
                @foreach(config('prefectures') as $prefectures => $name)
                  <option value="{{ $prefectures }}" {{ old('_prefectures') === $prefectures ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
            </div>
            
            
            <div class="col-md-6">
              <label class="form-label">お酒の強さ</label>
              <select class="form-control" name="alcohol">
                @foreach(config('alcohol') as $alcohol => $name)
                  <option value="{{ $alcohol }}" {{ old('_alcohol') === $alcohol ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
            </div>
            
            <div class="col-md-6">
              <label class="form-label">希望人数</label>
              <select class="form-control" name="count">
                @foreach(config('count') as $count => $name)
                  <option value="{{ $count }}" {{ old('count') === $count ? "selected" : ""}}>{{ $name }}</option>
                @endforeach
              </select>
            </div>
            
            <!--<div class="col-md-6">-->
            <!--  <label class="form-label">グループタイプ</label>-->
            <!--  <select class="form-control" name="mood">-->
            <!--    @foreach(config('occupation') as $count => $name)-->
            <!--      <option value="{{ $count }}" {{ old('count') === $count ? "selected" : ""}}>{{ $name }}</option>-->
            <!--    @endforeach-->
            <!--  </select>-->
            <!--</div>-->
            
            <!--<div class="col-md-6">-->
            <!--  <label class="form-label">ひとこと</label>-->
            <!--  <input type="text" class="form-control" name="word" value="{{ old('word') }}">-->
            <!--</div>-->
						
						<div class="col-md-12">
              <label class="form-label">グループ紹介欄</label>
              <textarea class="form-control" placeholder="" name="introduction" rows="20">{{ old('introduction') }}</textarea>
            </div>
            
            <div class="col">
              <label class="col-md-12">画像(※画像は当日参加者を投稿してね&#128248)</label>
              <div class="col-md-10">
                  <input type="file" class="form-control-file" value="{{ old('image.0') }}" name="image[]" accept="image/*" multiple="multiple">
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
    　　  　{{ csrf_field() }}
          <button class="w-100 btn btn-primary btn-lg" type="submit">作成</button>
				</div>
			</div>
  	</div>
  </form>
</div>

@endsection



