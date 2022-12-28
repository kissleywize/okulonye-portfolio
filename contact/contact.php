<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$msg = '';

$fullname = $_POST['fullname'];
$email= $_POST['email'];
$phonenumber= $_POST['phonenumber'];
$subhead= $_POST['subhead'];
$message= $_POST['message'];
if (array_key_exists('email', $_POST)) {
    require 'vendor/autoload.php';
   $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPSecure ="tls";
                $mail->SMTPDebug = 0;
                $mail->SMTPAuth = true;
                $mail->Username = 'kissleywize10@gmail.com';
                $mail->Password = 'kozicqynelavnpjd';
                $mail->setFrom('noreply@vemaloan.com', 'New Contact Notification');
                $mail->addAddress('kissleywize10@gmail.com', 'Web Developer');
    if ($mail->addReplyTo($_POST['email'], $_POST['name']))
     $mail->setFrom($email, $name);
                $mail->addReplyTo($email, $name);
                
        $mail->Subject = 'New Web Dev Contact';
        $mail->IsHTML(true);
        $mail->Body = '<h2>Contact Details!</h2>
                    <p><b>Full Name:</b> '.$fullname.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                     <p><b>Phone Number:</b> '.$phonenumber.'</p>
                     <p><b>Subject:</b> '.$subhead.'</p>
                    <p><b>Message:</b> '.$message.'</p>';
        if (!$mail->send()) {
            $msg = '<span style="color:red;">Sorry, something went wrong. Please try again later.</span>';
            
        } else {
          $msg = '<span style="color:#47de47;">Email sent successfully</span>';
        }
      }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <meta name="title" content="Okulonye Kingsley - Professional web developer">
  <meta name="description" content="Get user-friendly and professional website for your business and personal needs">
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style1.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="../assets/images/my-avatar.png" alt="Okulonye Kingsley" width="80">
        </figure>

        <div class="info-content">
          <a href="../homepage/index.html"><h1 class="name" title="Okulonye Kingsley">Okulonye Kingsley</h1></a>

          <p class="title">Web developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:kissleywize10@gmail.com" class="contact-link">kissleywize10@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Phone</p>

              <a href="tel:+2348108698332" class="contact-link">+2348108698332</a>
            </div>

          </li>

           <!--<li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

           <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="1982-06-23">June 23, 1982</time>
            </div>

          </li>-->

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Asaba, Delta State, Nigeria</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

  <li class="social-item">
            <a href="https://github.com/kissleywize" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.facebook.com/profile.php?id=100070207226746" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://twitter.com/bigman_kings?s=21&t=nF4KGZ7sBc1f1aH0JHaG5w" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://instagram.com/bigman.kings?igshid=YmMyMTA2M2Y=" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <!--<section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d-121.58334177520186!3d38.56165006739519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1647608789441!5m2!1sen!2sbd"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>-->

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <?php if (!empty($msg)) {
    echo "<h2>$msg</h2>";
} ?>
 

          <form method="POST" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="tel" name="phonenumber" class="form-input" placeholder="Phone number" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>

              <input type="text" name="subhead" class="form-input" placeholder="Subject" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit"  data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="../assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

