<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="row">
 <?php include ("header-footer.php")?>
    <div class="column-8">
        <div class="blog" id="Blog">
            <div class="quick-contact">
                <span class="icon-info"><i class="fa fa-info" aria-hidden="true"></i></span>
            </div>
            <div class="row">
                <div class="column-2">
                    <div class="gallery-post">
                        <div class="mySlide">
                            <div class="img-slide">
                                <img src="../images/img02.jpg" alt="">
                            </div>
                            <div class="img-slide">
                                <img src="../images/img01.jpg" alt="">
                            </div>
                            <div class="img-slide">
                                <img src="../images/img03.jpg" alt="">
                            </div>
                            <a class="prev" onclick="plusSlides(-1,0)">&#10094;</a>
                            <a  class="next" onclick="plusSlides(1,0)">&#10095;</a>
                        </div>
                        <div class="text-content">
                            <p class="text">Gallery Post Eample</p>
                            <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is a
                                but a man who works with his hands and his brain and his heart is an artist</p>
                            <hr>
                        </div>
                        <div class="cmmt-calendar">
                            <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                            <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                        </div>
                    </div>
                    <div class="img-post">
                        <img src="../images/img04.jpg" alt="">
                        <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="link-post">
                        <p>Another Post where you can put a link to a specific website</p>
                        <a href="http://www.themeforest.net"><b><i>http://www.themeforest.net</i></b></a>
                    </div>
                </div>
                <div class="column-2">
                    <div class="link-post">
                        <p>Another Post where you can put a link to a specific website</p>
                        <a href="http://www.themeforest.net"><b><i>http://www.themeforest.net</i></b></a>
                    </div>
                    <div class="video-post">
                        <iframe controls autoplay loop class="myvideo" src="https://www.youtube.com/embed/cH4E_t3m3xM"></iframe>
                       <div class="text-content">
                           <p class="text">Self-hosted video post</p>
                           <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                               a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                       </div>
                        <div class="cmmt-calendar">
                            <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                            <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                        </div>
                    </div>
                    <div class="standard-post">
                        <img src="../images/img05.jpg" alt="">
                       <div class="text-content">
                           <p class="text">Standard post format</p>
                           <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                               a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                       </div>
                        <div class="cmmt-calendar">
                            <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                            <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                        </div>
                    </div>
                </div>
                <div class="column-2">
                    <div class="img-post">
                        <img src="../images/img06.jpg" alt="">
                    </div>
                    <div class="standard-post">
                        <img src="../images/img05.jpg" alt="">
                        <div class="text-content">
                            <p class="text">Standard post format</p>
                            <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                                a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                        </div>
                        <div class="cmmt-calendar">
                            <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                            <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                        </div>
                    </div>
                    <div class="aside-post">
                        <p class="text">Aside Post Format</p>
                        <div>
                            <p style="display:inline;">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                            <span class="text-clear" onclick="ReadMore()">..</span><p class="more">, lorem quis bibendum auctor,
                                nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                                a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                                Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per
                                conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit
                                amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra,
                                erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                        </div>

                    </div>
                </div>
                <div class="column-2">
                    <div class="quote-post">
                        <p><i>Logic will get you from A to B. Imagination will take you everywhere.</i></p>
                        <p style="color:#1ab5b3;font-size:20px"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
                        <p style="color:#1ab5b3">Albert Einstein</p>
                    </div>
                    <div class="standard-post">
                        <img src="../images/img05.jpg" alt="">
                        <div class="text-content">
                            <p class="text">Standard post format</p>
                            <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                                a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                        </div>
                        <div class="cmmt-calendar">
                            <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                            <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                        </div>
                    </div>
                    <div class="video-post">
                        <iframe class="myvideo" controls autoplay loop  src="https://www.youtube.com/embed/3kV0k2Z7DgU" frameborder="0"></iframe>
                      <div class="text-content">
                          <p class="text">Self-hosted video post</p>
                          <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                              a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                      </div>
                        <div class="cmmt-calendar">
                            <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                            <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                        </div>
                    </div>
                </div>
                <div class="column-2">
                    <div class="gallery-post">
                        <div class="mySlide">
                            <div class="img-slide2">
                                <img src="../images/img02.jpg" alt="">
                            </div>
                            <div class="img-slide2">
                                <img src="../images/img01.jpg" alt="">
                            </div>
                            <div class="img-slide2">
                                <img src="../images/img03.jpg" alt="">
                            </div>
                            <a  class="prev" onclick="plusSlides(-1,1)">&#10094;</a>
                            <a  class="next" onclick="plusSlides(1,1)">&#10095;</a>
                        </div>
                       <div class="text-content">
                           <p class="text">Gallery Post Eample</p>
                           <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                               a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                       </div>
                        <div class="cmmt-calendar">
                            <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                            <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                        </div>
                    </div>
                    <div class="standard-post">
                        <img src="../images/img05.jpg" alt="">
                        <div class="text-content">
                            <p class="text">Standard post format</p>
                            <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                                a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                        </div>
                        <div class="cmmt-calendar">
                            <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                            <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="older-btn">OLDER POSTS</button>
        </div>
    </div>
</div>



<script>
     var slideIndex =[1,1];
     slideId =["img-slide","img-slide2"];
     showSlides(1,0);
     showSlides(1,1);
     function plusSlides(n,no){
         showSlides(slideIndex[no] +=n,no);
     }
     function showSlides(n,no){
         var slides,i;
         slides =document.getElementsByClassName(slideId[no]);
         if(n > slides.length){slideIndex[no] =1}
         if(n < 1){slideIndex[no] =slides.length;}
         for(i = 0; i <slides.length; i++){
             slides[i].style.display ="none";
         }
         slides[slideIndex[no]-1].style.display ="block";
     }
    function ReadMore(){
         var x= document.getElementsByClassName("more")[0];
         var textclear=document.getElementsByClassName("text-clear")[0];
         x.classList.toggle("show");
         if(x.className == "show"){
             textclear.style.display ="inline-block";
         }
         else if(x.className != "show"){
             textclear.style.display ="none";
         }
    }
</script>
</body>
</html>

<!--<div class="blog tabcontent" id="Blogs">
    <div class="quick-contact">
        <span class="icon-info"><i class="fa fa-info" aria-hidden="true"></i></span>
    </div>
    <div class="row">
        <div class="column-2">
            <div class="gallery-post">
                <div class="mySlide">
                    <div class="img-slide">
                        <img src="../images/img02.jpg" alt="">
                    </div>
                    <div class="img-slide">
                        <img src="../images/img01.jpg" alt="">
                    </div>
                    <div class="img-slide">
                        <img src="../images/img03.jpg" alt="">
                    </div>
                    <a class="prev" onclick="plusSlides(-1,0)">&#10094;</a>
                    <a  class="next" onclick="plusSlides(1,0)">&#10095;</a>
                </div>
                <div class="text-content">
                    <p class="text">Gallery Post Eample</p>
                    <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is a
                        but a man who works with his hands and his brain and his heart is an artist</p>
                    <hr>
                </div>
                <div class="cmmt-calendar">
                    <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                </div>
            </div>
            <div class="img-post">
                <img src="../images/img04.jpg" alt="">
                <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="link-post">
                <p>Another Post where you can put a link to a specific website</p>
                <a href="http://www.themeforest.net"><b><i>http://www.themeforest.net</i></b></a>
            </div>
        </div>
        <div class="column-2">
            <div class="link-post">
                <p>Another Post where you can put a link to a specific website</p>
                <a href="http://www.themeforest.net"><b><i>http://www.themeforest.net</i></b></a>
            </div>
            <div class="video-post">
                <iframe controls autoplay loop class="myvideo" src="https://www.youtube.com/embed/cH4E_t3m3xM"></iframe>
                <div class="text-content">
                    <p class="text">Self-hosted video post</p>
                    <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                        a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                </div>
                <div class="cmmt-calendar">
                    <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                </div>
            </div>
            <div class="standard-post">
                <img src="../images/img05.jpg" alt="">
                <div class="text-content">
                    <p class="text">Standard post format</p>
                    <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                        a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                </div>
                <div class="cmmt-calendar">
                    <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                </div>
            </div>
        </div>
        <div class="column-2">
            <div class="img-post">
                <img src="../images/img06.jpg" alt="">
            </div>
            <div class="standard-post">
                <img src="../images/img05.jpg" alt="">
                <div class="text-content">
                    <p class="text">Standard post format</p>
                    <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                        a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                </div>
                <div class="cmmt-calendar">
                    <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                </div>
            </div>
            <div class="aside-post">
                <p class="text">Aside Post Format</p>
                <div>
                    <p style="display:inline;">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin</p>
                    <span class="text-clear" onclick="ReadMore()">..</span><p class="more">, lorem quis bibendum auctor,
                        nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus
                        a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                        Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per
                        conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit
                        amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra,
                        erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
                </div>

            </div>
        </div>
        <div class="column-2">
            <div class="quote-post">
                <p><i>Logic will get you from A to B. Imagination will take you everywhere.</i></p>
                <p style="color:#1ab5b3;font-size:20px"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
                <p style="color:#1ab5b3">Albert Einstein</p>
            </div>
            <div class="standard-post">
                <img src="../images/img05.jpg" alt="">
                <div class="text-content">
                    <p class="text">Standard post format</p>
                    <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                        a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                </div>
                <div class="cmmt-calendar">
                    <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                </div>
            </div>
            <div class="video-post">
                <iframe class="myvideo" controls autoplay loop  src="https://www.youtube.com/embed/3kV0k2Z7DgU" frameborder="0"></iframe>
                <div class="text-content">
                    <p class="text">Self-hosted video post</p>
                    <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                        a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                </div>
                <div class="cmmt-calendar">
                    <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                </div>
            </div>
        </div>
        <div class="column-2">
            <div class="gallery-post">
                <div class="mySlide">
                    <div class="img-slide2">
                        <img src="../images/img02.jpg" alt="">
                    </div>
                    <div class="img-slide2">
                        <img src="../images/img01.jpg" alt="">
                    </div>
                    <div class="img-slide2">
                        <img src="../images/img03.jpg" alt="">
                    </div>
                    <a  class="prev" onclick="plusSlides(-1,1)">&#10094;</a>
                    <a  class="next" onclick="plusSlides(1,1)">&#10095;</a>
                </div>
                <div class="text-content">
                    <p class="text">Gallery Post Eample</p>
                    <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                        a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                </div>
                <div class="cmmt-calendar">
                    <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                </div>
            </div>
            <div class="standard-post">
                <img src="../images/img05.jpg" alt="">
                <div class="text-content">
                    <p class="text">Standard post format</p>
                    <p>A man who works with his hands is a laborer; a man who works with his hand s and his brain is
                        a craftsman; but a man who works with his hands and his brain and his heart is an artist</p>
                </div>
                <div class="cmmt-calendar">
                    <button class="cmmt"><i class="fa fa-comment" aria-hidden="true"></i> 3 comments</button>
                    <p class="calendar"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 19,2013</p>
                </div>
            </div>
        </div>
    </div>
    <button class="older-btn">OLDER POSTS</button>
</div>
<script>
    var slideIndex =[1,1];
    slideId =["img-slide","img-slide2"];
    showSlides(1,0);
    showSlides(1,1);
    function plusSlides(n,no){
        showSlides(slideIndex[no] +=n,no);
    }
    function showSlides(n,no){
        var slides,i;
        slides =document.getElementsByClassName(slideId[no]);
        if(n > slides.length){slideIndex[no] =1}
        if(n < 1){slideIndex[no] =slides.length;}
        for(i = 0; i <slides.length; i++){
            slides[i].style.display ="none";
        }
        slides[slideIndex[no]-1].style.display ="block";
    }
    function ReadMore(){
        var x= document.getElementsByClassName("more")[0];
        var textclear=document.getElementsByClassName("text-clear")[0];
        x.classList.toggle("show");
        if(x.className == "show"){
            textclear.style.display ="inline-block";
        }
        else if(x.className != "show"){
            textclear.style.display ="none";
        }
    }
</script>-->