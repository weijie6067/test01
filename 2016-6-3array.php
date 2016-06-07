<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
$fruit = array('苹果' , '香蕉',"菠萝");
print_r($fruit);
echo "<br>";
print_r($fruit["0"]);
for ($i=0; $i < 3; $i++) { 
	echo "<br>数组第".$i."的值为".$fruit[$i];
}
foreach ($fruit as $key => $value) {
	echo "<br>第".$key."值是".$value;
}
// 关联数组
$fruit2 = array('apple' => "苹果","banana"=>"香蕉","pineapple"=>"菠萝" );
print_r($fruit2);
foreach ($fruit2 as $key => $value) {
	echo "<br>水果键名".$key."对应值为".$value;
}
// function number(){
// 	ruturn array(1,2,3);
// }	
// list($one,$two,$three)=number();
//判断函数是否存在
echo "<br>";
function fn(){};
if(function_exists('fn')){
	echo '函数exists';
}
//创建一个类
class car {
	//定义属性
	public $name='汽车';
	// 定义方法
	public function getName(){
		//方法内部可以使用$this伪变量调用对象的属性和方法
		return $this->name;
	}
}
$car=new car();
$className ='car';
$car =new $className();














 ?>
