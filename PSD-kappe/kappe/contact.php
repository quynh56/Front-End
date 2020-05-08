<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="row">
 <?php include ("header-footer.php")?>
    <div class="column-8 ">
       <div class="contact" id="Contact">
           <img src="../images/contact_01.png">
           <div class="myForm">
               <p class="text">Get in touch with us</p>
               <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
               <hr>
               <form action="">
                   <p class="text">Send us a message</p>
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

    </div>
</div>
</body>
</html>

<!--<div class="contact tabcontent" id="Contacts">
    <img src="../images/contact_01.png">
    <div class="myForm">
        <p class="text">Get in touch with us</p>
        <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
        <hr>
        <form action="">
            <p class="text">Send us a message</p>
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
</div>-->