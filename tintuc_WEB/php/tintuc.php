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
<?php include("header.php"); ?>

<div class="bai-viet">

    <div class="row">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "web");
        mysqli_query($conn, "SET NAMES UTF8");
        $sql = "SELECT * FROM tintuc LIMIT 0,2 ";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die ("không thực hiện được:" . mysqli_error($conn));
            exit();
        }

        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="child col">
                <a href='tintuc-content/thongtin.php ?id=<?php echo $row['id'];?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                    <h4> <?php echo $row['tintuc_name']; ?></h4>
                </a>
                <p><?php echo $row['tintuc_content']; ?></p>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
    $sql = "SELECT * FROM tintuc LIMIT 2,4 ";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die ("không thực hiện được:" . mysqli_error($conn));
        exit();
    }

    while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="child-3">

            <a href='tintuc-content/thongtin.php?id=<?php echo $row['id'];?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                <h4> <?php echo $row['tintuc_name']; ?></h4>
            </a>
            <p><?php echo $row['tintuc_content']; ?></p>
        </div>
        <hr>
        <?php
    }
    ?>
    <div>
        <div class="owl-carousel owl-theme">
            <?php
            $sql = "SELECT * FROM tintuc LIMIT 6,7 ";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die ("không thực hiện được:" . mysqli_error($conn));
                exit();
            }

            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="item">

                    <a href='tintuc-content/thongtin.php?id=<?php echo $row['id'];?>'><img src='<?php echo $row['tintuc_image']; ?>' alt="">
                        <h4> <?php echo $row['tintuc_name']; ?></h4>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>
</body>
</html>