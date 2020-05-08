

<?php
$conn = mysqli_connect("localhost","root","","web");
if(mysqli_errno($conn)){
    echo "kết nối không thành công".mysqli_error($conn)."<br>";
}else{
    echo "kết nối thành công"."<br>";
}
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
        echo "thành công"."<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
    }
}
mysqli_close($conn);
unset($sql);
?>
