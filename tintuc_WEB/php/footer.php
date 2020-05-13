<div class="banner-right">
    <a href="#"><img src="../image/cuchoami.jpg" alt="Quảng cáo"></a>
</div>
</div>
<div id="footer">
    <div class="contact">
        <div class="footer-child row">
            <div class="col">
                <i class="fa fa-home fa-3x" aria-hidden="true"></i><p>Công Ty....</p>
            </div>
            <div class=" child-sub col">
                <i class="fa fa-mobile fa-5x" aria-hidden="true"></i><p>(+1)234567890 <br> (+1)987654321</p>
            </div>
            <div class="col">
                <i class="fa fa-envelope-open-o fa-3x " aria-hidden="true"></i> <p>GDT@gmail.com</p>
            </div>
        </div>

    </div>

    <div class="custom">
        <button id="hien"><i class="fa fa-comments fa-2x" aria-hidden="true"></i>Đóng góp ý kiến</button>
        <div class="form">

            <form action="" method="POST">
                <label>Nhập thông tin của bạn</label>
                <input type="text" name="name" placeholder="Nhập tên của bạn"  >
                <input type="email" name="email" placeholder="Nhập email của bạn"  >
                <input type="tel" name="usrtel" placeholder="Nhập số điện thoại của bạn"  >
                <label>Tin nhắn</label>
                <textarea name="message"  cols="30" rows="7"></textarea>
                <input type="submit" value="submit">
            </form>



            <?php
            $conn = mysqli_connect("localhost","root","","web");
            if(mysqli_errno($conn)){
                /* echo "kết nối không thành công".mysqli_error($conn)."<br>";
             }else{
                 echo "kết nối thành công"."<br>";
             */}
            $sql = "CREATE TABLE IF NOT EXISTS y_kien (id int(20) primary key not null auto_increment, name VARCHAR(30) , email VARCHAR(50), usrtel INT,
 message VARCHAR(200))";
            if(mysqli_query($conn,$sql)){
                /*  echo "thành công"."<br>";
              }else{
                  echo "có lỗi xảy ra".mysqli_error($conn)."<br>";
              */}
            mysqli_close($conn);
            unset($sql);
            ?>


            <?php
            $conn = mysqli_connect("localhost","root","","web");
            if(mysqli_errno($conn)){
                /* echo "kết nối không thành công".mysqli_error($conn)."<br>";
             }else{
                 echo "kết nối thành công"."<br>";
             */}
            $name ="";
            $email="";
            $message="";
            $usrtel="";
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["name"])) {
                    $name = $_POST["name"];
                }
                if (isset($_POST["email"])) {
                    $email = $_POST["email"];
                }
                if (isset($_POST["usrtel"])) {
                    $usrtel = $_POST["usrtel"];
                }
                if (isset($_POST["message"])) {
                    $message = $_POST["message"];
                }

                $sql = "INSERT INTO y_kien ( name, email, usrtel, message) VALUES('$name','$email','$usrtel','$message')";
                if (mysqli_query($conn, $sql)) {
                    echo "gửi thành công"."<br>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
                }
            }
            mysqli_close($conn);
            unset($sql);
            ?>

        </div>
    </div>

</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#hien").click(function() {

            $(".form").toggle();
        });
        $(".owl-carousel").owlCarousel({
            loop:false,
            margin:10,
            /*                navText:["<i class='fa fa-arrow-right fa-2x' aria-hidden='true'></i>,<i class='fa fa-arrow-right fa-2x' aria-hidden='true'></i>"],*/
            nav:true,
            responsive:{
                0:{
                    item:1
                },
                600:{
                    item:3
                },
                1000:{
                    item:5
                }
            }
        });
    });

</script>