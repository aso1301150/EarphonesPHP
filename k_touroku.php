<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html;charset=Shift_JIS" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<link rel="stylesheet" href="css.css" type="text/css" />
<title>Earphones</title>
</head>
<body>

<!--ヘッダーここから-->
<a name="top" id="top"></a>
<div id="header">
<!--タイトルロゴここから-->
<div id="header_left2">I ❤ Earphones</div>
<!--タイトルロゴここまで-->
<div style="clear:both;"></div>
</div>
<!--ヘッダーここまで-->

<!--ヘッダーメニューここから-->
<div id="menu">
<ul>
<li><a href="top.php">トップページ</a></li>
<li><a href="k_touroku.php">会員登録</a></li>
<li><a href="search.php">商品検索</a></li>
<li><a href="#4">comingsoon...</a></li>
<li><a href="mypage.php">会員情報</a></li>
</ul>
</div>
<div style="clear:both;"></div><!--デザインが崩れるので削除しない事-->
<!--ヘッダーメニューここまで-->

<div id="container"><!--"container"を削除するとデザインが崩れます-->

<div id="main2"><!--デザインが崩れるので削除しない事-->

<!--メインここから-->
<div id="main">

<!--パンくずリストここから-->
<div class="pan"><a href="top.php">トップ</a> > <a href="k_touroku.php">会員登録</a></div>
<!--パンくずリストここまで-->

<div class="category">
<h2 class="h2_normal">会員登録</h2>
<div class="entry_body">

<form method="post" action="kakunin.php" class="contact">

<a>以下のフォームにご入力の上、「入力内容の確認画面へ」ボタンをクリックしてください。</a>

<table border cellspacing=5 cellpadding=8>
<tr>
<th bgcolor="#E6FFE9"><label for="namae">お名前</label></th>
<td bgcolor="#F5FFFA"><input type="text" name="name" id="namae" size="50">
<span class="supplement">※全角</span></td><br>
</tr>

<tr>
<th  bgcolor="#E6FFE9"><label for="meado">メールアドレス</label></th>
<td bgcolor="#F5FFFA"><input type="text" name="meado" id="meado" size="50">
<span class="supplement">※半角</span></td><br>
</tr>

<tr>
<th  bgcolor="#E6FFE9"><label for="tell">電話番号</label></th>
<td bgcolor="#F5FFFA"><input type="text" name="tell1" id="tell1" size="12"> - <input type="text" name="tell2" id="tell2" size="12"> - <input type="text" name="tell3" id="tell3" size="12"> <span class="supplement">（半角数字）</span></td>
</tr>

<tr>
<th  bgcolor="#E6FFE9" rowspan="3"><label for="tokoro">ご住所</label></th>
<td bgcolor="#F5FFFA"><label for="tokoro">〒</label> <input type="text" name="tokoro" id="tokoro" size="12"> - <input type="text" name="tokoro2" id="tokoro2" size="12"> <span class="supplement">（半角数字）</span></td>
</tr>
<tr>
<td bgcolor="#F5FFFA"><select name="prefecture" id="prefecture">
<option value="">都道府県の選択</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="山梨県">山梨県</option>
<option value="新潟県">新潟県</option>
<option value="長野県">長野県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="愛知県">愛知県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="三重県">三重県</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="京都府">京都府</option>
<option value="滋賀県">滋賀県</option>
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
</select></td>
</tr>

<tr>
<td bgcolor="#F5FFFA"><input type="text" name="address" id="address" size="50"><br>
<span class="supplement">※千代田区大手町1-2-3 ○○ビル10F</span></td>
</tr>

<tr>
<th  bgcolor="#E6FFE9"><label for="pass">パスワード</label></th>
<td bgcolor="#F5FFFA"><input type="text" name="pass" id="pass" size="50">
<span class="supplement">※半角</span></td><br>
</tr>

</table>

<p class="button"><input type="submit" value="入力内容の確認画面へ"></p>

</form>

</div>
</div>

<div class="modoru"><a href="#top">ページ上に戻る</a></div>

</div>
<!--メインここまで-->

<!--[if !IE]>サイドメニューここから<![endif]-->
<div id="sub">

<div class="category">
<h3>アカウント</h3>
<div class="entry_body">
<div class="sub-btn"><a href="login.php">ログイン</a></div>
<div class="sub-btn"><a href="k_touroku.php">はじめてのお客様</a></div>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>お買い物かご</h3>
<div class="entry_body">
<div class="sub-btn"><a href="cart.php">カートの中を見る</a></div>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>お支払い方法</h3>
<div class="entry_body">
<p>お支払いは、カード決済、銀行振込、代金引換からお選びいただけます。</p>
<p align="right"><a href="#">くわしくはこちら</a></p>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>送料について</h3>
<div class="entry_body">
<p>発送は平中運輸から、<br />
  送料は全国一律500円になります。</p>
</div>
<div class="sub_bottom"></div>
</div>


</div>

<!--[if !IE]>サイドメニューここまで<![endif]-->

<div style="clear:both;"></div><!--デザインが崩れるので削除しない事-->

</div><!--"main2"-->

<!--サイドメニュー2ここから-->
<div id="sub2">
<div class="category">
<h3>Brand</h3>
<div class="entry_body">
<ul>
<li><a href="#4">Audio-technica</a></li>
<li><a href="#4">SONY</a></li>
<li><a href="#4">Panasonic</a></li>
<li><a href="#4">ELECOM</a></li>
<li><a href="#4">Pioneer</a></li>
</ul>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>機能・特徴</h3>
<div class="entry_body">
<ul>
<li><a href="#4">インナーイヤー</a></li>
<li><a href="#4">カナル型</a></li>
<li><a href="#4">Bluetooth</a></li>
<li><a href="#4">スポーツ</a></li>
<li><a href="#4">ノイズキャンセル</a></li>
</ul>
</div>
<div class="sub_bottom"></div>
</div>

<div class="category">
<h3>coler</h3>
<div class="entry_body">
<ul>
<li><a href="#4">red</a></li>
<li><a href="#4">blue</a></li>
<li><a href="#4">green</a></li>
<li><a href="#4">black</a></li>
<li><a href="#4">white</a></li>
<li><a href="#4">other</a></li>
</ul>
</div>
<div class="sub_bottom"></div>
</div>
</div>
<!--サイドメニュー2ここまで-->

</div><!--"container"-->

<!--フッターここから-->
<div id="footer">
<div id="header_left2">I ❤ Earphones</div>
</div>
<!--フッターここまで-->



</body>
</html>
