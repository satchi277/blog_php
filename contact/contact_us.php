<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- adding font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- adding style css -->
  <link rel="stylesheet" href="style/style.css">
  <title>Fancy Form</title>
</head>

<body>

  <section id="fancy-form">
    <div class="container">
      <div class="form-sections">
        <!-- Form left -->
        <div class="Form-left">
          <h1>Get In Touch</h1>
          <div class="line"></div>
          <!--border-bottom line-->
          <p>Contact us for latest news and updates. subscribe our news letter :)</p><br>

          <!--first Heading -->
          <h4>ADDRESS</h4>
          <span>123, Main Street, New York 1001</span>
          <hr><br><br>

          <!--second Heading -->
          <h4>PHONE</h4>
          <span>(+1)123 456 7890</span>
          <hr><br><br>

          <!--third Heading -->
          <h4>EMAIL</h4>
          <span>Jhondoe@gmail.com</span>
          <hr> <br>

          <!-- social media icons -->
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-google"></a>
          <a href="#" class="fa fa-linkedin"></a>
          <a href="#" class="fa fa-youtube"></a>
        </div>

        <!-- form right -->
        <div class="Form-right">
          <h1>Contact Us</h1>
          <div class="line"></div>
          <!-- form -->
          <form action="">
            <h5>NAME</h5>
            <input type="text"><br><br>
            <h5>EMAIL</h5>
            <input type="email"><br><br>
            <h5>PHONE</h5>
            <input type="number"><br><br>
            <h5>YOUR MESSAGE</h5>
            <textarea name="" id="" cols="50" rows="7"></textarea><br>
            <button>Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php
  include('includes/../scripts.php');
  include('includes/../footer.php');
  ?>