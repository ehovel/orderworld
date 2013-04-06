<?php
    session_start();
	if(isset($_POST['post'])){
	       $con=trim(strtolower($_POST['con']));
		   if($con==strtolower($_SESSION['yzm'])){
		        echo "success";
		   }else{
		        echo "fail";
		   }
	}
?>
<script>
       function flesh(){
	          document.getElementById("yzm").src="yanzhenma.php?cachetime="+new Date().getTime();
	   }
</script>
<form action="" method="post">
        <input type="text" style="width:100px;height:26px;line-height:20px;" name="con">
		<img id="yzm" src="yanzhenma.php">[<a href="javascript:flesh()">看不清</a>]
		<p><input type="submit" name="post" value="查询"></p>
</form>