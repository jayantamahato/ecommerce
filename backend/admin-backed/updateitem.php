<?php
include'config.php';
$table=$_POST['table'];
$operation=$_POST['operation'];
$id=$_POST['id'];
$brand=$_POST['brand'];
$descname=$_POST['descname'];
$price=$_POST['price'];
$offer=$_POST['offer'];
$spec=$_POST['spec'];
$varient=$_POST['varient'];
$warranty=$_POST['warranty'];
$highlights=$_POST['highlights'];



if($operation=='mainpic')
{
    $mainpic=$_FILES["mainpic"]["name"];
    $mainpictempname=$_FILES["mainpic"]["tmp_name"];
    $foldermain = "../img/".$table."/".$mainpic;
    move_uploaded_file($mainpictempname,'../img/'.$table.'/'.$mainpic);
    $query="UPDATE $table SET `mainpic`='$foldermain'WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='brand')
{
    $query ="UPDATE $table SET `brand`= '$brand' WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='name')
{
    $query ="UPDATE $table SET `name`= '$descname' WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='varient')
{
    $query ="UPDATE $table SET `varients`= '$varient' WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='price')
{
    $query ="UPDATE $table SET `price`= '$price' WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='spec')
{
    $query ="UPDATE $table SET `varients`= '$spec' WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='warranty')
{
    $query ="UPDATE $table SET `warranty`= '$warranty' WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='offer')
{
    $query ="UPDATE $table SET `offer`= '$offer' WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='warranty')
{
    $query ="UPDATE $table SET `warranty`= '$warranty' WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='pic1')
{
    $pic1=$_FILES["pic1"]["name"];
    $pic1tempname=$_FILES["pic1"]["tmp_name"];
    $folder = "../img/".$table."/".$pic1;
    move_uploaded_file($pic1tempname,'../img/'.$table.'/'.$pic1);
    $query="UPDATE $table SET `pic1`='$folder'WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='pic2')
{
    $pic2=$_FILES["pic2"]["name"];
    $pic2tempname=$_FILES["pic2"]["tmp_name"];
    $folder = "../img/".$table."/".$pic2;
    move_uploaded_file($pic2tempname,'../img/'.$table.'/'.$pic2);
    $query="UPDATE $table SET `pic2`='$folder'WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='pic3')
{
    $pic3=$_FILES["pic3"]["name"];
    $pic3tempname=$_FILES["pic3"]["tmp_name"];
    $folder = "../img/".$table."/".$pic3;
    move_uploaded_file($pic3tempname,'../img/'.$table.'/'.$pic3);
    $query="UPDATE $table SET `pic3`='$folder'WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}
elseif($operation =='pic4')
{
    $pic3=$_FILES["pic4"]["name"];
    $pic4tempname=$_FILES["pic4"]["tmp_name"];
    $folder = "../img/".$table."/".$pic4;
    move_uploaded_file($pic4tempname,'../img/'.$table.'/'.$pic4);
    $query="UPDATE $table SET `pic4`='$folder'WHERE `itemid`= '$id' ";
    $run=mysqli_query($conn,$query);
    if($run==1)
    {
        echo "<script> alert('update sucessful')</script>";
       header("location:../links/adminview.php");
    }
    else{
        echo "<script> alert('update unsucessful')</script>";
       header("location:../links/adminview.php");
    }
}

?>