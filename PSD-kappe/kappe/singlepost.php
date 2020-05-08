<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="row">
 <?php include ("header-footer.php")?>
    <div class="column-8">
        <div class="row about-us" id="Services">
            <div class="column" style=" border-right:0.5px solid #e2e2e2;">
                <div class="slide-container">
                    <div class="fakeimg">
                        <img src="../images/img01.jpg" alt="">
                    </div>
                    <div class="fakeimg">
                        <img src="../images/img02.jpg" alt="">
                    </div>
                    <div class="fakeimg">
                        <img src="../images/img03.jpg" alt="">
                    </div>
                    <div class="fakeimg">
                        <img src="../images/img04.jpg" alt="">
                    </div>
                </div>
                <div class="myDot">
                    <span class="dots"></span>
                    <span class="dots"></span>
                    <span class="dots"></span>
                    <span class="dots"></span>
                </div>
                <p class="text">Heavy Sand - Create Photography</p>
                <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
                <div class="comment">
                    <p class="text">5 comments</p>
                    <div class="comment-1" >
                        <div class="row">
                            <div class="column-2" style="width:13%">
                                <img src="../images/img01.jpg" alt="">
                            </div>
                            <div class="column-8">
                                <div class="group5">
                                    <p class="text">ShareFreer <span>/ 58 minutes ago</span></p>
                                    <hr>
                                    <p>greate post brainartworks</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-1 cmt-2">
                        <div class="row">
                            <div class="column-2">
                                <img src="../images/img02.jpg" alt="">
                            </div>
                            <div class="column-8">
                                <div class="group5">
                                    <p class="text">Collis Ta'eed <span>/ 42 minutes ago</span></p>
                                    <hr>
                                    <p>yeh i really like it too, very useful!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-1 cmt-3">
                        <div class="row">
                            <div class="column-2">
                                <img src="../images/img03.jpg" alt="">
                            </div>
                            <div class="column-8">
                                <div class="group5">
                                    <p class="text">jremick <span>/ 22 minutes ago</span></p>
                                    <hr>
                                    <p>i found this post very useful too, the comment form
                                        works just perfect, keep it up guys :)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-1 cmt-4">
                        <div class="row">
                            <div class="column-2">
                                <img src="../images/img04.jpg" alt="">
                            </div>
                            <div class="column-8">
                                <div class="group5">
                                    <p class="text">joshjanssen <span>/ 22 minutes ago</span></p>
                                    <hr>
                                    <p>yep, especially when it comes to comment testing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-1 cmt-3">
                        <div class="row">
                            <div class="column-2">
                                <img src="../images/img05.jpg" alt="">
                            </div>
                            <div class="column-8">
                                <div class="group5">
                                    <p class="text">stewboon <span>/ 22 minutes ago</span></p>
                                    <hr>
                                    <p>nice job!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-1 cmt-2">
                        <div class="row">
                            <div class="column-2">
                                <img src="../images/img06.jpg" alt="">
                            </div>
                            <div class="column-8">
                                <div class="group5">
                                    <p class="text">bensmithett <span>/ 42 minutes ago</span></p>
                                    <hr>
                                    <p>coundn't be better :D</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-1">
                        <div class="row">
                            <div class="column-2" style="width:13%">
                                <img src="../images/img07.jpg" alt="">
                            </div>
                            <div class="column-8">
                                <div class="group5">
                                    <p class="text">justinfrench <span>/ 48 minutes ago</span></p>
                                    <hr>
                                    <p>looks very promising</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="leave-cmt">
                    <form action="">
                        <p class="text">Leave a Comment</p>
                        <div class="row">
                            <div class="column">
                                <label><i class="fa fa-user" aria-hidden="true"></i></label>
                                <input type="text" name="Name" placeholder="Name" required>
                                <label><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
                                <input type="text" name="email" placeholder="e-mail" required>
                                <label><i class="fa fa-link" aria-hidden="true"></i></label>
                                <input type="text" placeholder="website" required>
                            </div>
                            <div class="column">
                                <textarea name="message" placeholder="Message" cols="30" required ></textarea>
                                <input type="submit" value="SEND NOW!" class="form-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="column">
                <div class="post-info">
                    <p class="text">Post info</p>
                    <div class="post-icon">
                        <span><i class="fa fa-user" aria-hidden="true"></i></span>
                        <p>premiumlayers</p>
                    </div>
                    <div class="post-icon">
                        <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        <p>138 Likes</p>
                    </div>
                    <div class="post-icon">
                        <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <p>25 Decembar,2013</p>
                    </div>
                    <div class="post-icon">
                        <span><i class="fa fa-comment" aria-hidden="true"></i></span>
                        <p>4 Comments</p>
                    </div>
                </div>
                <div class="tags">
                    <p class="text">Tags</p>
                    <button>web design</button>
                    <button>photography</button>
                    <button>development</button>
                    <button>php</button>
                    <button>ecommerce</button>
                    <button>graphic</button>
                </div>
                <div class="archives">
                    <p class="text">Archives</p>
                    <a href="">December 2013 (24)</a>
                    <a href="">November 2013 (7)</a>
                    <a href="">September 2013 (2)</a>
                    <a href="">March 2013 (22)</a>
                    <a href="">January 2013 (11)</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    var slideIndex =0;
    showSlides();
    function showSlides(){
        var slides, dots, i;
        slides =document.getElementsByClassName("fakeimg");
        dots =document.getElementsByClassName("dots");
        for(i = 0; i < dots.length; i++){
            dots[i].className =dots[i].className.replace(" active","");
        }
        for(i = 0; i < slides.length; i++){
            slides[i].style.display ="none";
        }
        slideIndex++;
        if( slideIndex > slides.length){slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 5000);
    }
</script>
</body>
</html>

<!--<div class=" about-us tabcontent" id="Services">
    <div class="row" >
        <div class="column" style=" border-right:0.5px solid #e2e2e2;">
            <div class="slide-container">
                <div class="fakeimg1">
                    <img src="../images/img01.jpg" alt="">
                </div>
                <div class="fakeimg1">
                    <img src="../images/img02.jpg" alt="">
                </div>
                <div class="fakeimg1">
                    <img src="../images/img03.jpg" alt="">
                </div>
                <div class="fakeimg1">
                    <img src="../images/img04.jpg" alt="">
                </div>
            </div>
            <div class="myDot">
                <span class="dots1"></span>
                <span class="dots1"></span>
                <span class="dots1"></span>
                <span class="dots1"></span>
            </div>
            <p class="text">Heavy Sand - Create Photography</p>
            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
            <div class="comment">
                <p class="text">5 comments</p>
                <div class="comment-1" >
                    <div class="row">
                        <div class="column-2" style="width:13%">
                            <img src="../images/img01.jpg" alt="">
                        </div>
                        <div class="column-8">
                            <div class="group5">
                                <p class="text">ShareFreer <span>/ 58 minutes ago</span></p>
                                <hr>
                                <p>greate post brainartworks</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-1 cmt-2">
                    <div class="row">
                        <div class="column-2">
                            <img src="../images/img02.jpg" alt="">
                        </div>
                        <div class="column-8">
                            <div class="group5">
                                <p class="text">Collis Ta'eed <span>/ 42 minutes ago</span></p>
                                <hr>
                                <p>yeh i really like it too, very useful!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-1 cmt-3">
                    <div class="row">
                        <div class="column-2">
                            <img src="../images/img03.jpg" alt="">
                        </div>
                        <div class="column-8">
                            <div class="group5">
                                <p class="text">jremick <span>/ 22 minutes ago</span></p>
                                <hr>
                                <p>i found this post very useful too, the comment form
                                    works just perfect, keep it up guys :)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-1 cmt-4">
                    <div class="row">
                        <div class="column-2">
                            <img src="../images/img04.jpg" alt="">
                        </div>
                        <div class="column-8">
                            <div class="group5">
                                <p class="text">joshjanssen <span>/ 22 minutes ago</span></p>
                                <hr>
                                <p>yep, especially when it comes to comment testing</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-1 cmt-3">
                    <div class="row">
                        <div class="column-2">
                            <img src="../images/img05.jpg" alt="">
                        </div>
                        <div class="column-8">
                            <div class="group5">
                                <p class="text">stewboon <span>/ 22 minutes ago</span></p>
                                <hr>
                                <p>nice job!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-1 cmt-2">
                    <div class="row">
                        <div class="column-2">
                            <img src="../images/img06.jpg" alt="">
                        </div>
                        <div class="column-8">
                            <div class="group5">
                                <p class="text">bensmithett <span>/ 42 minutes ago</span></p>
                                <hr>
                                <p>coundn't be better :D</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-1">
                    <div class="row">
                        <div class="column-2" style="width:13%">
                            <img src="../images/img07.jpg" alt="">
                        </div>
                        <div class="column-8">
                            <div class="group5">
                                <p class="text">justinfrench <span>/ 48 minutes ago</span></p>
                                <hr>
                                <p>looks very promising</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leave-cmt">
                <form action="">
                    <p class="text">Leave a Comment</p>
                    <div class="row">
                        <div class="column">
                            <label><i class="fa fa-user" aria-hidden="true"></i></label>
                            <input type="text" name="Name" placeholder="Name" required>
                            <label><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
                            <input type="text" name="email" placeholder="e-mail" required>
                            <label><i class="fa fa-link" aria-hidden="true"></i></label>
                            <input type="text" placeholder="website" required>
                        </div>
                        <div class="column">
                            <textarea name="message" placeholder="Message" cols="30" required ></textarea>
                            <input type="submit" value="SEND NOW!" class="form-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="column">
            <div class="post-info">
                <p class="text">Post info</p>
                <div class="post-icon">
                    <span><i class="fa fa-user" aria-hidden="true"></i></span>
                    <p>premiumlayers</p>
                </div>
                <div class="post-icon">
                    <span><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                    <p>138 Likes</p>
                </div>
                <div class="post-icon">
                    <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <p>25 Decembar,2013</p>
                </div>
                <div class="post-icon">
                    <span><i class="fa fa-comment" aria-hidden="true"></i></span>
                    <p>4 Comments</p>
                </div>
            </div>
            <div class="tags">
                <p class="text">Tags</p>
                <button>web design</button>
                <button>photography</button>
                <button>development</button>
                <button>php</button>
                <button>ecommerce</button>
                <button>graphic</button>
            </div>
            <div class="archives">
                <p class="text">Archives</p>
                <a href="">December 2013 (24)</a>
                <a href="">November 2013 (7)</a>
                <a href="">September 2013 (2)</a>
                <a href="">March 2013 (22)</a>
                <a href="">January 2013 (11)</a>
            </div>
        </div>
    </div>
</div>

<script>
    var slidesIndex =0;
    showSlides();
    function showSlides(){
        var slides, dots, i;
        slides =document.getElementsByClassName("fakeimg1");
        dots =document.getElementsByClassName("dots1");
        for(i = 0; i < dots.length; i++){
            dots[i].className =dots[i].className.replace(" active","");
        }
        for(i = 0; i < slides.length; i++){
            slides[i].style.display ="none";
        }
        slidesIndex++;
        if( slidesIndex > slides.length){slidesIndex = 1}
        slides[slidesIndex-1].style.display = "block";
        dots[slidesIndex-1].className += " active";
        setTimeout(showSlides, 5000);
    }
</script>-->