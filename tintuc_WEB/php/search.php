<?php
/*if (isset($_REQUEST['button'])){
    $search =addcslashes($_GET['search']);
    if(empty($search)){
        echo "không tìm thấy thông tin vui lòng nhập lại";
    }else{
        $query ="SELECT * FROM ";
    }
}*/
?>

<?php
$conn = mysqli_connect("localhost","root","","web");
if (isset($_REQUEST['button'])){
    $search = $_GET['search'];
    if(empty($search)){
        echo "nhập dữ liệu";
    }else{
        $query ="SELECT * FROM users WHERE username like '%search%'";
        mysqli_connect("localhost","root","","web ");
        $sql = mysqli_query($query);

    }
}
?>
<?php
$conn = mysqli_connect("localhost","root","","web");
if(mysqli_errno($conn)){
    echo "".mysqli_error($conn);
}else{

}
if(isset($_GET['search'])){
    $search =$_GET['search'];
}else{
    $search ="";
}
$where ="WHERE tintuc_name LIKE '%search%' ";
$sql ="SELECT * FROM tintuc "
?>
