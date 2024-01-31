<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "include/links.php"?>
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/contact_us.css">
</head>
<body>
<?php include "include/subheader.php"?>
<?php include "include/headder.php"?>
  <section class="page">
    <div class="container">
      <div class="contact">

        <form>
            <h1>CONTACT US FORM</h1>
            <input class="contactinput" type="text" id="name" placeholder="YOUR NAME" name="name" required class="input">
            <input class="contactinput" type="email" id="email" placeholder=" YOUR EMAIL" name="email" required class="input">
            <input class="contactinput" type="text" id="subject" placeholder="SUBJECT" name="subject" required class="input" >
            <textarea class="textarea1" placeholder="YOUR MESSAGE (OPTION)." rows="8" required></textarea>  
            <input class="submit_btn" type="submit" value="submit" class="submit_btn">
        </form>
      </div>
      <div class="get">
        
          <h1>GET IN TOUCH</h1>
          <div class="gfield">
          <h2>ADDRESS:</h2>
          <P>Booth no. 4, Shahnawajpur Manjha, Darshan Nagar, Ayodhya, Uttar Pradesh- 224135</P>
        </div>
        
        
          <div class="gfield">
            <h2>EMAIL:</h2>
            <P>ks955@gmail.com</P>
          </div>
          
          <div class="gfield">
            <h2>WEB:</h2>
            <P>www.theramayana.in</P>
          </div>
          <div class="gfield">
            <h2>PHONE:</h2>
            <P>6386 901 835</P>
          </div>
          <div class="social">
            <a>
            <i class="fa-brands fa-facebook"></i>
          </a>
          <a>
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a>
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <a>
            <i class="fa-brands fa-youtube"></i>
          </a>
          <a>
            <i class="fa-brands fa-twitter"></i>
            </a>
          </div>
        </div>
      </div>
  </section>
  <?php include "include/footer.php"?>
  <script src="https://kit.fontawesome.com/8910e15a62.js" crossorigin="anonymous"></script>
</body>

</html>