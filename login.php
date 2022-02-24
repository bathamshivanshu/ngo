<?php
include("connection.php");
if(isset($_POST['login']))
{
  $id=$_POST['userid'];
  $password=$_POST['password'];
  $sql="select user_type from login where email='$id' and password='$password'";
	$res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0)
    {
        while($r1=mysqli_fetch_assoc($res))
        {
            $ut=$r1['user_type'];
            if($ut=='user') 
            {
              echo "user";
            }
            else if($ut=='member')
            {
                echo "member";
            }
            else if($ut=='member')
            {
                echo "member";
            }
            else
            {
              echo "invaild id & password";
            }
        }        
    }  
}
?>
<html>
    <head>
       <link type="text/css" rel="stylesheet" href="css/login.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
</html>
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
              <li class="nav-item mr-3 activee">
                <a class="nav-link text-light" href="login.php">Login</a>
              </li>
              <li class="nav-item mr-3">
                <a class="nav-link text-dark" href="contact.php">Contact</a>
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
      <a href="">Home</a><span class="text-light">&gt;&gt;</span><a href="">Login</a>
    </div>
  </section>  
    <section class="Login">
      <h1 class="text-light pt-4">Login</h1>
    </section>
    <section class="login-pannel">
      <div class="container">
            <div class="container w-50">
              <h2 class="text-center">Welcome To Manav Swajan Foundation</h2>
              <form class="form w-75 container" method="POST">
                    <div class="form-group" method="POST">
                        <label>User id</label>
                        <input type="text"name="userid"class="form-control w-100">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password"name="password"class="form-control w-100">
                    </div>
                    <div class="text-center">
                         <input type="Submit" value="Login" name="login" class="w-75">
                    </div>    
                    <div class="row">
                      <div class="mt-3 col">
                        <a href="" class="text-light">Forget Password</a>
                      </div>
                      <div class="mt-3 ml-5 col">
                      <a href="volunteer.php" class="text-light">Join as Volunteer</a>
                      </div>  
                    </div>
              </form>
              </div>
          </div>
        </div>
      </div>
   </section>
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
</body>