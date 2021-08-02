<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breshna - ABout Us</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="nav-top">
  <div class="container-fluid">
    
      <nav class="navbar navbar-expand-lg justify-content-between p-0">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Screen Shots</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                  </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                  </li>
              </ul>
        </div>
      </nav>
  </div>
</div>
<div class="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 banner__text--wrap">
                <h1 class="text-white text-center banner__text">
                    Contact Us
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- main content start  -->
<div class="content"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="text-center main--content__subheading">
                Let's Start a Conversation
            </h2>
            </div>
        </div>
        <div class="contact">
            <div class="row">
                <div class=" col-md-6">
                    <div class="contant--information">
                        <div class="contact--information__tagline">
                            <h3>
                                Ask how we can help you:
                            </h3>
                        </div>
                        <div class="contact--information__content--heading">
                            <p>
                                See Our Platform in action
                            </p>
                        </div>
                        <div class="contact--information__content">
                            <p>
                              Request a Personalised Demo, or request a trial  of TUNE's partner marketing platform
                            </p>
                        </div>
                        <div class="contact--information__content--heading">
                            <p>
                                Master Performance Marketing 
                            </p>
                        </div>
                        <div class="contact--information__content">
                            <p>
                              From Breshna courses to industry research  and insights, learn how to grow your business through performance based partnerships
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="contact--form">
                        <form action="{{route('add.contact')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputname1">Full Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputname1"  >
                                
                              </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email:</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
                               </div>
                            <div class="form-group">
                              <label for="exampleInputPhone">Phone Number</label>
                              <input type="number" name="number" class="form-control" id="exampleInputPhone" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone">Comments</label>
                               <textarea class="form-control" name="comment" id="" rows="3"></textarea>
                              </div>
                              <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I'd like to recieve more information about TUNE. I understand and agree to the privacy policy </label>
                              </div>
                            
                            <button type="submit" class="btn btn-primary contact--form__button">Send Message</button>
                          </form>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.1587451473206!2d74.34123911428196!3d31.519799681369758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190458a29709c9%3A0xfab9c2fba18c79b1!2sCentral%20Tower!5e0!3m2!1sen!2s!4v1627893926191!5m2!1sen!2s"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!-- contact information -->
        <div class="row" id="contact-information">
            <div class="col-md-4 text-center">
                <div class="contact--information__icon">
                    <img src="assets/images/phone.png" alt="">
                </div>
                <b>  Mobile: </b>
                    <p>  0300-8482624
                </p>
               
                  <b>  UAN:</b>
                    <p> 111-643-289
                </p>
            </div>
            <div class="col-md-4 text-center">
                <div class="contact--information__icon">
                    <img src="assets/images/location.png" alt="location">
                </div>
                <b>  Address: </b>
                    <p>  3-A Shadman || Jail Road Opposite kinaird College, Lahore, Pakistan
                </p>
               
                  
            </div>
            <div class="col-md-4 text-center">
                <div class="contact--information__icon">
                    <img src="assets/images/mesg.png" alt="">
                </div>
                <b>  Email Address: </b>
                    <p>  info@breshna.com
                </p>
               
                  
            </div>
        </div>
        
        
    </div>
</div>
<!-- main content end  -->
<!-- footer  -->
<footer >
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer__info">
                    <h4>Breshna</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum pariatur voluptatibus delectus qui dolorum optio ad necessitatibus praesentium provident? Velit minus dignissimos omnis quis! Dolores porro harum minus vero aliquam.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer__links">
                    <h4>Useful Links</h4>
                    <ul class="footer__links--list">
                        <li>
                            <a href="#">FAQs</a>
                        </li>
                        <li>
                            <a href="#">Coperate</a>
                        </li>
                        <li>
                            <a href="#">Authorized Sales Partners</a>
                        </li>
                        <li>
                            <a href="#">Career</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer__address">
                    <h4>Site Address</h4>
                    <p>
                  
                            Sheliz Avenue <br>
                            2 Km Off Raiwind Road, Lahore <br>
                            (+92) <br>
                            (042) 111 002 793 <br>
                            <a href="mailto:info@breshna.com">info@breshna.com</a>
                      
                    </p>
                    
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer__address">
                    <h4>Coperate Office</h4>
                    <p>
                  
                            Sheliz Avenue <br>
                            2 Km Off Raiwind Road, Lahore <br>
                            (+92) <br>
                            (042) 111 002 793 <br>
                            <a href="mailto:info@breshna.com">info@breshna.com</a>
                      
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end  -->
<!-- copywrite bar  -->
<div class="copywrite">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 text-right">
            <p class="copywrite__text d-none">
                    <a href="assets/pdf/Terms-of-Use.pdf" target="_blank">Terms</a>
                 and
                 <a href="assets/pdf/User-Agreement.pdf" target="_blank">User Agreement</a>  
            </p>
            <p class="copywrite__text m-0">
                © 2021 All Rights Reserved, Breshna.io 
            </p>
            <p class="copywrite__text d-none">
                <a href="assets/pdf/Privacy-Policy.pdf" target="_blank">Privacy Policy</a>
            </p>
        </div>
        <!-- <div class="col-md-3">
            <div class="copywrite__text">
                
            </div>
        </div> -->
        <div class="col-md-4">
            <div class="copywrite__icons">
                <ul class="m-0">
                    <li>
                        <a href="https://www.facebook.com/GymArmourPK">
                            <img src="assets/images/facebook.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/gymarmour.pk/">
                            <img src="assets/images/Instagram.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<!-- cookies code  -->
<div id="privacy-pop-up" class="eucookie-pop-up">
    
    <div class="content">
        We use cookies to improve user experience, and analyze the traffic. For these reasons, we may share
        your site usage data with our analytics partners. By clicking “Accept Cookies,” you consent to store
        on your device all the technologies described in our Cookie Policy. You can change your cookie
        settings at any time by clicking “Cookie Preferences.”
    </div>
    <div class="dismiss">
        <a id="accept">Accept All</a>
        <a id="exit-popup">Reject All</a>
        
      </div>
      
  </div>

 
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- pop up  -->
    <script>
        jQuery(document).ready(function() {
     
     if(localStorage.getItem('eucookie') != '123'){
       jQuery("#privacy-pop-up").delay(1).fadeIn(1000);
       $('#accept').click(function(){
        localStorage.setItem('eucookie','123');
       });
       
     } 
     
     jQuery('#exit-popup').click(function(e) { 
       jQuery('#privacy-pop-up').fadeOut(1000);
     });
     jQuery('#accept').click(function(e) { 
       jQuery('#privacy-pop-up').fadeOut(1000);
     });
     
   });
    </script>
</body>

</html>