// スムーススクロール

var headerH = $("header").outerHeight(true);//headerの高さを取得  

$(function(){
   // ドロップダウンメニュー・スライド部分は無効済み
   $('a[href^="#"]'+'a:not(".dropdown-toggle")'+'a:not(".carousel-control")'+'a:not(".nav-link")').click(function(){
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top + headerH;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});	

// ナビアクティブ（現在開いているメニューにclass="active"を追加）
//現在表示しているページのファイル名取得
function GetFileName(file_url) {
	
	file_url = file_url.substring(file_url.lastIndexOf("/") + 1, file_url.length)
	//拡張子も取り除く場合は次の行のコメントアウトをはずしてください
	//file_url = file_url.substring(0,file_url.indexOf("."));
	return file_url;
}

var file_name = GetFileName(location.href);

//現在のページの相対パスリンクにclass="active"を追加。
$("a").each(function() {
	if($(this).attr("href") == file_name || $(this).attr("href") == "./" + file_name) {
		$(this).addClass("active");
	}
});



//スクロール途中からヘッダーの高さを変化させるための設定を関数でまとめる
function FixedAnime() {
  //ヘッダーの高さを取得
  var scroll = $(window).scrollTop();
  if (scroll >= headerH){//ヘッダーの高さを超えたら
        $('header').addClass('header-fixed');//#headerについているHeightMinというクラス名を付与
  }else{
        $('header').removeClass('header-fixed');//HeightMinというクラス名を除去
  }    
}

//スクロール途中からヘッダーの高さを変化させるための設定を関数でまとめる
function FixedAnime() {
  //ヘッダーの高さを取得
  var scroll = $(window).scrollTop();
  if (scroll >= headerH){//ヘッダーの高さを超えたら
        $('header').addClass('header-fixed');//#headerについているHeightMinというクラス名を付与
  }else{
        $('header').removeClass('header-fixed');//HeightMinというクラス名を除去
  }    
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime();//スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  FixedAnime();//スクロール途中からヘッダーの高さを変化させる関数を呼ぶ
});

// バーガーメニューリンククリックで閉じる
$(function() {
	$('.drawer-menu a').on('click', function(event) {
        $('#menu-toggle').prop('checked', false);
    });
});

// ページトップ追従
$(function() {
    var topBtn = $('#page-top');    
    topBtn.hide();
    //スクロールが500に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    //topBtn.click(function () {
    //    $('body,html').animate({
    //        scrollTop: 0
    //    }, 500);
     //   return false;
    //});
});