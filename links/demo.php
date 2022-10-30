<?php
include'../backend/config.php';
$query="SELECT * FROM `dealoftheday`";
$run=mysqli_query($conn,$query);
if(mysqli_num_rows($run)>0)
{
    ;
    while($fetch=mysqli_fetch_assoc($run))
    {
        echo $fetch['name'];
    }
}



?>