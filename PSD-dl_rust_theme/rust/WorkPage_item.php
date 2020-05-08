<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Work Page Item</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .content{
            background-image: url("../HomePage/03_WorkPage_01_03.png");
            margin:120px;
        }

        .tag p{
            width:90px;
            color:white;
            padding:12px 16px;
            background-image:linear-gradient(#9f4e28,#974926,#8d4323,#863f21);
            border-radius:4px 0 0 4px;
        }
        .tag{
            position:relative;
        }
        .tag::after{
            content:"";
            position:absolute;
            left:70%;
            transform:translate(-55%);
            top:0;
            width:0;
            height:0;
            border-top:25px solid transparent;
            border-bottom:25px solid transparent;
            border-left:50px solid #9f4e28;
        }
    </style>
</head>
<body>
<div class="container">
    <?php
    include("header.php")
    ?>
    <div class="content">
        <div class="link">
            <a href="">home</a>
            <span>--></span>
            <a href="">work</a>
            <span>--></span>
            <a href="">Interactive</a>
            <span>--></span>
            <a href="" class="active">Krili havtrat hyo gustripast</a>
            <hr>
        </div>
        <div class="row">
            <div class="column-7 post-item">
               <div style="padding:40px">
                   <img src="../HomePage/01_WorkPage_ItemDetail.jpg" alt="" class="myimg">
                   <span><i class="fa fa-television" aria-hidden="true"></i></span>
                   <div class="group4">
                       <h3>Krili havtret hyo gustripast</h3>
                       <p>Krili havtret hyo gustripast</p>
                   </div>
                   <div class="detail">
                       <p>Client: <span class="text">Global Crop</span></p>
                       <p>Project Manager: <span class="text"> James R.Smith</span></p>
                       <p style="float:left">Project Scope: <span class="text">Eget imperdiet lectus ut qui & ac et lorem.</span></p>
                       <button class="btn-right">Visit Website</button>
                   </div>
                   <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem. Ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                   <p>ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                   <p>ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem. ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
               </div>
                <div class="row">
                    <div class="column-4">
                        <img src="../HomePage/02_WorkPage_ItemDetail.jpg" alt="" >
                    </div>
                    <div class="column-6">
                        <span><i class="fa fa-microphone" aria-hidden="true"></i></span>
                        <div class="group4">
                            <h3>John M.Doe</h3>
                            <p>Director of Marketing -Global Corp</p>
                        </div>
                        <p style="font-style:italic">
                            <span class="quotes">"</span>
                            Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra.et lorem.
                            <span class="quotes">"</span>
                        </p>
                    </div>
                </div>
               <div style="padding:40px">
                   <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem. Ellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem.</p>
                  <div style="float:right;padding-top:10%;">
                      <a href="#prev" class="prev">&#10094;</a>
                      <a href="#next" class="next">&#10095;</a>
                  </div>
               </div>
            </div>
            <div class="column-3 sidebar ">
                <div class="selection" style="margin:50px 10px 10px 10px ">
                    <button>Print</button>
                    <button class="active">Interactive</button>
                    <button>Video</button>
                </div>
                <div class="detail" style="margin:0">
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
                    <h3>Lastest Comments</h3>
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
               <!-- <div class="row">
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>resource</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>design</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>art</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>icon</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>photoshop</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>template</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>mobile</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>indesign</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>ios</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>interactive</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>push</p>
                        </div>
                    </div>
                    <div class="column-33 hagtag">
                        <div class="tag">
                            <p>online</p>
                        </div>
                    </div>

                </div>-->
            </div>
        </div>
        <?php
        include ("timeline.php")
        ?>
        <?php
        include ("footer.php")
        ?>
    </div>
</div>
</body>
</html>
