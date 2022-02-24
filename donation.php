<?php
include("connection.php");
if(isset($_POST['sub']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $contact=$_POST['mobile'];
  $pan=$_POST['pan'];
  $address=$_POST['address'];
  $ammount=$_POST['ammount'];
  $sql="insert into donation(donation_ammount,first_name,Lasr_name,email,mobile,pan,address)values('$ammount','$fname','$flname','$email','$contact','$pan','$address')";
  $reg=mysqli_query($con,$sql);
    if($reg!=0)
    {
        $msg="Thank You for support!!!";
    }

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link type="text/css" rel="stylesheet" href="css/donation.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="">
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
                    <a class="nav-link text-dark" href="">Sponser</a>
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
                  <li class="nav-item mr-3">
                    <a class="nav-link text-dark" href="volunteer.php">Volunteer</a>
                  </li>
                  <li class="nav-item mr-3 activee">
                      <a class="nav-link text-light" href="donation.php">Donate Us</a>
                  </li>
                </ul>
            </nav>
     </section>
     <section class="direct_link ">
        <div class="container pt-3 pb-3">
          <a href="">Home</a><span class="text-light">&gt;&gt;</span><a href="">Donation</a>
        </div>
      </section>
      <section class="donation">
        <h1 class="text-light pt-4">Donation</h1>
      </section>
      <section class="bg-info">
       <center class="p-5">
        <div class="container">
         <div class="bg-light">
          <div class="p-5">
            <h2 class="text-success">Support Manav Swajan Foundation</h2>
              <p class="text-secondary">At Foundation, we are directing our efforts to support our people and our communities during this difficult time.
                With children out of school for over a year, the effects of the long school closures are seen in children and 
                parents struggling with their well-being and mental health. Added to the uncertainty looming large for school re-opening, 
                our biggest priority is to support our students and ensure they stay connected to the school system.</p><br>
              <p class="text-secondary">As our response to this disaster, we are working on supporting the needs of our student and parent community 
                as a key priority for our teachers, counsellors, social workers and staff. Our Covid Response 2.0 will include-</p>
              <p>
                <ul class="text-secondary">
                  <li>Supporting the needs of our communities with COVID Care essentials, Vaccination awareness & Sensitisation drives.</li>
                  <li>Ensuring safety and emotional wellbeing of our children through counseling and mental health support.</li>
                  <li>Ensuring continuity of learning by investing in Tech infrastructure for the children and the educators.</li>
                  <li>Keeping children as well as our Alumni in schools and colleges.</li>
                </ul>
              </p>
              <br>
              <p class="text-secondary">All funds will be used for the above efforts and to ensure the safety of our frontline people as they cope 
                with the stress and trauma.</p>
              <p class="text-secondary">For offline donations or other donation options and queries please email : <a href="mailto:batham.shivanshu@gmail.com" class="text-dark">batham.shivanshu@gmail.com</a></p>
              <div class="">
                <div class="row">
                  <div class="col-lg-6 col-sm-12">
                    <div>
                      <h3 class="text-center mt-3">Account Details</h3>
                    <div class="account mt-5">
                      <div class="row">
                        <div class="col h5">Account Number:</div>
                        <div class="col">916392153811</div>
                      </div>
                      <div class="row">
                        <div class="col h5">IFSC:</div>
                        <div class="col">PYTM0123456</div>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col h5">Bank Name:</div>
                          <div class="col">Paytm Payment Bank</div>
                        </div>
                        <div class="row">
                          <div class="col h5">Branch Address</div>
                          <div class="col">Noida</div>
                        </div>
                    </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-12">
                    <form class="form" method="POST">
                    <p class="text-danger"><?php if(isset($msg))
              echo $msg;?></p>
                      <div class="row">
                        <a href="" class="col">500</a>
                        <a href="" class="col">1000</a>
                        <a href="" class="col">1500</a>
                      </div>
                      <input type="text" name="ammount" placeholder="Donation Ammount*" class="form-control" required><br>
                      <input type="text" name="fname" placeholder="First Name*" class="form-control" required><br>
                      <input type="text" name="lname" placeholder="Last Name*" class="form-control" required><br>
                      <input type="email" name="email" placeholder="Email*" class="form-control" required><br>
                      <input type="text" name="mobile" placeholder="Mobile*" class="form-control" required><br>
                      <input type="text" name="pan" placeholder="PAN Number" class="form-control"><br>  
                      <textarea rows="4" placeholder="Address*" name="address" class="form-control" required></textarea><br>
                      <input type="submit" name="sub" value="PROCEED" class="form-control"><br>
                    </form>
                  </div>
                </div>
              <p class="text-secondary">If you are a taxpayer in India, all donations to The Manav Swajan Foundation (the registered name for Manav Swajan) are 50% tax-exempt under section 80G 
                of the Income Tax Act.</p>
              <p class="text-secondary">Manav Swajan Foundation provides an Online Payment Gateway through BillDesk to make your donation to us easy, secure and efficient. The BillDesk 
                Payment Gateway uses 128-bit SSL encrypted, highly secure transmission protocols and has been Verisign certified. 
                This ensures that your payment is processed securely.</p>
                </div>
          </div>  
         </div>  
         </div>
       </center>
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
</html>