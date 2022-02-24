<?php
include("connection.php");
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $sql="insert into feedback(name,email,contact,subject,message)values('$name','$email','$contact','$subject','$message')";
  $reg=mysqli_query($con,$sql);
    if($reg!=0)
    {
        $msg="submited succesfully!!!";
    }

}
?>
<html>
    <head>
       <link type="text/css" rel="stylesheet" href="css/contactus.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
      <div class="container-fluid text-center d-none d-sm-block top">
        <div class="row">

          <div class="col-lg-9 col-sm-12 pt-2 text-light">
                  <span class="fa fa-phone"></span> 
                  <a href="tel: 6392153811" class="text-light"> : 6392153811</a>,<a href="tel: 9795740748" class="text-light">9795740748</a> | 
                  <span class="fa fa-envelope"></span> <a href="mailto:batham.shivanshu@gmail.com" class="text-light"> : batham.shivanshu@gmail.com</a></div>
                <div class="col-lg-3 col-sm-12 text-center">
                   
                      <ul class="nav social-link">
                        <li class="nav-item"><a href="#" class="text-light nav-link"><span class="fa fa-facebook"></span></a></li>
                        <li class="nav-item"><a href="#" class="text-light nav-link"><span class="fa fa-instagram"></span></a></li>
                        <li class="nav-item"><a href="#" class="text-light nav-link"><span class="fa fa-youtube-play"></span></a></li>
                        <li class="nav-item"><a href="#" class="text-light nav-link"><span class="fa fa-twitter"></span></a></li>
                        <li class="nav-item"><a href="#" class="text-light nav-link"><span class="fa fa-linkedin"></span></a></li>
                      </ul>                      
                    </div>
                </div>
              </div>
     <section class="container-fluid nav-top sticky-top" style="background-color: white;">
       <nav class="navbar sticky-top navbar-expand-lg navbar-light">
              <a class="navbar-brand logotext text-success" href="index.html"><img src="images/logo.png" class="img" width="340" height="70"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#id-name" aria-controls="id-name" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="id-name">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                  <li class="nav-item mr-3">
                    <a class="nav-link  text-dark" href="index.php">Home</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="About.php">About</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="">Events</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="">Project</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="login.php">Login</a>
                  </li>
                  <li class="nav-item mr-3 activee">
                    <a class="nav-link text-light" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="login.php">Quize</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="volunteer.php">Volunteer</a>
                  </li>
                  <li class="nav-item mr-3">
                      <a class="nav-link text-dark" href="donation.php">Donate Us</a>
                  </li>
                </ul>
            </nav>
     </section>
            
      <section class="direct_link ">
        <div class="container pt-3 pb-3">
          <a href="">Home</a><span class="text-light">&gt;&gt;</span><a href="">Contact Us</a>
        </div>
      </section>
      <section id="contact-header">
          <h1 class="text-light pt-4">Contact</h1>
      </section>
      <section>
        <div class="row">
          <div class="col-lg-6">
           <div class="contact">
              <h2 class="text-center text-success">Lets talk about everthing!</h2>
              <div class="p-5">
                <p><b>Phone:</b>
                  6306515321<br>
                  <b>Mail:</b>
                  chauarsiaakanksha17@gmail.com<br>
                  <b>Address:</b>
                  vinayakpur<br>
                  <b>Social:</b>
                  Instagram<br></p>
              </div>
           </div>
          </div>  
          <div class="col-lg-6">
            <div class="container w-100">
               <form class="form container p-5" method="POST">
               <p class="text-danger"><?php if(isset($msg))
              echo $msg;?></p>
                  <h3 class="pt-5 text-center text-success">Feel free to ask anything</h3>
                   <div class="form-group text-secondary">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control">
                   </div>
                   <div class="form-group text-secondary">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control">
                   </div>
                   <div class="form-group text-secondary">
                      <label> Contact no</label>
                      <input type="number"name="contact" class="form-control">
                   </div>
                   <div class="form-group text-secondary">
                      <label>Subject</label>
                      <input type="text"name="subject" class="form-control">
                   </div>
                   <div class="form-group text-secondary">
                     <label>Message</label>
                     <textarea class="form-control" name="message"></textarea>
                   </div>
                   <div class="text-center mt-5 form-group">
                    <input type="submit" value="Submit"name="submit" onclick="myFunction()" class="form-control bg-success text-light">
                   </div>
               </form>
           </div>
        </div>
      </section>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446.3539327183502!2d80.28127027164263!3d26.493370894272132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c3816953532e7%3A0x8328c681976af8ef!2sINFORITY%20IT%20SERVICES%20-%20Python%2FJava%2FC%20Sharp%2FPHP%2FDot%20Net%20Training%20Institute%20In%20Kanpur!5e0!3m2!1sen!2sin!4v1643652113294!5m2!1sen!2sin" width="740" height="400" allowfullscreen="" loading="lazy"></iframe>
      <footer class="bg-dark text-light">
        <div class="container">
         <div class="pt-5">
          <div class="row">
            <div class="col-lg-3 col-sm-8">
              <h6>About Us.</h6>
              <p>A non-governmental organization, or simply an NGO, is an organization that is, generally, formed independent from government.
                They are typically nonprofit entities,</p>
            </div>
            <div class="col-lg-5 col-sm-8">
              <div>
              <h6>Site Links</h6>
              
                <ul class="navbar-nav ml-auto">
                  <li>
                    <a class="nav-link text-light" href="home.php">Home</a>
                  </li>
                  <li></li>
                  <li>
                    <a class="nav-link text-light" href="About.php">About</a>
                  </li>
                  <li>
                    <a class="nav-link text-light" href="contact.php">Contact</a>
                  </li>
                  <li>
                    <a class="nav-link text-light" href="login.php">Login</a>
                  </li>
                </ul>
              </div> 
            </div>
            <div class="col-lg-4 col-sm-8">
              <h6>Social Links.</h6>
               <div id="social_link">
                <ol class="social-link">
                  <li><a href="#" class="text-light"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#" class="text-light"><span class="fa fa-instagram"></span></a></li>
                  <li><a href="#" class="text-light"><span class="fa fa-youtube-play"></span></a></li>
                  <li><a href="#" class="text-light"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#" class="text-light"><span class="fa fa-linkedin"></span></a></li>
                </ol> 
               </div>                                             
            </div>
          </div>
          <hr class="bg-light">
          <div class="footer text-light text-center pb-1 pt-1">
            <p>Copyright &copy 2022 Infority IT Service Team.All Right Reserved.Designed by (<a href="https://instagram.com/chaurasiaakanksha?utm_medium=copy_link" class="text-light">Akanksha</a> & <a href="https://instagram.com/shivanshubatham__?utm_medium=copy_link" class="text-light">Shivanshu</a>)</p>
          </div>
         </div>
        </div>
      </footer>
      <!--alert script !-->
      <script>
        function myFunction() {
          alert("Hello! I am an alert box!");
        }
      </script>
    </body>
</html>