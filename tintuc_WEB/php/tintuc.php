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
    $sql ="SELECT DISTINCT * FROM tintuc LIMIT 0,14 ";
    $result = mysqli_query($conn,$sql);

    if(!$result) {
        die ("không thực hiện được:" . mysqli_error($conn));
        exit();
    }

    while($row = mysqli_fetch_array($result)){
    ?>
    <div class="row">
        <div class="child col">
            <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                <h4> <?php echo $row['tintuc_name']; ?></h4>
            </a>
            <p><?php echo $row['tintuc_content']; ?></p>
        </div>
        <div class="child-2 col">
            <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                <h4> <?php echo $row['tintuc_name']; ?></h4>
            </a>
            <p><?php echo $row['tintuc_content']; ?></p>
        </div>
    </div>

    <div class="child-3">
        <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
            <h4> <?php echo $row['tintuc_name']; ?></h4>
        </a>
        <p><?php echo $row['tintuc_content']; ?></p>
    </div>
    <hr>

    <div class="child-3">
        <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
            <h4> <?php echo $row['tintuc_name']; ?></h4>
        </a>
        <p><?php echo $row['tintuc_content']; ?></p>
    </div>
    <hr>

    <div class="child-3">
        <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
            <h4> <?php echo $row['tintuc_name']; ?></h4>
        </a>
        <p><?php echo $row['tintuc_content']; ?></p>
    </div>
    <hr>

    <div class="child-3">
        <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
            <h4> <?php echo $row['tintuc_name']; ?></h4>
        </a>
        <p><?php echo $row['tintuc_content']; ?></p>
    </div>
    <hr>

    <div class="child-3">
        <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
            <h4> <?php echo $row['tintuc_name']; ?></h4>
        </a>
        <p><?php echo $row['tintuc_content']; ?></p>
    </div>
    <hr>
    <div>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
            </div>
            <div class="item">
                <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
            </div>
            <div class="item">
                <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
            </div>
            <div class="item">
                <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
            </div>
            <div class="item">
                <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
            </div>
            <div class="item">
                <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
            </div>
            <div class="item">
                <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
            </div>
            <div class="item">
                <a href='<?php echo $row['id']; ?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
            </div>
        </div>

    </div>

    <?php
    }
    ?>
<?php include("footer.php");?>
</body>
</html>

