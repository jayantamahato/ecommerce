<?php
include'config.php';
$itemid=(rand(100,999999));
$table=$_POST['table'];
$brand=$_POST['brand'];
$descname=$_POST['descname'];
$price=$_POST['price'];
$offer=$_POST['offer'];
$spec=$_POST['spec'];
$varient=$_POST['varient'];
$warranty=$_POST['warranty'];
$highlights=$_POST['highlights'];
$mainpic=$_FILES["mainpic"]["name"];
$mainpictempname=$_FILES["mainpic"]["tmp_name"];
$foldermain = "../img/".$table."/".$mainpic;
move_uploaded_file($mainpictempname,'../img/'.$table.'/'.$mainpic);
$pic1=$_FILES["pic1"]["name"];
$pic1tempname=$_FILES["pic1"]["tmp_name"];
$folder1 = "../img/".$table."/".$pic1;
move_uploaded_file($pic1tempname,'../img/'.$table.'/'.$pic1);
$pic2=$_FILES["pic2"]["name"];
$pic2tempname=$_FILES["pic2"]["tmp_name"];
$folder2 = "../img/".$table."/".$pic2;
move_uploaded_file($pic2tempname,'../img/'.$table.'/'.$pic2);
$pic3=$_FILES["pic3"]["name"];
$pic3tempname=$_FILES["pic3"]["tmp_name"];
$folder3 = "../img/".$table."/".$pic3;
move_uploaded_file($pic3tempname,'../img/'.$table.'/'.$pic3);
$pic4=$_FILES["pic4"]["name"];
$pic4tempname=$_FILES["pic4"]["tmp_name"];
$folder4 = "../img/".$table."/".$pic4;
move_uploaded_file($pic4tempname,'../img/'.$table.'/'.$pic4);
$query ="INSERT INTO $table (`brand`, `name`, `variants`, `price`, `spec`, `highlights`, `warranty`, `offer`, `mainpic`, `pic1`, `pic2`, `pic3`, `pic4`,`itemid`) VALUES ('$brand','$descname','$varient','$price','$spec','$highlights','$warranty','$offer','$foldermain','$folder1','$folder2','$folder3','$folder4','$itemid')";
$run=mysqli_query($conn,$query);
if($run==1)
{
    header("location:../links/adminview.php");
}
else{
    header("location:../links/adminview.php");
}
?>