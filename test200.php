<html>
<head>
<title>入力画面</title>
<link rel="stylesheet" type="text/css" href="./style.css">

</head>
<body onload="queCon()">

<form name="frmData" method="post" action="conScr.php">
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
<div id="q1Con"></div>
<input type="radio" id="q1Sel1" name="q1"><span id="q1ConSel1"></span></input>
<input type="radio" id="q1Sel2" name="q1"><span id="q1ConSel2"></span></input>
<input type="radio" id="q1Sel3" name="q1"><span id="q1ConSel3"></span></input><br />
<div class="br"></div>

<!-- 質問２ -->
<div id="q2Con"></div>
<input type="radio" id="q2Sel1" name="q2" value="q2Sel1"><span id="q2ConSel1"></span></input>
<input type="radio" id="q2Sel2" name="q2" value="q2Sel2"><span id="q2ConSel2"></span></input>
<input type="radio" id="q2Sel3" name="q2" value="q2Sel3"><span id="q2ConSel3"></span></input><br />
<div class="br"></div>

<!-- 質問３ -->
<div id="q3Con"></div>
<input type="checkbox" id="q3Sel1" name="q3[]" value="q3Sel1"><span id="q3ConSel1"></span></input>
<input type="checkbox" id="q3Sel2" name="q3[]" value="q3Sel2"><span id="q3ConSel2"></span></input>
<input type="checkbox" id="q3Sel3" name="q3[]" value="q3Sel3"><span id="q3ConSel3"></span></input>
<input type="checkbox" id="q3Sel4" name="q3[]" value="q3Sel4"><span id="q3ConSel4"></span></input><br />
<div class="br"></div>

<input type="submit">
<input type="button" onclick="location.href='./creTbl.php'" value="テーブル表示">
<input type="reset">
</form>

</body>

</html>