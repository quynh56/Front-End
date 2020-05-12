
<?php
$conn =mysqli_connect("localhost","root","");
if(mysqli_errno($conn)){
echo"ket noi khong thanh cong ".mysqli_error($conn)."<br>";
}else{
    echo "ket noi thanh cong "."<br>";
}
$sql ="CREATE DATABASE IF NOT EXISTS web";
if(mysqli_query($conn,$sql)){
    echo "ket noi thanh cong"."<br>";
}else{
    echo "co loi xay ra".mysqli_error($conn)."<br>";
}
mysqli_close($conn);
unset($sql);
?>
<?php
$conn =mysqli_connect("localhost","root","","web");
if(mysqli_errno($conn)){
    echo "ket noi khong thanh cong ".mysqli_error($conn)."<br>";
}else{
    echo "ket noi thanh cong "."<br>";
}
$sql = "CREATE TABLE IF NOT EXISTS tintuc(
id int(20) primary key not null auto_increment,
tintuc_name varchar(300),
tintuc_menu varchar(200),
tintuc_content text,
tintuc_image text,
)";
if(mysqli_query($conn,$sql)){
    echo "tao thanh cong"."<br>";
}else{
    echo "co loi xay ra".mysqli_error($conn)."<br>";
    mysqli_close($conn);
    unset($sql);
}
?>
<?php
$conn = mysqli_connect("localhost","root","","web");
mysqli_query ($conn,"SET NAMES UTF8");
$sql ="SELECT* FROM tintuc LIMIT 0,14 ";
$result = mysqli_query($conn,$sql);

if(!$result) {
    die ("không thực hiện được:" . mysqli_error($conn));
    exit();
}

while($row = mysqli_fetch_array($result)){
    echo '
            <div class="row"> 
                <div class="child col">
                     <a href=""><img src="' . $row['tintuc_image'] . '" alt="">
                         <h4>' . $row['tintuc_name'] . '</h4>
                      </a>
                     <p>' . $row['tintuc_content'] . '</p>
                 </div>
                 <div class="child-2 col">
                     <a href=""><img src="' . $row['tintuc_image'] . '" alt="">
                         <h4>' . $row['tintuc_name'] . '</h4>
                      </a>
                     <p>' . $row['tintuc_content'] . '</p>
                  </div>
            </div>';
    echo ' 
            <div class="child-3">
                <a href=""><img src="' . $row['tintuc_image'] . '" alt="">
                    <h4>' . $row['tintuc_name'] . '</h4>
                 </a>
                 <p>' . $row['tintuc_content'] . '</p>
            </div>';
    echo '<hr>';
    echo '   
            <div class="child-3">
                <a href="">
                    <img src='.$row['tintuc_image'].' title="Lịch sử AFF Cup ủng hộ Việt Nam: Philippines sở hữu thành tích toàn thua ở bán kết">
                    <h4>'.$row['tintuc_name'].'</h4>
                </a>
                <p>'.$row['tintuc_content'].'</p>
            </div>';
    echo '   
            <div class="child-3">
                <a href="">
                    <img src='.$row['tintuc_image'].' title="Lịch sử AFF Cup ủng hộ Việt Nam: Philippines sở hữu thành tích toàn thua ở bán kết">
                    <h4>'.$row['tintuc_name'].'</h4>
                </a>
                <p>'.$row['tintuc_content'].'</p>
            </div>';
    echo '   
            <div class="child-3">
                <a href=' . $row['id'] . '>
                    <img src='.$row['tintuc_image'].' title="Lịch sử AFF Cup ủng hộ Việt Nam: Philippines sở hữu thành tích toàn thua ở bán kết">
                    <h4>'.$row['tintuc_name'].'</h4>
                </a>
                <p>'.$row['tintuc_content'].'</p>
            </div>';
    echo '   
            <div class="child-3">
                <a href=' . $row['id'] . '>
                    <img src='.$row['tintuc_image'].' title="Lịch sử AFF Cup ủng hộ Việt Nam: Philippines sở hữu thành tích toàn thua ở bán kết">
                    <h4>'.$row['tintuc_name'].'</h4>
                </a>
                <p>'.$row['tintuc_content'].'</p>
            </div>';
    echo '
         <div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href='.$row['id'].'><img src='.$row['tintuc_image'].'>
                            <h4>'.$row['tintuc_name'].'</h4></a>
                    </div>
                    <div class="item">
                        <a href='.$row['id'].'><img src='.$row['tintuc_image'].'>
                            <h4>'.$row['tintuc_name'].'</h4></a>
                    </div>
                    <div class="item">
                        <a href='.$row['id'].'><img src='.$row['tintuc_image'].'>
                            <h4>'.$row['tintuc_name'].'</h4></a>
                    </div>
                    <div class="item">
                        <a href='.$row['id'].'><img src='.$row['tintuc_image'].'>
                            <h4>'.$row['tintuc_name'].'</h4></a>
                    </div>
                    <div class="item">
                        <a href='.$row['id'].'><img src='.$row['tintuc_image'].'>
                            <h4>'.$row['tintuc_name'].'</h4></a>
                    </div>
                    <div class="item">
                        <a href='.$row['id'].'><img src='.$row['tintuc_image'].'>
                            <h4>'.$row['tintuc_name'].'</h4></a>
                    </div>
                    <div class="item">
                        <a href='.$row['id'].'><img src='.$row['tintuc_image'].'>
                            <h4>'.$row['tintuc_name'].'</h4></a>
                    </div>
                    <div class="item">
                        <a href='.$row['id'].'><img src='.$row['tintuc_image'].'>
                            <h4>'.$row['tintuc_name'].'</h4></a>
                    </div>
                </div>

         </div> ';
}
mysqli_close($conn);
unset($sql);

?>
