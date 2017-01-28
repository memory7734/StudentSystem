<?php 
include 'config.php';
//获取POST数据
 $data=$_POST;
// echo "<pre>";
// var_dump($data);
// echo "</pre>";

$id=(int)$data['id'];
$name=$data['name'];
$sex=$data['sex'];
$score=(int)$data['score'];
$class=(int)$data['class'];
$birthday=strtotime($data['birday']);



//准备sql语句
$sql="INSERT INTO student(id,name,sex,score,class,birthday) VALUES ($id,'$name','$sex',$score,$class,'$birthday')";
//echo $sql;
//预处理
$smt=$pdo->prepare($sql);

if($smt->execute()){
	echo "<script>location='print.php'</script>";
}
else {
	echo '111111<br>';
	echo $birthday;
}
 ?>