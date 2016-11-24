<html>
<head>
<script src="./canvasjs.min.js"></script>

<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "アンケート結果"    
      },
      animationEnabled: true,
      legend: {
        verticalAlign: "bottom",
        horizontalAlign: "center"
      },
      theme: "theme2",
      data: [

      {        
        type: "column",  
        dataPoints: [      
        //{y: 297571, label: "Venezuela"},
		<?php
			$conn = pg_connect("dbname=db_3828 user=d33828 host=192.168.109.210");
			$result = pg_query($conn,"select count(*) from tbl_data group by ".$axis.",".$grp." order by ".$axis.",".$grp.";");
			for($i=1;$i<4;$i++){
				$kekka=pg_result($result , $i ,0);
				print("{ y:".$kekka.",label:あああ".$i."},");
			}
		?>
        ]
      }   
      ]
    });

    chart.render();
  }
function main(){



}
</script>



</head>
<body onload="main()">
<form name="X_axis" method="post" action="charScr.php">
	<p>横軸選択</p>
		<input type="radio" name="frmAxis" value="sex">性別</input>
		<input type="radio" name="frmAxis" value="blood">血液型</input>
	<p>グループ化選択</p>
		<input type="radio" name="frmGrp" value="sex">性別</input>
		<input type="radio" name="frmGrp" value="blood">血液型</input><br />
	<input type="submit" value="送信">
</form>
<?php
if(isset($_POST["frmAxis"]) && isset($_POST["frmGrp"])){
	$axis=$_POST["frmAxis"];
	$grp=$_POST["frmGrp"];
	if($axis == $grp){
		print("横軸とグループ化が一緒です。異なるものを選択してください。");
	}else{
		//DB接続
		$conn = pg_connect("dbname=db_3828 user=d33828 host=192.168.109.210");

		//
		$result = pg_query($conn,"select count(*) from tbl_data group by ".$axis.",".$grp." order by ".$axis.",".$grp.";");




	}



}

?>

<div id="chartContainer" style="height: 300px; width: 100%;">

</body>
</html>