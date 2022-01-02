@extends('layouts.admin1')
@section('title', 'プロフィールの新規作成')

@section('content')

  <div class="container">
    <div class="py-5 text-center">
      <h2>プロフィール新規作成</h2>
    </div>
    <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
      @if (count($errors) > 0)
        <ul>
            @foreach($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
      @endif
    
      <div class="row g-5">
        <div class="col-md-12 col-lg-12">
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label">代表者氏名</label>
                <input type="text" class="form-control" name="name" placeholder="" value="{{ old('name') }}">
              </div>
              
              <div class="col-sm-6">
                <label class="form-label">表示名</label>
                  <input type="text" class="form-control" name="nickname" placeholder="" value="{{ old('nickname') }}">
              </div>
              
              <div class="col-sm-12">
                <label for="zip" class="form-label">平均年齢</label>
                <input type="text" class="form-control" name="age" value="{{ old('age') }}">
              </div>
              
              <div class="col-sm-12">
                <label class="form-label">性別</label>
                <select class="form-select" name="gender">
                  <option value="">選択</option>
                  <option value="1" selected @if(old("gender")=="1") selected @endif>男</option>
                  <option value="0" @if(old("gender")=="0") selected @endif>女</option>
                </select>
              </div>
              
              <div class="col-sm-12">
                <label class="form-label">職業</label>
                <select class="form-select" name="occupation">
                  <option value="">選択</option>
                  <option value="0" selected @if(old("occupation")=="0") selected @endif>専門学生</option>
                  <option value="1" @if(old("occupation")=="1") selected @endif>大学生</option>
                  <option value="2" @if(old("occupation")=="2") selected @endif>無職</option>
                  <option value="3" @if(old("occupation")=="3") selected @endif>社会人</option>
                </select>
              </div>
              
              <div class="col-sm-12">
                <label class="form-label">都道府県</label>
                <select class="form-select" name="prefectures">
                  <option value="">選択</option>
                  <option value="北海道" selected @if(old("prefectures")=="北海道") selected @endif>北海道</option>
                  <option value="青森県" @if(old("prefectures")=="青森県") selected @endif>青森県</option>
                  <option value="岩手県" @if(old("prefectures")=="岩手県") selected @endif>岩手県</option>
                  <option value="宮城県" @if(old("prefectures")=="宮城県") selected @endif>宮城県</option>
                  <option value="秋田県" @if(old("prefectures")=="秋田県") selected @endif>秋田県</option>
                  <option value="山形県" @if(old("prefectures")=="山形県") selected @endif>山形県</option>
                  <option value="福島県" @if(old("prefectures")=="福島県") selected @endif>福島県</option>
                  <option value="茨城県" @if(old("prefectures")=="茨城県") selected @endif>茨城県</option>
                  <option value="栃木県" @if(old("prefectures")=="栃木県") selected @endif>栃木県</option>
                  <option value="群馬県" @if(old("prefectures")=="群馬県") selected @endif>群馬県</option>
                  <option value="埼玉県" @if(old("prefectures")=="埼玉県") selected @endif>埼玉県</option>
                  <option value="千葉県" @if(old("prefectures")=="千葉県") selected @endif>千葉県</option>
                  <option value="東京都" @if(old("prefectures")=="東京都") selected @endif>東京都</option>
                  <option value="神奈川県" @if(old("prefectures")=="神奈川県") selected @endif>神奈川県</option>
                  <option value="新潟県" @if(old("prefectures")=="新潟県") selected @endif>新潟県</option>
                  <option value="富山県" @if(old("prefectures")=="富山県") selected @endif>富山県</option>
                  <option value="石川県" @if(old("prefectures")=="石川県") selected @endif>石川県</option>
                  <option value="福井県" @if(old("prefectures")=="福井県") selected @endif>福井県</option>
                  <option value="山梨県" @if(old("prefectures")=="山梨県") selected @endif>山梨県</option>
                  <option value="長野県" @if(old("prefectures")=="長野県") selected @endif>長野県</option>
                  <option value="岐阜県" @if(old("prefectures")=="岐阜県") selected @endif>岐阜県</option>
                  <option value="静岡県" @if(old("prefectures")=="静岡県") selected @endif>静岡県</option>
                  <option value="愛知県" @if(old("prefectures")=="愛知県") selected @endif>愛知県</option>
                  <option value="三重県" @if(old("prefectures")=="三重県") selected @endif>三重県</option>
                  <option value="滋賀県" @if(old("prefectures")=="滋賀県") selected @endif>滋賀県</option>
                  <option value="京都府" @if(old("prefectures")=="京都府") selected @endif>京都府</option>
                  <option value="大阪府" @if(old("prefectures")=="大阪府") selected @endif>大阪府</option>
                  <option value="兵庫県" @if(old("prefectures")=="兵庫県") selected @endif>兵庫県</option>
                  <option value="奈良県" @if(old("prefectures")=="奈良県") selected @endif>奈良県</option>
                  <option value="和歌山県" @if(old("prefectures")=="和歌山県") selected @endif>和歌山県</option>
                  <option value="鳥取県" @if(old("prefectures")=="鳥取県") selected @endif>鳥取県</option>
                  <option value="島根県" @if(old("prefectures")=="島根県") selected @endif>島根県</option>
                  <option value="岡山県" @if(old("prefectures")=="岡山県") selected @endif>岡山県</option>
                  <option value="広島県" @if(old("prefectures")=="広島県") selected @endif>広島県</option>
                  <option value="山口県" @if(old("prefectures")=="山口県") selected @endif>山口県</option>
                  <option value="徳島県" @if(old("prefectures")=="徳島県") selected @endif>徳島県</option>
                  <option value="香川県" @if(old("prefectures")=="香川県") selected @endif>香川県</option>
                  <option value="愛媛県" @if(old("prefectures")=="愛媛県") selected @endif>愛媛県</option>
                  <option value="高知県" @if(old("prefectures")=="高知県") selected @endif>高知県</option>
                  <option value="福岡県" @if(old("prefectures")=="福岡県") selected @endif>福岡県</option>
                  <option value="佐賀県" @if(old("prefectures")=="佐賀県") selected @endif>佐賀県</option>
                  <option value="長崎県" @if(old("prefectures")=="長崎県") selected @endif>長崎県</option>
                  <option value="熊本県" @if(old("prefectures")=="熊本県") selected @endif>熊本県</option>
                  <option value="大分県" @if(old("prefectures")=="大分県") selected @endif>大分県</option>
                  <option value="宮崎県" @if(old("prefectures")=="宮城県") selected @endif>宮崎県</option>
                  <option value="鹿児島県" @if(old("prefectures")=="鹿児島県") selected @endif>鹿児島県</option>
                  <option value="沖縄県" @if(old("prefectures")=="沖縄県") selected @endif>沖縄県</option>
                </select>
              </div>
              
              
              <div class="col-sm-12">
                <label class="form-label">お酒の強さ</label>
                <select class="form-select" name="alcohol">
                  <option value="">選択</option>
                  <option value="0" selected @if(old("alcohol")=="0") selected @endif>好きで強い</option>
                  <option value="1" @if(old("alcohol")=="1") selected @endif>好きで弱い</option>
                  <option value="2" @if(old("alcohol")=="2") selected @endif>嫌いで強い</option>
                  <option value="3" @if(old("alcohol")=="3") selected @endif>嫌いで弱い</option>
                </select>
              </div>
              
              <div class="col-sm-12">
                <label class="form-label">希望人数</label>
                <select class="form-select" name="count">
                  <option value="">選択</option>
                  <option value="0" selected @if(old("count")=="0") selected @endif>2対2</option>
                  <option value="1" @if(old("count")=="1") selected @endif>3対3</option>
                  <option value="2" @if(old("count")=="2") selected @endif>4対4</option>
                  <option value="3" @if(old("count")=="3") selected @endif>5対5</option>
                </select>
              </div>
      
              <div class="col-sm-12">
                  <label class="form-label">グループ紹介欄</label>
                  <div class="col-sm-12">
                    <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                  </div>
              </div>
              
              <div class="col">
                  <label class="col-md-2">画像</label>
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
          </form>
        </div>
      </div>
    </form>
  </div>
@endsection