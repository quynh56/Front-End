<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Page</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .content{
            background-image: url("../HomePage/03_WorkPage_01_03.png");
            margin:120px;
        }
        .group4 span{
            padding:0;
            color:white;
            font-size:15px;
            float:none;
            font-weight:normal;
        }
        .post-item .blog-post{
            padding:30px 0;
            border-bottom:0.5px solid black;
        }
        .post-item .blog-post img{
            width:100%;
            border:5px solid #7f3e22;
            margin-bottom:15px;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    include ("header.php")
    ?>
    <div class="content">
        <div class="link">
            <a href="HomePage.php">home</a>
            <span>--></span>
            <a href="Blogpage.php" class="active">blog</a>
            <hr>
        </div>

        <div class="row">
            <div class="column-7 post-item">
                <div style="padding:20px 40px 40px">
                    <div class="blog-post">
                        <img src="../HomePage/01_WorkPage_ItemDetail.jpg" alt="">
                        <span><i class="fa fa-television" aria-hidden="true"></i></span>
                        <div class="group4">
                            <h3>Krili havtret hyo gustripast</h3>
                            <p>Krili havtret hyo gustripast</p>
                        </div>
                        <div class="group4" style="float:right">
                            <h3>3.30.11</h3>
                            <p>Posted:<span>Admin</span></p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <img src="../HomePage/01_WorkPage_ItemDetail.jpg" alt="">
                        <span><i class="fa fa-television" aria-hidden="true"></i></span>
                        <div class="group4">
                            <h3>Krili havtret hyo gustripast</h3>
                            <p>Krili havtret hyo gustripast</p>
                        </div>
                        <div class="group4" style="float:right">
                            <h3>3.30.11</h3>
                            <p>Posted:<span>Admin</span></p>
                        </div>
                    </div>
                    <div class="blog-post">
                        <img src="../HomePage/01_WorkPage_ItemDetail.jpg" alt="">
                        <span><i class="fa fa-television" aria-hidden="true"></i></span>
                        <div class="group4">
                            <h3>Krili havtret hyo gustripast</h3>
                            <p>Krili havtret hyo gustripast</p>
                        </div>
                        <div class="group4" style="float:right">
                            <h3>3.30.11</h3>
                            <p>Posted:<span>Admin</span></p>
                        </div>
                    </div>
                    <div style="float:right; padding-top:15%;">
                        <a href="#prev" class="prev">&#10094;</a>
                        <a href="#next" class="next">&#10095;</a>
                    </div>
                </div>
            </div>
            <div class="column-3 sidebar">
                <div class="selection" style="margin:50px 10px 10px 10px">
                    <button>Newest</button>
                    <button>Top Rated</button>
                    <button>Subject</button>
                </div>
                <div class="detail">
                    <p>Mobile: <span class="text">Eget imperdiet</span></p>
                    <p>Online: <span class="text">Aliquam tempor erat</span></p>
                    <p>Mobile & Online: <span class="text">Eleifend nulla</span></p>
                    <p>IOS: <span class="text">Lectus nec eget</span></p>
                    <p>Mobile: <span class="text"> Laoreet donec & quis</span></p>
                </div>
                <div class="mydot">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <div class="start-project">
                    <h3>Start your Project</h3>
                    <p>Donec pellentesque, justo eget imperd viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Erat
                        quis nulla eget pharetra lorem nec quis non!</p>
                    <p>Get in Touch: <span class="text"> Just say, "hi!"</span></p>
                    <div class="myform">
                        <input type="text" name="text" placeholder="you@company.com" class="myinput">
                        <button>Submit</button>
                    </div>
                </div>
                <div class="mydot">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <div class="comment">
                    <h3>Last Comments</h3>
                    <div class="check">
                        <label class="check-content">John Doe <span class="time-ago"></span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <p>Nunc xommodo alliquarum non orci...</p>
                        </label>
                    </div>
                    <div class="check">
                        <label class="check-content">John Doe <span class="time-ago"></span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <p>Nunc xommodo alliquarum non orci...</p>
                        </label>
                    </div>
                    <div class="check">
                        <label class="check-content">John Doe <span class="time-ago"></span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <p>Nunc xommodo alliquarum non orci...</p>
                        </label>
                    </div>
                    <div class="check">
                        <label class="check-content">John Doe <span class="time-ago"></span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            <p>Nunc xommodo alliquarum non orci...</p>
                        </label>
                    </div>
                </div>
                <div class="mydot">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <img src="../HomePage/04_WorkPage_ItemDetail_03.png" alt="" class="mytag">
            </div>
        </div>
        <?php
        include("timeline.php")
        ?>
        <?php
        include ("footer.php")
        ?>
    </div>
</div>
</body>
</html>
