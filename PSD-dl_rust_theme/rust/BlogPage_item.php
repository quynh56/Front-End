<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Page Item</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .content{
            margin:120px;
            background-image: url("../HomePage/06_BlogPage_ItemDetail_03.png");
        }
        .text-border{
            border-bottom:0.5px solid black;
            border-top:0.5px solid black;
            padding:30px 0;
            color:#7b7a6d;
        }

        .fakeimg {
            border:3px solid #9b512e;
            background: #242729;
            margin-left: 10px;
        }

        .column-3{
            padding-right:20px;
        }
        textarea{
            width:100%;
            max-width:100%;
            margin-bottom:20px;
        }
        .footer .row{
            display:grid;
            grid-template-columns:repeat(4, 1fr);
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    include_once ("header.php")
    ?>
    <div class="content">
        <div class="link">
            <a href="HomePage.php">home</a>
            <span>--></span>
            <a href="WorkPage.php">work</a>
            <span>--></span>
            <a href="WorkPage_item.php">Interactive</a>
            <span>--></span>
            <a href="" class="active">Krili havtrat hyo gustripast</a>
            <hr>
        </div>
        <div class="row">
            <div class="column-7">
                <div style="padding:40px">
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

                    <div class="text-border">
                        <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus
                            eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.
                            Proin ut erat quis nulla tempor imperdiet ac et lorem. Ellentesque, justo eget imperdiet viverra,
                            lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra.
                            Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                        <p>ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci.
                            Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.
                            Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                        <p>- eget imperdiet viverra</p>
                        <p> - aliquam lectus quis</p>
                        <p>- tincidunt vestibulum lacus nec</p>
                        <p>ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci.
                            Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat
                            quis nulla tempor imperdiet ac et lorem. ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu,
                            non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam
                            lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                    </div>
                    <div style="padding:20px 0; margin-bottom:60px">
                        <div class="hagtag">
                            <div class="tag">
                                <button>resource</button>
                            </div>
                        </div>
                        <div class="hagtag">
                            <div class="tag">
                                <button>design</button>
                            </div>
                        </div>
                        <div class="hagtag">
                            <div class="tag">
                                <button>art</button>
                            </div>
                        </div>
                        <div class="hagtag">
                            <div class="tag">
                                <button>resource</button>
                            </div>
                        </div>
                        <div class="hagtag">
                            <div class="tag">
                                <button>art</button>
                            </div>
                        </div>
                        <button class="btn-right"> share this</button>
                    </div>
                    <div class="comment-number">
                        <h3>Latest Comments</h3>
                        <p class="text-right">33 Comments</p>
                        <hr>
                    </div>
                    <div class="cmt-border">
                        <div class="row cmt-01">
                            <div class="column-2">
                               <div style="padding-bottom:20px;border-bottom:0.5px solid black;">
                                   <div class="fakeimg" style="width:40px;height:40px"></div>
                               </div>
                                <a href="" class="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                <a href="#" class="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                <a href="#" class="icon-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                            <div class="column-8">
                                <div style="display:inline-block">
                                    <h3>John Doe</h3>
                                    <span class="time-ago"></span>
                                </div>
                                <div class="text-right">
                                    <p>12Likes, 0 Dislikes</p>
                                </div>
                                <p>Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem. ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                                <div class="text-right text-bottom">
                                    <a href="#flag" class="flag">flag <span><i class="fa fa-flag" aria-hidden="true"></i></span></a>
                                    <a href="#quote">quote <span><i class="fa fa-commenting" aria-hidden="true"></i></span></a>
                                    <a href="#reply">reply <span><i class="fa fa-comment-o" aria-hidden="true"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                       <div class="cmt-border">
                           <div class="row cmt-01">
                               <div class="column-2">
                                   <div style="padding-bottom:20px;border-bottom:0.5px solid black;">
                                       <div class="fakeimg" style="width:40px;height:40px"></div>
                                   </div>
                                   <a href="" class="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                   <a href="#" class="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                   <a href="#" class="icon-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                               </div>
                               <div class="column-8">
                                  <div style="display:inline-block">
                                      <h3>Kriss Epps</h3>
                                      <span class="time-ago"></span>
                                  </div>
                                   <div class="text-right">
                                       <p>12Likes, 0 Dislikes</p>
                                   </div>
                                   <p>Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem. ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                                   <div class="text-right text-bottom">
                                       <a href="#flag " class="flag">flag <span><i class="fa fa-flag" aria-hidden="true"></i></span></a>
                                       <a href="#quote">quote <span><i class="fa fa-commenting" aria-hidden="true"></i></span></a>
                                       <a href="#reply">reply <span><i class="fa fa-comment-o" aria-hidden="true"></i></span></a>
                                   </div>
                               </div>
                           </div>
                       </div>
                        <div class="cmt-border">
                            <div class="row cmt-01">
                                <div class="column-2">
                                    <div style="padding-bottom:20px;border-bottom:0.5px solid black;">
                                        <div class="fakeimg" style="width:40px;height:40px"></div>
                                    </div>
                                    <a href="" class="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                    <a href="#" class="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>
                                    <a href="#" class="icon-link"><i class="fa fa-link" aria-hidden="true"></i></a>
                                </div>
                                <div class="column-8">
                                    <div style="display:inline-block">
                                        <h3>Alan Kingsley</h3>
                                        <span class="time-ago"></span>
                                    </div>

                                    <div class="text-right">
                                        <p>12Likes, 0 Dislikes</p>
                                    </div>
                                    <p>Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem. ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                                    <div class="text-right text-bottom">
                                        <a href="#flag" class="flag">flag <span><i class="fa fa-flag" aria-hidden="true"></i></span></a>
                                        <a href="#quote">quote <span><i class="fa fa-commenting" aria-hidden="true"></i></span></a>
                                        <a href="#reply">reply <span><i class="fa fa-comment-o" aria-hidden="true"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column-3">
                            <h3>Speaking Up!</h3>
                            <hr>
                            <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci.</p>
                        </div>
                        <div class="column-7" style="padding:0;">

                            <textarea name="message" id="" cols="30" rows="10"></textarea>
                            <button class="btn-right">Submit</button>
                        </div>
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
            <!--<div class="column-3 sidebar">
                <div class="selection" style="margin:50px 10px 10px 10px">
                    <button>Print</button>
                    <button class="active">Interactive</button>
                    <button>Video</button>
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
            </div>-->
        </div>
        <?php include_once ("timeline.php")?>
        <?php include_once ("footer.php") ?>
    </div>
</div>
</body>
</html>