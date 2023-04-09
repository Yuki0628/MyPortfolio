@extends('template')

@section('content')

    <section class="works">      
      <div class="works-container">
        <h2>My Works</h2>
        <p>画像クリックで詳細が開きます。</p>
        <div class="content flex">
          <div class="item item0">
            <img src="images/hibikan.png" alt="" />
          </div>
          <div class="item item1">
            <img src="images/portfolio.png" alt="" />
          </div>
        </div>
        <div class="content flex">
          <div class="item item2">
            <img src="images/kensetshu.png" alt="" />
          </div>
          <div class="item item3"><img src="images/cafe.png" alt="" /></div>
        </div>
      </div>
      <div class="description">
        <div class="btn">
          <span></span>
        </div>
        <div class="description__content">
          <p class="description__text"></p>
        </div>
      </div>
    </section>

@endsection


@section('scriptContent')
  <script src="{{ asset('/js/clickEvent.js') }}"></script>
@endsection

