<?php
      session_start();
      header("Content-type:image/jpeg");
	  $img=imageCreate(100,30);
	  $bg=imageColorAllocate($img,250,250,250);
	  $rect_color=imageColorAllocate($img,200,200,200);
	  imageRectangle($img,0,0,100,30,$rect_color);
	  
	  $data = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
	  $str="";
	  for($i=1;$i<=4;$i++){
		     $color=imageColorAllocate($img,0,0,0);
			 $num=$data[rand(0,count($data)-1)];
			 $str.=$num;
	         imageString($img,8,($i-1)*20+15,rand(5,15),$num,$color);
	  }
	  $_SESSION['yzm']=$str;
	  for($i=1;$i<150;$i++){
		     $color=imageColorAllocate($img,rand(0,255),rand(0,255),rand(0,255));
	         imageSetPixel($img,rand(0,100),rand(0,30),$color);
	  }
	  for($i=0;$i<3;$i++){
		     $color=imageColorAllocate($img,rand(0,255),rand(0,255),rand(0,255));
	         imageLine($img,rand(10,20),rand(0,30),rand(80,90),rand(0,30),$color);
	  }
	  imageJPEG($img);
?>