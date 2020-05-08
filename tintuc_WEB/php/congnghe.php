<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include("header.php");?>
<div class="bai-viet">
    <?php
    $conn = mysqli_connect("localhost","root","","web");
    mysqli_query ($conn,"SET NAMES UTF8");
    $sql ="SELECT* FROM tintuc LIMIT 25,11 ";
    $result = mysqli_query($conn,$sql);

    if(!$result) {
        die ("không thực hiện được:" . mysqli_error($conn));
        exit();
    }

    while($row = mysqli_fetch_array($result)){
        echo '
            <div class="row"> 
                <div class="child col">
                     <a href="' . $row['id'] . '"><img src="' . $row['tintuc_image'] . '" alt="">
                         <h4>' . $row['tintuc_name'] . '</h4>
                      </a>
                     <p>' . $row['tintuc_content'] . '</p>
                 </div>
                 <div class="child-2 col">
                     <a href="' . $row['id'] . '"><img src="' . $row['tintuc_image'] . '" alt="">
                         <h4>' . $row['tintuc_name'] . '</h4>
                      </a>
                     <p>' . $row['tintuc_content'] . '</p>
                  </div>
            </div>';
        echo "<hr>";
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
        echo ' 
            <div class="child-3">
                <a href=' . $row['id'] . '><img src="' . $row['tintuc_image'] . '" alt="">
                    <h4>' . $row['tintuc_name'] . '</h4>
                 </a>
                 <p>' . $row['tintuc_content'] . '</p>
            </div>';
        echo '<hr>';
        echo '   
            <div class="child-3">
                <a href=' . $row['id'] . '>
                    <img src='.$row['tintuc_image'].' title="Lịch sử AFF Cup ủng hộ Việt Nam: Philippines sở hữu thành tích toàn thua ở bán kết">
                    <h4>'.$row['tintuc_name'].'</h4>
                </a>
                <p>'.$row['tintuc_content'].'</p>
            </div>';
        echo '<hr>';
        echo '   
            <div class="child-3">
                <a href=' . $row['id'] . '>
                    <img src='.$row['tintuc_image'].' title="Lịch sử AFF Cup ủng hộ Việt Nam: Philippines sở hữu thành tích toàn thua ở bán kết">
                    <h4>'.$row['tintuc_name'].'</h4>
                </a>
                <p>'.$row['tintuc_content'].'</p>
            </div>';
        echo '<hr>';
        echo '   
            <div class="child-3">
                <a href=' . $row['id'] . '>
                    <img src='.$row['tintuc_image'].' title="Lịch sử AFF Cup ủng hộ Việt Nam: Philippines sở hữu thành tích toàn thua ở bán kết">
                    <h4>'.$row['tintuc_name'].'</h4>
                </a>
                <p>'.$row['tintuc_content'].'</p>
            </div>';
        echo '<hr>';
        echo '   
            <div class="child-3">
                <a href=' . $row['id'] . '>
                    <img src='.$row['tintuc_image'].' title="Lịch sử AFF Cup ủng hộ Việt Nam: Philippines sở hữu thành tích toàn thua ở bán kết">
                    <h4>'.$row['tintuc_name'].'</h4>
                </a>
                <p>'.$row['tintuc_content'].'</p>
            </div>';
        echo '<hr>';

    }
    mysqli_close($conn);
    unset($sql);

    ?>
</div>
<?php include("footer.php");?>
</body>
</html>

