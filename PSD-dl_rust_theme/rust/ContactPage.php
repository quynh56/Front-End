<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .content{
            background-image: url("../HomePage/07_ContactPage_03.png");
        }
        .content img{
            width:100%;
            margin-bottom:20px;
        }
        hr{
            border:0.5px solid black;
            margin:auto 50px;
        }
        .thanks{
            text-align:Center;
            padding-top:50px;
        }
        .thanks p{
            margin:0;
        }
        .cmt-entry{
            padding:40px 10px 40px 20px;
        }
        .cmt-entry h3{
            color:white;
            font-size:28px;
            font-style: italic;
        }
        .myform{
            border-top:0.5px solid black;
            padding:20px 0
        }
        .myform .myinput, textarea{
            width:100%;
            max-width:100%;
            margin:10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <?php include_once ("header.php")?>
    <div class="logo">We Create Award-Winning <br>Brand Experience</div>
    <div class="content">
        <div class="link">
            <a href="HomePage.php">home</a>
            <span>--></span>
            <a href="ContactPage.php" class="active">contact</a>
        </div>
        <img src="../HomePage/01_ContactPage.jpg" alt="">
        <hr>
        <div class="row">
            <div class="column-25">
                <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                <div class="group4">
                    <h3>Atlanta</h3>
                    <p>Corporate Hedquarters</p>
                </div>
                <div class="detail">
                    <p><b>1234 Peachtree Street-Atlanta</b></p>
                    <p>Email: <span class="text">info@comapy.com</span></p>
                    <p>Phone <span class="text">555-123-4567</span></p>
                    <p>Fax: <span class="text">John D., Director of PR</span></p>
                </div>
            </div>
            <div class="column-25">
                <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                <div class="group4">
                    <h3>New York</h3>
                    <p>Corporate Hedquarters</p>
                </div>
                <div class="detail">
                    <p><b>999 14th Street N.W. - NY</b></p>
                    <p>Email: <span class="text">info@comapy.com</span></p>
                    <p>Phone <span class="text">555-123-4567</span></p>
                    <p>Fax: <span class="text">John D., Director of PR</span></p>
                </div>
            </div>
            <div class="column-25">
                <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                <div class="group4">
                    <h3>London</h3>
                    <p>Corporate Hedquarters</p>
                </div>
                <div class="detail">
                    <p><b>Upper Westgate House - London</b></p>
                    <p>Email: <span class="text">info@comapy.com</span></p>
                    <p>Phone <span class="text">555-123-4567</span></p>
                    <p>Fax: <span class="text">John D., Director of PR</span></p>
                </div>
            </div>
            <div class="column-25">
                <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                <div class="group4">
                    <h3>Tokyo</h3>
                    <p>Corporate Hedquarters</p>
                </div>
                <div class="detail">
                    <p><b>322 Takasiki  - Tokyo</b></p>
                    <p>Email: <span class="text">info@comapy.com</span></p>
                    <p>Phone <span class="text">555-123-4567</span></p>
                    <p>Fax: <span class="text">John D., Director of PR</span></p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:40px ">
            <div class="column">
               <div style="padding:40px 10px 40px 20px">
                   <div class="film">
                       <img src="../HomePage/01_AboutPage.jpg" alt="">
                       <span><i class="fa fa-film" aria-hidden="true"></i></span>
                       <div class="group4">
                           <h3>Krili havtret hyo gustripast</h3>
                           <p>Krili havtret hyo gustripast</p>
                       </div>
                       <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla </p>
                   </div>
                   <div class="thanks">
                       <p style="color:White;font-size:30px; font-family:"Nirmala UI";">Thanks!</p>
                       <p>..from the entire company team.</p>
                   </div>
               </div>
            </div>
            <div class="column">
                <div class="cmt-entry">
                    <h3>Speak Up!</h3>
                    <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci.</p>
                    <div class="myform">
                        <form action="">
                            <input type="email" name="email" placeholder="Enter Email Address" class="myinput">
                            <textarea name="message" cols="30" rows="10" placeholder="Type massage here.."></textarea>
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once ("timeline.php")?>
        <?php include_once ("footer.php")?>
    </div>
</div>
</body>
</html>
