@extends('layouts.profile')
@section('title', '会員ページ')

@section('content')
<body class="profile-page sidebar-collapse">
  <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('../assets/img/fabio-mangione.jpg');">
    <div class="filter"></div>
  </div>
  
  <div class="section profile-content">
    <div class="container">
      <div class="name">
        <h4 class="title text-center">表示名を表示
          <br />
        </h4>
      </div>
      <!--<div class="card, text-center" style="width:300px;">-->
      <div class="card, text-center">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
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
        <span class="badge rounded-pill bg-danger text-light">職業</span>
        <span class="badge rounded-pill bg-primary">都道府県</span>
        <span class="badge rounded-pill bg-primary">お酒の強さ</span>
        <span class="badge rounded-pill bg-primary">希望人数</span>
        <br>
      </div>
      <div class="card-body col-md-8 ml-auto mr-auto text-center">
        <h4 class="card-title">グループ紹介文</h4>
        <p class="card-text">ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
        <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> プロフィール編集</btn>
      </div>
    </div>
  </div>
  
  
</body>

</html>
@endsection