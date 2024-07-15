<?php
	$f=fopen('copy.text','w')or die("unable to open the file in write method");
	$str="apple,banana,grapes,jackfruit";
	fwrite(($f,$str);
	fclose($f);
	$f2=fopen('destination.text','w');
	$value1=fread($f1,filesize('copy.text'));
	fwrite($f2,$value1);
	fclose($f1);
	fclose($f2);
	$f3=fopen('destination.text','r')or die("unable to oopen the file in read method");
	$value2=fread($f3,25);
	echo"the file contents are same".$value2;
?>