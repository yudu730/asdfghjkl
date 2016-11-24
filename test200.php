<html>
<head>
<title>入力画面</title>
<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>

<form method="post" action="conScr.php">
<input type="text" name="frmId">:出席番号<br />
<div class="br"></div>


<!-- 性別 -->
<select name="sex">
	<option value="">性別</option>
	<option value="男">男</option>
	<option value="女">女</option>
</select>
<br />
<div class="br"></div>


<!-- 血液型 -->
<select name="blood">
	<option value="">血液型</option>
	<option value="A">A型</option>
	<option value="B">B型</option>
	<option value="AB">AB型</option>
	<option value="O">O型</option>
</select><br />
<div class="br"></div>


<!-- 質問１ -->
<p>質問１</p>
<input type="radio" name="q1" value="q1Sel1">
<input type="radio" name="q1" value="q1Sel2">
<input type="radio" name="q1" value="q1Sel3"><br />
<div class="br"></div>

<!-- 質問２ -->
<p>質問２</p>
<input type="radio" name="q2" value="q2Sel1">
<input type="radio" name="q2" value="q2Sel2">
<input type="radio" name="q2" value="q2Sel3"><br />
<div class="br"></div>

<!-- 質問３ -->
<p>質問３</p>
<input type="checkbox" name="q3[]" value="q3Sel1">
<input type="checkbox" name="q3[]" value="q3Sel2">
<input type="checkbox" name="q3[]" value="q3Sel3">
<input type="checkbox" name="q3[]" value="q3Sel4"><br />
<div class="br"></div>

<input type="submit">
<input type="button" onclick="location.href='./creTbl.php'" value="テーブル表示">
<input type="reset">
</form>

</body>

</html>