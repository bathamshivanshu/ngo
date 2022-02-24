<?php
include("connection.php");
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $Mname=$_POST['Mname'];
  $lname=$_POST['Lname'];
  $email=$_POST['email'];
  $contact=$_POST['phone'];
  $intrestarea=$_POST['interest'];
  $plocation=$_POST['location'];
  $message=$_POST['message'];
  $sql="insert into volunteer(First_name,Middle_name,Last_name,email,Phone,intrest_area,Prefered_location,message)values('$fname','$Mname','$lname','$email','$contact','$intrestarea','$plocation','$message')";
  $reg=mysqli_query($con,$sql);
    if($reg!=0)
    {
      $sql1="insert into login(email,password,user_type)values('$email','pass','user')";
      $reg1=mysqli_query($con,$sql1);
        if($reg1!=0)
        {
          $msg="your request has been submited succesfully!!!";
        }
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link type="text/css" rel="stylesheet" href="css/volunteer.css"/>
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
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="login.php">Quize</a>
                  </li>
                  <li class="nav-item mr-3 activee">
                    <a class="nav-link text-light" href="volunteer.php">Volunteer</a>
                  </li>
                  <li class="nav-item mr-3">
                      <a class="nav-link text-dark" href="donation.php">Donate Us</a>
                  </li>
                </ul>
            </nav>
     </section>
     <section class="direct_link ">
        <div class="container pt-3 pb-3">
          <a href="">Home</a><span class="text-light">&gt;&gt;</span><a href="">Volunteer</a>
        </div>
      </section>
      <section>
        <div class="p-4 text-center">
          <div class="container">
            <p class="text-secondary">YOUR INVESTMENT MAKES A DIFFERENCE!!!</p>
            <h1>Join as Volunteer</h1>
            <p class="text-secondary">A NGO volunteer is an individual who provides their time, knowledge, experience and effort that 
              contributes to the creation of a better world. We continually looking for an individuals who can help others.</p>
          </div>
        </div>
      </section>
      <section class="pt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <img src="images/volunteer.jpg" class="img-fluid mt-4">
              <p class="mt-5 text-secondary">By Volunteering, you not only benefit the lives of the under privileged and their families, but also serve the society at large. So what are you waiting for, 
                join us in any way you feel you can help Manav Utthan Society reach its goal and make a better future for India.</p>
              <h6>
                “Ask nothing; want nothing in return. Give what you have to give; it will come back to you, but do not think of that now.”
              </h6>
              <p class="text-secondary">
                -Prof. Raj Kumar Singh
              </p>  
              </div>
            <div class="col-lg-6 col-sm-12">
              <div class="border p-2 volunteerform">
              <div class="container">
              <p class="text-danger"><?php if(isset($msg))
              echo $msg;?></p>
                <h2 class="text-center text-success">Request To Be Volunteer</h2>
                <form class="form mt-2" method="POST">
                  <div class="row">
                    <div class="col form-group text-secondary">
                      <label>First Name*:</label>
                      <input type="text" name="fname" required class="form-control">
                    </div>
                    <div class="col form-group text-secondary">
                      <label>Middle Name:</label>
                      <input type="text" name="Mname" class="form-control">
                    </div>
                    <div class="col form-group text-secondary">
                      <label>Last Name*:</label>
                      <input type="text" name="Lname" required class="form-control">
                    </div>
                  </div>
                  <div class="form-group text-secondary">
                    <label>Email:</label>
                    <input type="email" name="email" required class="form-control">
                  </div>
                  <div class="form-group text-secondary">
                    <label>Phone:</label>
                    <input type="text" name="phone" required class="form-control">
                  </div>
                  <div class="form-group text-secondary">
                    <label>Specified area of interest:</label>
                    <input type="text" name="interest" class="form-control">
                  </div>
                  <div class="form-group text-secondary">
                    <label>Prefered Location:</label>
                    <input type="text" name="location" class="form-control">
                  </div>
                  <div class="form-group text-secondary">
                    <label>Message:</label>
                    <textarea class="form-control" rows="7" name="message"></textarea>
                  </div>
                  <input type="submit" value="Join" name="submit" class="form-control bg-success text-light"/>
                </form>
              </div>
              </div>
            </div>
        </div>
        </div>    
      </section>
     <footer class="bg-dark text-light mt-5">
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
  </body>
</html>