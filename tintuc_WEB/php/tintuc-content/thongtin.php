<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<?php include("header2.php"); ?>
<div class="baiviet">

    <div class="nav">
        <ul>
            <li><a href="#">ĐỜI SỐNG</a></li>
            <li><a href="#">XEM-ĂN-CHƠI</a></li>
            <li><a href="#">DU LỊCH</a></li>
        </ul>
    </div>
    <hr>
    <div class="baiviet-child">
        <?php
        $get = $_GET['id'];
        $conn = mysqli_connect("localhost", "root", "", "web");
        mysqli_query($conn, "set names utf8");
        $sql = "SELECT thongtin_name FROM thongtin   where  id =" . $get; //lấy ID,
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die ("không thực hiện được:" . mysqli_error($conn));
            exit();
        }

        while ($row = mysqli_fetch_array($result)){
            ?>
        <div class="baiviet-sub">

            <h1><?php
                $sql = "SELECT thongtin_name FROM thongtin   where  id =" . $get; //lấy ID,
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die ("không thực hiện được:" . mysqli_error($conn));
                    exit();
                }

                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <?php echo $row['thongtin_name']; ?><?php } ?>
            </h1>
            <div class="time">
                <p><?php
                    $sql = "SELECT thongtin_span,content_p FROM thongtin   where  id =" . $get; //lấy ID,
                    $result = mysqli_query($conn, $sql);

                    if (!$result) {
                        die ("không thực hiện được:" . mysqli_error($conn));
                        exit();
                    }

                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                    <span><?php echo $row['thongtin_span'] ?></span><?php echo $row['content_p'] ?>
                    <?php

                    }
                    ?>
                </p>

                <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo date("h:i d-m-Y "); ?></p>
            </div>

            <div class="button">
                <div class="button-child"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> chia sẻ</a>
                </div>
                <div class="button-child"><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> thích</a>
                </div>
                <div class="right"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></div>
            </div>
        </div>


        <div class="baiviet-sub-2">


            <h4> <?php
                $sql = "SELECT tieude_content FROM thongtin   where id =" . $get; //lấy ID,
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die ("không thực hiện được:" . mysqli_error($conn));
                    exit();
                }

                while ($row = mysqli_fetch_array($result)) {
                    ?><?php echo $row['tieude_content']; ?>
                    <?php
                }
                ?>
            </h4>


            <ul>
                <?php
                $sql = "SELECT ul_li FROM thongtin   where id =" . $get; //lấy ID,
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    die ("không thực hiện được:" . mysqli_error($conn));
                    exit();
                }

                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <li><a href="#"><?php echo $row['ul_li']; ?></a></li>
                    <?php
                }
                ?>

            </ul>
            <?php
            $sql = "SELECT diachi,STT,thongtin_content,thongtin_image,chuthich FROM thongtin   where id =" . $get; //lấy ID,
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die ("không thực hiện được:" . mysqli_error($conn));
                exit();
            }

            while ($row = mysqli_fetch_array($result)) {
            ?>
            <h4><?php echo $row['STT']?></h4>
            <p><?php echo $row['diachi']?></p>
            <p><?php echo $row['thongtin_content']; ?></p>

            <div>
                <img src='<?php echo $row['thongtin_image']; ?>'  height="400px" width="400px;">
            </div>
            <p><?php echo $row['chuthich']; ?>
                <?php
                }
                ?>
        </div>
        <?php
        }
        ?>
    </div>

</div>

<?php include("footer2.php"); ?>