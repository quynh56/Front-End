
<?php
$conn = mysqli_connect("localhost","root","");
if(mysqli_errno($conn)){
    echo "kết nối không thành công".mysqli_error($conn) ."<br>";
}else{
    echo "kết nối thành công"."<br>";
}
$sql = "CREATE DATABASE IF NOT EXISTS web";
if(mysqli_query($conn,$sql)){
    echo "tạo thành công CSDL"."<br>";
}else{
    echo "có lỗi xảy ra".mysqli_error($conn)."<br>";
}
mysqli_close($conn);
unset($sql);
?>
<?php
$conn = mysqli_connect("localhost","root","","web");
if(mysqli_errno($conn)){
    echo "kết nối không thành công".mysqli_error($conn)."<br>";
}else{
    echo "kết nối thành công"."<br>";
}
$sql = "CREATE TABLE IF NOT EXISTS tintuc (id int(20) primary key not null auto_increment, tintuc_name varchar(300),tintuc_menu varchar(200), tintuc_content text, tintuc_image text)";
if(mysqli_query($conn,$sql)){
    echo "thành công"."<br>";
}else{
    echo "có lỗi xảy ra".mysqli_error($conn)."<br>";
}
mysqli_close($conn);
unset($sql);
?>
<?php
$conn =mysqli_connect("localhost","root","","web") or die ('không thể kết nối');
$sql = 'SELECT * FROM tintuc';
$result = mysqli_query($conn,$sql);
if(!$result) {
    die ('câu truy vấn bị sai');

    while ($row = mysqli_fetch_assoc($result)) {
        var_dump($row);

    }
}
mysqli_free_result($result);
mysqli_close($conn);
unset($sql);
?>

