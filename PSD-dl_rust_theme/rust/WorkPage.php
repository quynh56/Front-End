<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work Page</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .content{
            background-image: url("../HomePage/03_WorkPage_01_03.png");

        }
        .column{
            padding-top:30px;
        }
       /* .content .selection{
            border-radius:7px;
            overflow:hidden;
            border-bottom:1px solid #242628;
            margin:20px 35%;
            max-width:330px;

        }
        .content .selection button{
            width:110px;
            border:none;
            padding:10px 16px;
            text-align:center;
            float:left;
            margin:0;
            color:#5b5b5b;
            background-image: linear-gradient(#1b1d1f,#1f2123,#232527);
        }
        .selection button:hover{
            color:white;
            background-image: linear-gradient(#2a2d2f,#25282a,#232627,#212426);
        }*/
        .krili span{
            font-size:36px;
            padding: 0 12px;
        }
        .column .film:hover h3, .column .film:hover p{
            color:white;
        }
        .film .group4:not(p){color:white}
        .column .film:hover span{
            color:#7f3e22;
        }
       /* .number{
            margin:5% 35%;
        }
        .number a{
            color:#7f3e22;;
            padding:2px;
            display:inline-block;
            cursor:pointer;
            text-decoration:none;
        }
        .number .prev, .number .next{
            font-size:16px;
            text-decoration: none;
            color:#2c3032;
            background-image:linear-gradient(#ad5e35,#9b512e,#7f3e22);
            padding:6px 14px;
            border-radius:50%;
            display:inline-block;
            margin:0 10px;
        }
        .number a:hover{
            color:white;
        }*/
    </style>
</head>
<body>
<div class="container">
    <?php
    include("header.php")
    ?>
    <div class="logo">Seeing is Believeing <br> ... or something like that.</div>
    <div class="content">
        <div class="link">
            <a href="HomePage.php">home</a>
            <span>--></span>
            <a href="WorkPage.php">work</a>
            <span>--></span>
            <a href="#interactive" class="active">Interactive</a>
            <hr>
        </div>
        <div style="padding:20px 25px">
            <div class="selection">
                <button>Print</button>
                <button class="active">Interactive</button>
                <button>Video</button>
            </div>
            <div class="row">
                <div class="column">
                    <div class="film">
                        <img src="../HomePage/01_AboutPage.jpg" alt="">
                        <div class="krili">
                            <span><i class="fa fa-television" aria-hidden="true"></i></span>
                            <div class="group4">
                                <h3>Krili havtret hyo gustripast</h3>
                                <p>Krili havtret hyo gustripast</p>
                            </div>
                            <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla </p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="film">
                        <img src="../HomePage/01_AboutPage.jpg" alt="">
                        <div class="krili">
                            <span><i class="fa fa-mobile" aria-hidden="true"></i></span>
                            <div class="group4">
                                <h3>Nam Tincidunt Lacus</h3>
                                <p>Krili havtret hyo gustripast</p>
                            </div>
                            <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla </p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="film">
                        <img src="../HomePage/01_AboutPage.jpg" alt="">
                        <div class="krili">
                            <span><i class="fa fa-television" aria-hidden="true"></i></span>
                            <div class="group4">
                                <h3>Krili havtret hyo gustripast</h3>
                                <p>Krili havtret hyo gustripast</p>
                            </div>
                            <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla </p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="film">
                        <img src="../HomePage/01_AboutPage.jpg" alt="">
                        <div class="krili">
                            <span><i class="fa fa-television" aria-hidden="true"></i></span>
                            <div class="group4">
                                <h3>Krili havtret hyo gustripast</h3>
                                <p>Krili havtret hyo gustripast</p>
                            </div>
                            <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla </p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="film">
                        <img src="../HomePage/01_AboutPage.jpg" alt="">
                        <div class="krili">
                            <span><i class="fa fa-mobile" aria-hidden="true"></i></span>
                            <div class="group4">
                                <h3>Nam Tincidunt Lacus</h3>
                                <p>Krili havtret hyo gustripast</p>
                            </div>
                            <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla </p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="film">
                        <img src="../HomePage/01_AboutPage.jpg" alt="">
                        <div class="krili">
                            <span><i class="fa fa-mobile" aria-hidden="true"></i></span>
                            <div class="group4">
                                <h3>Nam Tincidunt Lacus</h3>
                                <p>Krili havtret hyo gustripast</p>
                            </div>
                            <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="number">
                <a href="#" class="prev">&#10094;</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href="#">9</a>
                <a href="#">10</a>
                <a href="#">11</a>
                <a href="#">...</a>
                <a href="#">33</a>
                <a href="#" class="next">&#10095;</a>
            </div>
            <?php
            include ("timeline.php")
            ?>

        </div>
        <?php
        include("footer.php")
        ?>
    </div>
</div>
</body>
</html>
