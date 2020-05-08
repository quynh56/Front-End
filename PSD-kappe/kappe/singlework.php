<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Work</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="row">
    <?php include ("header-footer.php")?>
    <div class="column-8">
        <div class="row about-us" id="Work">
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
                <div class="related-project">
                    <p class="text">Related Project</p>
                    <div class="row related-img">
                        <div class="column-33">
                            <img src="../images/img01.jpg" alt="">
                        </div>
                        <div class="column-33">
                            <img src="../images/img02.jpg" alt="">
                        </div>
                        <div class="column-33">
                            <img src="../images/img03.jpg" alt="">
                        </div>
                    </div>
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
                <div class="project-gallery">
                    <p class="text">Project Gallery</p>
                    <img src="../images/img01.jpg" alt="">
                    <img src="../images/img02.jpg" alt="">
                    <img src="../images/img03.jpg" alt="">
                    <img src="../images/img04.jpg" alt="">
                    <img src="../images/img05.jpg" alt="">
                    <img src="../images/img06.jpg" alt="">
                    <img src="../images/img07.jpg" alt="">
                    <img src="../images/img01.jpg" alt="">
                    <img src="../images/img02.jpg" alt="">
                    <img src="../images/img03.jpg" alt="">
                    <img src="../images/img04.jpg" alt="">
                </div>
                <div class="project-features">
                    <p class="text">Project Features</p>
                    <p>Responsive Layout</p>
                    <p>Font Awesome Icons</p>
                    <p>Clean & Commented Code</p>
                    <p>Pixel perfect Design</p>
                    <p>Highly Customizable</p>
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

<!--<div class=" about-us tabcontent" id="Works">
    <div class="row" >
        <div class="column" style=" border-right:0.5px solid #e2e2e2;">
            <div class="slide-container">
                <div class="fakeimg2">
                    <img src="../images/img01.jpg" alt="">
                </div>
                <div class="fakeimg2">
                    <img src="../images/img02.jpg" alt="">
                </div>
                <div class="fakeimg2">
                    <img src="../images/img03.jpg" alt="">
                </div>
                <div class="fakeimg2">
                    <img src="../images/img04.jpg" alt="">
                </div>
            </div>
            <div class="myDot">
                <span class="dots2"></span>
                <span class="dots2"></span>
                <span class="dots2"></span>
                <span class="dots2"></span>
            </div>
            <p class="text">Heavy Sand - Create Photography</p>
            <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
            <div class="related-project">
                <p class="text">Related Project</p>
                <div class="row related-img">
                    <div class="column-33">
                        <img src="../images/img01.jpg" alt="">
                    </div>
                    <div class="column-33">
                        <img src="../images/img02.jpg" alt="">
                    </div>
                    <div class="column-33">
                        <img src="../images/img03.jpg" alt="">
                    </div>
                </div>
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
            <div class="project-gallery">
                <p class="text">Project Gallery</p>
                <img src="../images/img01.jpg" alt="">
                <img src="../images/img02.jpg" alt="">
                <img src="../images/img03.jpg" alt="">
                <img src="../images/img04.jpg" alt="">
                <img src="../images/img05.jpg" alt="">
                <img src="../images/img06.jpg" alt="">
                <img src="../images/img07.jpg" alt="">
                <img src="../images/img01.jpg" alt="">
                <img src="../images/img02.jpg" alt="">
                <img src="../images/img03.jpg" alt="">
                <img src="../images/img04.jpg" alt="">
            </div>
            <div class="project-features">
                <p class="text">Project Features</p>
                <p>Responsive Layout</p>
                <p>Font Awesome Icons</p>
                <p>Clean & Commented Code</p>
                <p>Pixel perfect Design</p>
                <p>Highly Customizable</p>
            </div>
        </div>
    </div>
</div>

<script>
    var slidedIndex =0;
    showSlides2();
    function showSlides2(){
        var slides2, dots2, i;
        slides2 =document.getElementsByClassName("fakeimg2");
        dots2 =document.getElementsByClassName("dots2");
        for(i = 0; i < dots2.length; i++){
            dots2[i].className =dots2[i].className.replace(" active","");
        }
        for(i = 0; i < slides2.length; i++){
            slides2[i].style.display ="none";
        }
        slidedIndex++;
        if( slidedIndex > slides2.length){slidedIndex = 1}
        slides2[slidedIndex-1].style.display = "block";
        dots2[slidedIndex-1].className += " active";
        setTimeout(showSlides2, 5000);
    }
</script>-->