<?php
$servername ="localhost";
$username ="username";
$password = " ";
$conn = new mysqli($servername,$username,$password);
if($conn->connect_error){
    echo("kết nối không thành công".$con->connect_error());
}else{
    echo "kết nối thành công";
}