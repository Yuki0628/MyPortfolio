@extends('template')

@section('content')
  <section class="history">
    <h2 class="main-title">My history</h2>
    <div class="history__container">
      <div class="cards">
        <div class="cards__content">
          <div class="card floatAnime">
            <div class="date"><p>2022年</p></div>
            <div class="card__title">
              <h2>韓国語学習プラットフォーム開発</h2>
            </div>
            <div class="card__text">
              <p>
              22年4月、BTSを発端とする韓国語ブームに伴い韓国語学習者が増加したことを耳にする。PHPとLaravelを学んでいた為、何か自分にできることは無いかと考え学習サイトの開発を行った。サイトへのアクセスは<a href="https://lang.korip.net">こちら</a>から
              </p>
            </div>
          </div>
        </div>
        <div class="cards__content">
          <div class="card floatAnime">
            <div class="date"><p>2021年</p></div>
            <div class="card__title">
              <h2>プログラミング学習開始</h2>
            </div>
            <div class="card__text">
              <p>
                21年2月、プログラミングに出会う。きっかけはWordPressをいじっている時だった。HTML・CSS・Javascriptの基礎学習を終えていくつかのサイトを作成するなどして学習をすすめる。21年秋頃には将来エンジニアとして生きていこうと決意する。
              </p>
            </div>
          </div>
        </div>
        <div class="cards__content">
          <div class="card floatAnime">
            <div class="date"><p>2020年</p></div>
            <div class="card__title">
              <h2>大学休学</h2>
            </div>
            <div class="card__text">
              <p>
                将来を悩み、大学を休学し韓国に留学する。留学中は韓国をテーマにしたブログで１つの記事がSEOにて3位にランクイン。生活費を稼ぐため、日本向けECサイトを運営する企業にてＷＥＢマーケティング業務を経験する。しかし、卒業後にしたい仕事はまだ見つからず模索を続ける．．．
              </p>
            </div>
          </div>
        </div>
        <div class="cards__content">
          <div class="card floatAnime">
            <div class="date"><p>2018年</p></div>
            <div class="card__title">
              <h2>大学入学</h2>
            </div>
            <div class="card__text">
              <p>
                2018年4月、同志社大学社会学部に入学する。国際交流サークルや青少年育成のためのキャンプサークルに注力する。
              </p>
            </div>
          </div>
        </div>
        <div class="cards__content">
          <div class="card floatAnime">
            <div class="date"><p>2015年</p></div>
            <div class="card__title">
              <h2>日本拳法との出会い</h2>
            </div>
            <div class="card__text">
              <p>
                大阪高等学校に入学後、日本拳法という武道に出会う。受験勉強をこなしながらで大変だったが、全国大会に出場でき、第一志望校にもなんとか合格する。精神力を鍛えるいい経験となった。
              </p>
            </div>
          </div>
        </div>
        <div class="cards__content">
          <div class="card floatAnime">
            <div class="date"><p>2012年</p></div>
            <div class="card__title">
              <h2>中学生YouTuber時代</h2>
            </div>
            <div class="card__text">
              <p>
                2012年、部活に入らず時間を持て余した私は、友人らと遊戯王チャンネル<a href="https://www.youtube.com/user/tonaga0628/videos" target="_blank" rel="noopener noreferrer">『遊戯王 in 吹田』</a>（現在名:いとちゃんのゲーム実況室）を始める。のちにゲーム実況で再生回数3万回を達成したが、受験勉強の為に引退する。
              </p>
            </div>
          </div>
        </div>
        <div class="cards__content">
          <div class="card floatAnime">
            <div class="date"><p>2006年</p></div>
            <div class="card__title">
              <h2>ゲームオタク小学生</h2>
            </div>
            <div class="card__text">
              <p>
                ポケモンエメラルドから始まり、スーパーファミコン、64などの昔のゲームも色々遊んだのち、メイプルストーリーやおもしろフラッシュにハマる。1年生の頃はパソコンのローマ字入力が出来なかった為、「かな入力」になんとか変更してネットサーフィンを楽しむ。
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection

@section('scriptContent')
  <script src="{{ asset('/js/libs/scroll-polyfill.js') }}"></script>
  <script src="{{ asset('/js/floatAnime.js') }}"></script>
@endsection

