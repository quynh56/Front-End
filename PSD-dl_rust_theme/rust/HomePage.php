<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        body{
            background-image: url("../HomePage/04_HomePage.jpg");
            background-repeat:no-repeat;
            background-size:cover;
            margin:0;
        }
        .content{
            background-image: url("../HomePage/05_HomePage.jpg");
            top:500px;
        }
        .step{
            margin-top:0 ;
            margin-bottom:100px;
        }
        .research, .work, .deliver{
            padding: 0 40px;
        }
    </style>

</head>
<body>
<div class="container">
   <?php
   include("header.php")
   ?>
    <div class="content">
       <div style="padding:20px 25px">
           <div class="title">
               <span class="prev">&#10094;</span>
               <span class="next">&#10095;</span>
               <p>Featured Title</p>
           </div>
           <div class="row featured-info">
               <div class="column">
                   <div class="row">
                       <div class="column-33">
                           <img src="../HomePage/01_HomePage.jpg" alt="">
                       </div>
                       <div class="column-33">
                           <img src="../HomePage/02_HomePage.jpg" alt="">
                       </div>
                       <div class="column-33">
                           <img src="../HomePage/03_HomePage.jpg" alt="">
                       </div>
                   </div>
               </div>
               <div class="column description">
                   <span class="cert"><i class="fa fa-certificate" aria-hidden="true"></i></span>
                   <div class="group4">
                       <h2>Krili havtret hyo gustripast</h2>
                       <p>Krili havtret hyo gustripast</p>
                   </div>
                   <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi orn. Nam tincidunt vestibulum lacus nec pharetra.
                       Nunc commodo aliquam lectus quis bibendum. Proin ut erat quis nulla tempor imperdiet ac et lorem</p>
               </div>
           </div>
           <hr style="margin:0 20px;">

           <div class="row step">
               <div class="column-33">
                   <div class="research">
                       <div class="circle">
                           <span><i class="fa fa-book" aria-hidden="true"></i></span>
                       </div>
                       <h3>RESEARCH</h3>
                       <p>Donec pellentesque, justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum.</p>
                       <button class="btn">Learn more</button>
                   </div>
               </div>
               <div class="column-33">
                   <div class="work">
                       <div class="circle">
                           <span><i class="fa fa-cog" aria-hidden="true"></i></span>
                       </div>
                       <h3>WORK</h3>
                       <p>Justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Nam tincidunt.</p>
                       <button class="btn">Learn more</button>
                   </div>
               </div>
               <div class="column-33">
                   <div class="deliver">
                       <div class="circle">
                           <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                       </div>
                       <h3>DELIVER</h3>
                       <p>Justo eget imperdiet viverra, lectus mi ornare arcu, non laoreet lacus lacus eleifend orci. Nam tincidunt vestibulum lacus nec pharetra. Nunc commodo aliquam lectus quis bibendum. Nam tincidunt.</p>
                       <button class="btn">Learn more</button>
                   </div>
               </div>
           </div>

           <div class="slider">
               <div class="btn-middle">
                   <button>Lastest Press</button>
                   <button>Testimonials</button>
                   <button>Blog Posts</button>
               </div>
               <div class="post">
                   <div class="row post-middle">
                       <div class="column-33">
                           <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                           <div class="group4">
                               <h3>Gizmodo</h3>
                               <p>Eleifend ni Huthy - 5/20/2011</p>
                           </div>
                           <p>Donec pellentesque, justo eget imperdiet viverra,lectus mi ornare arcu, non laoreet lacus lacus eleifend.</p>
                       </div>
                       <div class="column-33">
                           <span><i class="fa fa-film" aria-hidden="true"></i></span>
                           <div class="group4">
                               <h3>FreelanceSwitch</h3>
                               <p>Eleifend ni Huthy - 5/3/2011</p>
                           </div>
                           <p>Pellentesque, justo eget imperdiet viverra,lectus mi ornare arcu</p>
                       </div>
                       <div class="column-33">
                           <span><i class="fa fa-commenting-o" aria-hidden="true"></i></span>
                           <div class="group4">
                               <h3>Mashable</h3>
                               <p>Eleifend ni Huthy - 4/20/2011</p>
                           </div>
                           <p>Justo eget imperdiet viverra,lectus mi ornare arcu, non laoreet lacus lacus eleifend mi ornare lectus or.</p>
                       </div>
                   </div>
                   <a href="#prev" class="prev">&#10094;</a>
                   <a href="#next" class="next">&#10095;</a>
               </div>
           </div>

           <?php
           include ("timeline.php")
           ?>
       </div>
        <?php
        include_once ("footer.php")
        ?>

    </div>
</div>
</body>
</html>