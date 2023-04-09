const item0 = document.querySelector('.item0');
const item1 = document.querySelector('.item1');
const item2 = document.querySelector('.item2');
const item3 = document.querySelector('.item3');
const description = document.querySelector('.description');
const btn = document.querySelector('.btn');
const text = document.querySelector('.description__text')

btn.addEventListener('click', () => {
  description.classList.remove('open');
});

item0.addEventListener('click', () => {
  description.classList.add('open');
  changeText0();
});
item1.addEventListener('click', () => {
  description.classList.add('open');
  changeText1();
});
item2.addEventListener('click', () => {
  description.classList.add('open');
  changeText2();
});
item3.addEventListener('click', () => {
  description.classList.add('open');
  changeText3();
});



function changeText0() {
  text.innerHTML = '一般ユーザー向けに初めて作成した学習プラットフォームです。ジャンル等でソートした上でことわざ等を確認でき、会員登録すれば投稿も可能です。リンクは<a href="https://lang.korip.net/">こちら</a>から';
}
function changeText1() {
  text.innerHTML = 'HTML・CSSの基礎学習を終え、アウトプットとして作成したポートフォリオです。JavaScriptの学習前だったため、出来るだけシンプルでおしゃれになるようこだわりました。ナビメニューはBootStrapを使用しております。リンクは<a href="https://yuki0628.github.io/portfolio/">こちら</a>から';
}
function changeText2() {
  text.innerHTML = 'こちらは、だんさんという方が作成された架空の建設会社LPを模写したものです。お知らせマークや施工事例のレイアウト、詳細を見るのボタンなどの実装を試行錯誤しながら作成しました。この模写を通じて、コードの綺麗さはまだブラシュアップが必要ですが、HTML・CSSのコーディング自体は慣れてきました。またこの時から、sass（scss記法）の利用を始めました。私が作成したものは<a href="https://jovial-elion-52ceeb.netlify.app/">こちら</a>から。（参考:<a href="https://prog-anchor.com/trace/">だんブログ</a>）';
}
function changeText3() {
  text.innerHTML = 'こちらは、完全自作の架空のカフェのホームページです。こだわったポイントは、コーヒーカップが傾いてメニューが現れるアニメーションです。技術力を磨いてもう少しリッチに改善したいです。また、Informationのレイアウトも見やすいようにこだわりました。ヒーロースライダーはサードパーティー製のSwiper.jsを使用しております。リンクは<a href="https://compassionate-borg-8eae24.netlify.app/">こちら</a>から';
}





