@extends('layouts.profile')
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
                <select class="form-select" name="gender" value="{{ old('gender') }}">
                  <option value="">選択</option>
                  <option value="1">男</option>
                  <option value="0">女</option>
                </select>
              </div>
              
              <div class="col-sm-12">
                <label class="form-label">職業</label>
                <select class="form-select" name="occupation" value="{{ old('occupation') }}">
                  <option value="">選択</option>
                  <option>専門学生</option>
                  <option>大学生</option>
                  <option>無職</option>
                  <option>社会人</option>
                </select>
              </div>
              
              <div class="col-sm-12">
                <label class="form-label">都道府県</label>
                <select class="form-select" name="prefectures" value="{{ old('prefectures') }}">
                  <option value="">選択</option>
                  <option value="北海道">北海道</option>
                  <option value="青森県">青森県</option>
                  <option value="岩手県">岩手県</option>
                  <option value="宮城県">宮城県</option>
                  <option value="秋田県">秋田県</option>
                  <option value="山形県">山形県</option>
                  <option value="福島県">福島県</option>
                  <option value="茨城県">茨城県</option>
                  <option value="栃木県">栃木県</option>
                  <option value="群馬県">群馬県</option>
                  <option value="埼玉県">埼玉県</option>
                  <option value="千葉県">千葉県</option>
                  <option value="東京都">東京都</option>
                  <option value="神奈川県">神奈川県</option>
                  <option value="新潟県">新潟県</option>
                  <option value="富山県">富山県</option>
                  <option value="石川県">石川県</option>
                  <option value="福井県">福井県</option>
                  <option value="山梨県">山梨県</option>
                  <option value="長野県">長野県</option>
                  <option value="岐阜県">岐阜県</option>
                  <option value="静岡県">静岡県</option>
                  <option value="愛知県">愛知県</option>
                  <option value="三重県">三重県</option>
                  <option value="滋賀県">滋賀県</option>
                  <option value="京都府">京都府</option>
                  <option value="大阪府">大阪府</option>
                  <option value="兵庫県">兵庫県</option>
                  <option value="奈良県">奈良県</option>
                  <option value="和歌山県">和歌山県</option>
                  <option value="鳥取県">鳥取県</option>
                  <option value="島根県">島根県</option>
                  <option value="岡山県">岡山県</option>
                  <option value="広島県">広島県</option>
                  <option value="山口県">山口県</option>
                  <option value="徳島県">徳島県</option>
                  <option value="香川県">香川県</option>
                  <option value="愛媛県">愛媛県</option>
                  <option value="高知県">高知県</option>
                  <option value="福岡県">福岡県</option>
                  <option value="佐賀県">佐賀県</option>
                  <option value="長崎県">長崎県</option>
                  <option value="熊本県">熊本県</option>
                  <option value="大分県">大分県</option>
                  <option value="宮崎県">宮崎県</option>
                  <option value="鹿児島県">鹿児島県</option>
                  <option value="沖縄県">沖縄県</option>
                </select>
              </div>
              
              
              <div class="col-sm-12">
                <label class="form-label">お酒の強さ</label>
                <select class="form-select" name="alcohol" value="{{ old('alcohol') }}">
                  <option value="">選択</option>
                  <option value="0">好きで強い</option>
                  <option value="1">好きで弱い</option>
                  <option value="2">嫌いで強い</option>
                  <option value="3">嫌いで弱い</option>
                </select>
              </div>
              
              <div class="col-sm-12">
                <label class="form-label">希望人数</label>
                <select class="form-select" name="count" value="{{ old('count') }}">
                  <option value="">選択</option>
                  <option>2対2</option>
                  <option>3対3</option>
                  <option>4対4</option>
                  <option>5対5</option>
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
                      <input type="file" class="form-control-file" id="image[]" name="image[]" accept="image/*" multiple="multiple">
                  </div>
                  <div class="col-md-10">
                      <input type="file" class="form-control-file" id="image[]" name="image[]" accept="image/*" multiple="multiple">
                  </div>
                  <div class="col-md-10">
                      <input type="file" class="form-control-file" id="image[]" name="image[]" accept="image/*" multiple="multiple">
                  </div>
                  <div class="col-md-10">
                      <input type="file" class="form-control-file" id="image[]" name="image[]" accept="image/*" multiple="multiple">
                  </div>
                  <div class="col-md-10">
                      <input type="file" class="form-control-file" id="image[]" name="image[]" accept="image/*" multiple="multiple">
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
