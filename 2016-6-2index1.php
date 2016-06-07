<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
	echo "hello,test01";
	// echo $var ="hello,变量";//变量名必须通过$符号标识
	echo "<br/>";
	var_dump($n=10) ;//var_dump”函数可以将我们的变量的数据类型（后面小节会做介绍）显示出来
	// echo $var ="不好学"
	echo "<br>";

	$data_int1 =12;
	echo $data_int1;
	echo "<br>";
	$data_int2 =-123;
	echo $data_int2;
	echo "<br>";
	$data_int3 =0123;
	echo $data_int3;
	echo "<br>";
	$data_int4 =0x123;
	echo $data_int4;
	echo "<br>";
	$float=1.23e3;
	echo $float;
	echo "<br>";
	$string1=<<<GOD
	我有一只小毛驴，我从来也不骑。
	有一天我心血来潮，骑着去赶集。
	我手里拿着小皮鞭，我心里正得意。
	不知怎么哗啦啦啦啦，我摔了一身泥.
GOD;
	echo $string1;
	echo "<br>";
	$p ="PII";
	define("PI",3.14);
	define($p,3.14);
	echo PI;
	echo "<br>";
	echo PII;
	$r=3;
	echo "面积为".PI*$r*$r;
	echo "<br>";
	echo __LINE__;
	echo "<br>";
	echo __FILE__;
	echo "<br>";
	echo PHP_VERSION;
	echo "<br>";
	echo PHP_OS;
	echo "<br>";
	$is1=defined($p);
	$is2=defined($p2);
	var_dump($is1);
	var_dump($is2);
	echo "<br>";
	$a=78;
	$b=$a>=60?"及格":"不及格";
	echo $b;
	echo "<br>";

	echo "<br>";
	

 ?>