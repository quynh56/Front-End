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
if(mysqli_errno($conn)){
    echo "kết nối không thành công".mysqli_error($conn);
}
if(isset($_GET['button'])) {
    $search = $_GET['search'];
}else{
    $search ="";
}
$where = " WHERE tintuc_name like '%$search%'or tintuc_menu ='%$search%'";

    $sql = "SELECT id,tintuc_name,tintuc_content,tintuc_image FROM tintuc $where";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {


        while ($row = mysqli_fetch_array($result)) {

            ?>
    <div class="child-3">

        <a href='header.php? id=<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
            <h4> <?php echo $row['tintuc_name']; ?></h4>
        </a>
        <p><?php echo $row['tintuc_content']; ?></p>
    </div>
<?php
}
?>
        <?php
}
?>
<?php
/*
 * $conn = mysqli_connect("localhost","root","","web");
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
 */
?>
