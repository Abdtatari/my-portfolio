<?php
echo<<<_END
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Me</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="../CSS/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="nav-bar">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="resume.html">Resume</a></li>
        <li><a class="active" href="#">Contact Me</a></li>

      </ul>
    </div>
    <div class="main-container">
      <div class="about-me">
        <h1>Contact me</h1>
      </div>
      <div style="margin:5%;">
        <h1 style="color:white">Have any Question?</h1>
      </br>
        <h1 class="important-text" style="font-size:4rem;">I'm At your service any time</h1>
      </div>
      <table class ="contact-table">
        <tr>
          <td>  <img src="../Resources/phone-icon.png" alt="" class="icon"> </td>
          <td> <img src="../Resources/email-icon.png" alt="" class="icon"> </td>
          <td> <a href="https://www.linkedin.com/in/abdullah-al-tatari/" target="_blank"> <img src="../Resources/linkedin-icon.png" alt="" class="icon"> </a></td>
          <td> <a href="https://github.com/Abdtatari" target="_blank"> <img src="../Resources/github-icon.png" alt="" class="icon"></a> </td>
        </tr>
        <tr>
          <td><h1 style="font-size:2rem;">Call me on</h1></td>
            <td><h1 style="font-size:2rem;">Email</h1></td>
          <td><h1 style="font-size:2rem;">LinkedIn</h1></td>
          <td><h1 style="font-size:2rem;">GitHub</h1></td>

        </tr>
        <tr>
          <td><h1 class="important-text" style="font-size:2rem;">+962 787978720</h1></td>
          <td><h1 class="important-text" style="font-size:2rem;">abd.altatari@gmail.com</h1></td>
          <td><h1 class="important-text" style="font-size:2rem;">Abdullah Al-Tatari</h1></td>
          <td><h1 class="important-text" style="font-size:2rem;">Abdtatari</h1></td>
        </tr>
      </table>
      <br/><br/>      <br/><br/>

      <div class="headers">
        <h1 style="color:white">Send Me an Email</h1>
      </div>
      <br/><br/>
        <h1 class="important-text" style="font-size:2rem;color:white">I'M VERY RESPONSIVE TO MESSAGES &#128512;</h1>
_END;
if (isset($_POST['name'])){
     $to = "abd.altatari@gmail.com"; // this is your Email address
    $from = $_POST['email'];// this is the sender's Email address
    $first_name =$_POST['name'];
    $subject = $_POST['subject'];
    $message = $first_name . " " . " wrote the following:\n". $message2 = $_POST['text'];;

    $headers = "From:" . $from;
    if(mail($to,$subject,$message,$headers)){
        echo("<script>console.log('success');</script>");
        echo('<div><h1 style="color :green;font-size:2rem;">Your Email was sent successfully</h1></div>');
    }
    else{
        echo('<div><h1 style="color :red;font-size:2rem;">Sorry, Your Email could not be send </h1></div>');
    }
    }
echo<<<_END
        <form class="emailForm" action="contact.php" method="post">
          <input name="name" type="text" class="feedback-input" placeholder="Name" required autocomplete="off"/>
          <input name="email" type="text" class="feedback-input" placeholder="Email" required />
          <br/><br/>
          <input name="subject" type="text" class="feedback-input" placeholder="Subject" required autocomplete="off" />
          <textarea name="text" class="feedback-input" placeholder="Message" required></textarea>
          <input type="submit" value="Send"/>
        </form>
    </div>
    <div class="background-image"></div>
  </body>
</html>
_END;
?>