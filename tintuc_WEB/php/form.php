
<?php
$nameErr =$emailErr =$usrtelErr ="";
$name =$email =$usrtel=$message="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["name"])){
$nameErr = "tên bắt buộc";
}else {
$name = $_POST["name"];
if (!preg_match("/^[a-zA-Z]*/",$name)) {
$nameErr = "chỉ nhập tên vs khoảng trống";
}
}
if(empty($_POST["email"])){
$emailErr ="email bắt buộc";
}else{
$email = $_POST["email"];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$emailErr ="Email không hợp lệ";
}
}
if(empty($_POST["usrtel"])){
$usrtelErr = "ĐT bắt buộc";
}else{
$usrtel =$_POST["usrtel"];
}
if(empty($_POST["message"])){
$message ="";
}else{
$message = $_POST["message"];
}
}
?>
<?php
echo "<h2>Thông tin của khách hàng</h2>";
echo "Tên: " . $_POST["name"] ."<br>";
echo "Email: ". $_POST["email"] ."<br>";
echo "Tên: " . $_POST["usrtel"] ."<br>";
echo "Email: ". $_POST["message"] ."<br>";
echo "<hr>";
?>
