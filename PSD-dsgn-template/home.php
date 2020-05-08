<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mystyle.css">
    <style type="text/css">
        body{
            margin:0;
        }
        *{box-sizing:border-box}
        .header{
            width:100%;
            overflow:hidden;
        }
        .project{max-height:1265px;}
        .row{
            display:-ms-flex;
            display:flex;
            flex-wrap:wrap;
        }
        .column-7{flex:70%;}
        .column-3{flex:30%;}
        .column{flex:50%}
        .column-25{
            flex:25%;
            padding:0 15px;
        }
        .bg-img{
            width:100%;
            position:relative;
            height:100%;
        }
        img{
            width:100%;
        }
        .img-content{
            height:100%;
        }
        .logo{
            position:absolute;
            top:50px;
            left:170px;

        }
        .social-icon{
            margin-top:60px
        }
        .social-icon a{
            text-decoration: none;
            color:#7bcbc1;
            padding-left:15px;
            font-size:20px;
        }
        .navbar{
            position:absolute;
            top:60px;
            right:170px;
            z-index:1;
        }
        .navbar button{
            font-size:30px;
            background:#7bcbc1;
            color:white;
            padding: 45px;
            border:2px solid white;
            display:block;
            opacity:1;
        }
        .menu{
            list-style:none;
            padding:0;
            display:none;
            opacity:0;

        }
        .menu li{
            float:left;
            background:#f8c255;
            padding:50px;
        }
        .menu a{
            text-decoration:none;
            color:white;
            cursor:pointer;
        }
        .navbar:hover button{
            display:none;
            opacity:0;

        }
        .navbar:hover .menu {
            display: block;
            opacity: 1;
        }
        .project-content{
            position:relative;
        }
        .pondue{
            position:absolute;
            top:70px;
            left:90px;
        }
        .pondue h3{
            font-size:16px;
        }
         a{
            color:black;
            text-decoration: none;
         }
        .fa-arrow-right{
            color:#ebb240;
            font-weight:normal;
            padding-right:5px;
        }
        .pondue .detail{margin-bottom:70px;}
        .detail{
            margin-bottom:35px;
            font-size:10px;
        }
        .detail p{margin:0;}
        .pondue .heart{
            margin-top:100px;
            margin-left:-50px;
        }
        .heart{
            margin-top:30px;
            text-align:center;
        }
        .heart a{font-size:20px;}
        .heart span{
            color:#ff0000;
            font-size:12px;
        }
        .louis{
            position:absolute;
            top:35px;
            left:30px;
            color:white;
        }
        .louis a{color:white;}
        .p22{
            position:absolute;
            top:90px;
            right:70px;
        }
        .p22 .column{
            padding:0 20px;
        }
        .sesan{
            position:absolute;
            bottom:10px;
            padding-left: 100px;
        }
        .column-45{
            flex:45%;
            padding:0 20px;
        }
        .column-1{
            padding-left:10px;
            flex:10%;
            margin-top:35px;
        }
        .alessi{
            position:absolute;
            top:70px;
            right:20px;
        }
        .potter{
            position:absolute;
            top:25px;
            left:40px;
            max-width:170px;
        }
        .potter .detail, .fuji .detail{
            margin-bottom:15px;
        }
        .potter .heart, .fuji .heart{margin-top:20px;}
        .tabano{
            position:absolute;
            bottom:20px;
            padding-left:30px;
        }
        .tabano .detail{margin-bottom:0;}
        .fuji{
            position:absolute;
            right:50px;
            bottom:25px;
        }
        .studio, .news,.footer{ background:#e9eae2;}
        .studio-content,.new-content{padding:60px;}
        .studio .text{color:#6a6969}
        .studio .award .column{
            padding:0 20px;
        }
        hr{margin-right:20px;}
        .cv{
            color:#fd5000;
        }
        .cv .left{
            float:left;
        }
        .right{
            float:right;
            margin:16px 0;
        }
        .right a{
            color:#fd5000;

            padding-left:10px;
            text-decoration: none;
        }
        .new-content .column{
            padding:20px;
        }
        .new-content .group4 h3{
            margin-bottom:0;
        }
        .new-content .group4 p{margin-top:0}
        .new-content p{
            color:#6a6969;
            text-align:justify;
        }
        .footer-content{
            padding:150px 110px;
        }
        .footer-content .column{
            padding:0 50px;
        }
        .copyright{
            padding-bottom:54px;
            padding-left:150px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="navbar">
            <button onclick="document.getElementById('myMenu').style.display='block';"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <ul class="menu"  id="myMenu">
                <li><a href="#Home">HOME</a></li>
                <li><a href="#project">PROJECTS</a></li>
                <li><a href="#studio">STUDIO</a></li>
                <li><a href="#new">NEWS</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li style="font-size:80px;padding:13px 50px"><a  onclick="document.getElementById('myMenu').style.display='none';" >&times;</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="column-7">
                <div class="bg-img">
                    <img src="images/home_02.png" height="100%">
                    <div class="logo">
                        <img src="images/home_48.png" alt="" class="my-img">
                        <div class="social-icon">
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-glide-g" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div
            <div class="column-3">
                <div style="width:30%">
                    <img src="images/home_49.png"  class="img-content">
                </div>
            </div>
        </div>

    </div>
    <div class="project">
        <div class="row" id="myProject" >
            <div class="column-7">
                <div class="row" style="height:500px">
                    <div class="column">
                        <img src="images/home_04.png" alt="" height="100%">
                    </div>
                    <div class="column project-content">
                        <img src="images/home_05.png" alt="">
                        <div class="pondue">
                            <h3>PONDUE</h3>
                            <div class="detail">
                                <p><b>PROJECT ASSISTANT:</b> <span>FRANCESCO DOMPIERI</span></p>
                                <p><b>MATERIAL:</b> <span>GLASS AND METAL</span></p>
                                <p><b>TYPOLOGY:</b> <span>SUSPENSION LAMP</span></p>
                                <p><b>CLIENT:</b> <span>DAVID DESIGN</span></p>
                                <p><b>YEAR:</b> <span>2014</span></p>
                            </div>
                            <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> VIEW PROJECT</a>
                            <div class="heart">
                                <a><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                <br>
                                <span>+200</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="height:465px">
                    <div class="column-3 project-content">
                        <img src="images/home_11.png" alt="" height="100%">
                        <div class="louis">
                            <h3>LOUIS XX</h3>
                            <div class="detail">
                                <p><b>DESIGNER: </b><span>PHILIPPE STARCK</span></p>
                                <p><b>YPOLOGY: </b><span>CHAIRS</span></p>
                                <p><b>CLIENT: </b><span>VITRA</span></p>
                                <p><b>YEAR</b><span>2012</span></p>
                            </div>
                            <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> VIEW PROJECT</a>
                            <div class="heart">
                                <a><i class="fa fa-heart-o" aria-hidden="true"></i></a><br>
                                <span>+200</span>
                            </div>
                        </div>
                    </div>
                    <div class="column-7 project-content">
                        <img src="images/home_10.png" alt="" height="100%">
                        <div class="p22">
                           <div class="row">
                               <div class="column">
                                   <h3 style="margin-top:0;">395-396 P22</h3>
                                   <div class="detail">
                                       <p><b>DESIGNER: </b><span>PATRICK NORGUET</span></p>
                                       <p><b>TYPOLOGY: </b><span>ARMCHAIRS</span></p>
                                       <p><b>CLIENT: </b><span>CASSINA</span></p>
                                       <p><b>YEAR: </b><span>2013</span></p>
                                   </div>
                               </div>
                               <div class="column">
                                   <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> VIEW PROJECT</a><br>
                                   <div class="heart">
                                       <a><i class="fa fa-heart-o" aria-hidden="true"></i></a><br>
                                       <span>+200</span>
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="height:300px">
                    <div class="column-7 project-content" style="height:300px">
                        <img src="images/home_15.png" alt="" height="100%">
                        <div class="sesan">
                            <div class="row">
                                <div class="column-45" >
                                    <h3 style="margin-top:0;">SESANN</h3>
                                    <div class="detail" style="margin-bottom: 0">
                                        <p><b>DESIGNER: </b><span>GIANFRANCO FRATTINI</span></p>
                                        <p><b>TYPOLOGY: </b><span>ARMCHAIRS</span></p>
                                        <p><b>CLIENT: </b><span>CASSINA</span></p>
                                        <p><b>YEAR: </b><span>1970</span></p>
                                    </div>
                                </div>
                                <div class="column-45" style="margin-top:35px;">
                                    <a href="#" ><i class="fa fa-arrow-right" aria-hidden="true"></i> VIEW PROJECT</a>
                                </div>
                                <div class="column-1 heart" >
                                    <a><i class="fa fa-heart-o" aria-hidden="true"></i></a><br>
                                    <span>+200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column-3 project-content" style="height:300px" >
                        <img src="images/home_17.png" alt="" height="100%">
                        <div class="alessi">
                            <h3>ALESSI</h3>
                            <div class="detail">
                                <p><b>DESIGNER: </b><span>PIERO LISSONI</span></p>
                                <p><b>CLIENT: </b><span>ALESSI</span></p>
                                <p><b>YEAR: </b><span>2013</span></p>
                            </div>
                            <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> VIEW PROJECT</a>
                            <div class="heart" >
                                <a><i class="fa fa-heart-o" aria-hidden="true"></i></a><br>
                                <span>+200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column-3">
                <div class="project-content" style="height:250px">
                    <img src="images/home_06.png"  height="100%" >
                    <div class="potter">
                        <h3>POTTER</h3>
                        <div class="detail">
                            <p><b>FOR </b><span>STELTON</span></p>
                            <p>Potter focuses on the functionality and process of preparing tea. a big sieve allows the flavor of to evenly brewed. </p>
                        </div>
                        <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> VIEW PROJECT</a>
                        <div class="heart">
                            <a><i class="fa fa-heart-o" aria-hidden="true"></i></a><br>
                            <span>+200</span>
                        </div>
                    </div>
                </div>
               <div class="project-content" style="height:465px">
                   <img src="images/home_08.png" height="100%">
                   <div class="tabano">
                       <div class="row">
                           <div class="column-45" style="padding-right:10px;">
                               <h3 style="margin-top:0">TABANO</h3>
                               <div class="detail">
                                   <p><b>DESIGNER: </b><span>PATRICIA URQUIOLA</span></p>
                                   <p><b>TYPOLOGY: </b><span>ARMCHAIRS</span></p>
                                   <p><b>CLIENT: </b><span>B&B ITALIA</span></p>
                                   <p><b>YEAR: </b><span>2014</span></p>
                               </div>
                           </div>
                           <div class="column-45" style="margin-top:35px">
                               <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> VIEW PROJECT</a>
                           </div>
                           <div class="column-1 heart" >
                               <a><i class="fa fa-heart-o" aria-hidden="true"></i></a><br>
                               <span>+200</span>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="project-content" style="height:250px">
                   <img src="images/home_13.png" alt="" height="100%x">
                   <div class="fuji">
                       <h3>FIJI</h3>
                       <div class="detail">
                           <p><b>DESIGNER: </b><span>CUNO FROMMHERZ</span></p>
                           <p><b>TYPOLOGY</b><span>ARMCHAIRS</span></p>
                           <p><b>YEAR: </b><span>2012</span></p>
                       </div>
                       <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> VIEW PROJECT</a>
                       <div class="heart">
                           <a><i class="fa fa-heart-o" aria-hidden="true"></i></a><br>
                           <span>+200</span>
                       </div>
                   </div>
               </div>
                <img src="images/home_18.jpg" height="300px">

            </div>

        </div>

    </div>
    <div class="studio">
       <div class="row">
           <div class="column-3">
               <img src="images/home_20.png" alt="">
           </div>
           <div class="column-7">
               <div class="row studio-content award">
                   <div class="column text" >
                       <p><b><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin eros sit amet nulla rhoncus dictum.</i> </b></p>
                       <p><b><i>Nam rhoncus fringilla dolor vitae vulputate. Nullam quis eros lorem. Integer cursus erat a orci congue feugiat. Cras rhoncus mollis libero, id aliquet purus varius sed.</i></b></p>
                       <p>Aenean ullamcorper porta nisl, ac lobortis elit commodo placerat. </p>
                       <p>Vivamus eget laoreet enim. Sed nunc dui, egestas vel diam convallis, faucibus iaculis sapien. Sed ut vulputate nisi. </p>
                       <p>
                           Proin tempor risus tellus. Maecenas sit amet fringilla urna, vel iaculis velit. Sed ac felis et sem mollis dictum sed id orci.</p>
                   </div>
                   <div class="column">
                       <img src="images/home_22.png" alt="">
                       <h4 style="margin-bottom:0">AWARDS</h4>
                       <hr>
                       <div class="row" >
                           <div class="column">
                               <p style="color:black">AENEAN ULLAMCORPER PORTA NISL,<br>AC LOBORTIS ELLIT <br>COMMODO PLACERAT <br>VIVAMUS</p>
                           </div>
                           <div class="column">
                               <p style="color:black">AENEAN ULLAMCORPER PORTA NISL,<br>AC LOBORTIS ELLIT <br>COMMODO PLACERAT <br>VIVAMUS</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        <div class="row studio-content">
            <div class="column-25 text">
                <p><b>STAFF</b></p>
                <p>Sit amet laoreet sapien dictum. Sed eget eros augue. Pellentesque tempor mi sit amet nisi tincidunt tincidunt. Fusce malesuada lectus sed mauris pharetra faucibus. </p>
                <p>Aenean diam tortor, hendrerit ac pulvinar vel, condimentum ac velit. Phasellus eu odio elit. Aenean volutpat mi quam, ut ornare augue tempus ut. </p>
                <p>Morbi sagittis diam mauris, in adipiscing nulla convallis ut.</p>
            </div>
            <div class="column-25">
                <img src="images/home_29.png" alt="">
                <p><b>PHILIPPE STARCK</b> <br>DESIGNER</p>
                <div class="cv">
                    <div class="left">
                        <p>CV <i class="fa fa-arrow-left" aria-hidden="true"></i></p>
                    </div>
                    <div class="right arrow-icon">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-glide-g" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="column-25">
                <img src="images/home_31.png" alt="">
                <p><b>MARIO BELLINI</b><br>DESIGNER</p>
                <div class="cv">
                    <div class="left">
                        <p>CV <i class="fa fa-arrow-left" aria-hidden="true"></i></p>
                    </div>
                    <div class="right arrow-icon">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-glide-g" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="column-25">
                <img src="images/home_26.png" alt="">
                <p><b>PATRICIA URQUIOLA</b><br>DESIGNER</p>
                <div class="cv">
                    <div class="left">
                        <p>CV <i class="fa fa-arrow-left" aria-hidden="true"></i></p>
                    </div>
                    <div class="right arrow-icon">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-glide-g" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="row">
            <div class="column-3">
                <img src="images/home_50.png" height="100%">
            </div>
            <div class="column-7">
                <div class="row new-content">
                    <div class="column">
                       <div class="group4">
                           <h3>MAU ET DUI SED JUSTO PLACERAT TRISTIQUE</h3>
                           <p>11.07.2014</p>
                       </div>
                        <img src="images/home_37.png" alt="">
                        <p>Maecenas imperdiet nisi lorem, sed fermentum tortor pretium eget. Sed mollis lacus quis nunc cursus cursus. Quisque et magna sit amet sapien fermentum scelerisque eu id massa. Mauris ornare massa vel mauris tempus, vitae tempus urna tincidunt</p>
                        <div class="right">
                            <a href="">READ MORE</a>
                        </div>
                    </div>
                    <div class="column">
                        <h3>PROIN VEHICULA NIBH MASSA</h3>
                        <p>11.06.2014</p>
                        <img src="images/home_39.png" alt="">
                        <p>Praesent non mauris nec orci scelerisque faucibus. Nulla ac varius est. Aenean auctor nisl elit, nec sollicitudin lectus iaculis sed. Maecenas aliquam ligula vitae pharetra scelerisque.</p>
                        <div class="right">
                            <a href="">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="row">
            <div class="column">
                <img src="images/home_01.png" height="100%">
            </div>
            <div class="column">
                <div class="row footer-content">
                    <div class="column">
                        <p>90802  CALIFORIA <br>LONG BEACH <br>PO BOX 69789 <br>300 EAST OCEAN <br>BOULEVARD</p>
                        <p>+64 9 345 6758 <br>INFO@DSGN-STUDIO.COM</p>
                    </div>
                    <div class="column">
                        <img src="images/home_48.png" alt="">
                        <div class="social-icon">
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-glide-g" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>&copy; 2014 DSGN. All rights reserved - Defigned by theuncreativelab.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
