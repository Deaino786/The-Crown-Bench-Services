<!-- head -->
<?php  

$title="Contact Us";

include('includes/head.php');?>  


<!-- navbar -->
<?php  include('includes/navbar.php');?>  
 
     
<!-- Start Header -->
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Contact Us </h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="home.php" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
    <div class="container"> 
            <div class="row overflow-hidden">
                <div class="col-12 col-md-10 offset-md-1 mt-5">
                    <div class="container"> 
        <div class="row overflow-hidden">
             <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".5s">
                  <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                        <span class="fables-iconmap-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span> 
                        <h2 class="font-16 semi-font fables-main-text-color my-3">Address Information</h2>
                        <p class="font-14 fables-forth-text-color">
                        Govt.Graduate College Gojra, Department of Computer Science</p>        
                  </div> 
             </div>
             <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".8s">
                  <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span class="fables-iconphone fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Mail & Phone number</h2>
                    <p class="font-14 fables-forth-text-color text-truncate">someone@gmail.com</p>
                    <p class="font-14 fables-forth-text-color">+92123456789</p>
                 </div> 
             </div>
             <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay="1.1s">
                 <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                        <span class="fables-iconshare-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                        <h2 class="font-16 semi-font fables-main-text-color my-3">Stay In Touch</h2>
                        <ul class="nav fables-contact-social-links"> 
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li> 
                            <li><a href="#" target="_blank"><i class="fab fa-twitter fables-forth-text-color    fa-fw"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                        </ul>
                 </div> 
             </div>
        </div>        
        
    </div> 
                    <div class="mt-0 mb-5 my-md-5"> 
                        <h3 class="font-35 font-weight-bold fables-main-text-color text-center">Contact Us</h3>
                        <p class="mt-3 fables-forth-text-color  text-center">If you have any query or complaint, please feel free to reach out to us by filling the form given below.<br>
                         How May We Help you? </p>

                    </div> 
                    
                    
                </div>
            </div>        
               
        <div class="row mb-4 mb-md-5 overflow-hidden">
                <div class="col-12 col-sm-6 wow fadeInLeft">
                    <form class="fables-contact-form">
                      <div class="form-group"> 
                        <input type="text" class="form-control rounded-0 p-3"  placeholder="Name">   
                      </div>
                      <div class="form-group"> 
                        <input type="email" class="form-control rounded-0 p-3" placeholder="Email">
                      </div>
                      <div class="form-group"> 
                        <input type="text" class="form-control rounded-0 p-3" placeholder="Subject">   
                      </div>
                      <div class="form-group"> 
                          <textarea class="form-control rounded-0 p-3" placeholder="Message" rows="3"></textarea>
                      </div>                       
                      <button type="submit" class="btn fables-second-background-color rounded-0 text-white btn-block p-3">Send</button>
                    </form>
                </div>
                <div class="col-12 col-sm-6 wow fadeInRight">
                    <!-- <a href=" https://www.google.com/maps/place/Govt.+Post+Graduate+College,+For+Boys+Gojra,+Government+Postgraduate,+College+Rd,+Gojra,+Toba+Tek+Singh+District,+Punjab+36120,+Pakistan/@31.150076,72.6867477,15z/data=!4m2!3m1!1s0x3923006b5bdf8fd9:0x367464c14094e949"></a> -->
                   
                    <div class="mb-4 mb-md-5">
       <div id="map" data-lng="31.248848" data-lat="29.966324" data-icon="assets/custom/images/map-marker.png" data-zom="12" style="width:100%;height:420px"></div>
   </div>
                </div>
        </div>        
    </div> 
<!-- /End page content -->
    
<!-- Start Footer-->
<?php  include('includes/footer.php');?>