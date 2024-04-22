<?php
  include('../dbConnection.php');

  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") ||($_REQUEST['rlName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")|| ($_REQUEST['rcPassword'] == "")){
      $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
    } else {
      $sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
      $result = $conn->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
      } else {
        // Assigning User Values to Variable
        $rName =mysqli_real_escape_string($conn, $_REQUEST['rName']);
        $rlName =mysqli_real_escape_string($conn, $_REQUEST['rlName']);
        $rEmail = mysqli_real_escape_string($conn,$_REQUEST['rEmail']);
        $rPassword =mysqli_real_escape_string($conn, $_REQUEST['rPassword']);
        $rcPassword =mysqli_real_escape_string($conn, $_REQUEST['rcPassword']);

        // $rPassword = password_hash($rPassword, PASSWORD_BCRYPT);

        if($rPassword === $rcPassword){
        $sql = "INSERT INTO requesterlogin_tb(r_name,rl_name, r_email, r_password, rc_password) VALUES ('$rName','$rlName','$rEmail', '$rPassword', '$rcPassword')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';}
        }else{
         $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Password does not mached </div>';   
        }
        // if($conn->query($sql) == TRUE){
        //   $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        // } else {
        //   $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        // }
      }
    }
  }
?>
<!-- head -->
<?php  

$title="Register";
include('includes/head.php');?>


<!-- navbar -->
<?php  include('includes/navbar.php');?>
     
<!-- Start Header -->
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Register</h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            <li class="breadcrumb-item"><a href="home.php" class="fables-second-text-color">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content -->   
<div class="container">
     <div class="row my-4 my-lg-5">
          <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3 text-center">
               <img src="assets/custom/images/signin-logo.png" alt="signin" class="img-fluid">
               <p class="font-20 semi-font fables-main-text-color mt-4 mb-5">Create a new account</p>
               <form method="POST">
                  <div class="form-row form-group">
                    <!-- <div class="col-12 col-md-6 mb-4 mb-md-0"> -->
                    <div class="col-12 mb-4 col-md-6 mb-md-0">
                        <div class="input-icon">
                              <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
                              <input type="text" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="First name" name="rName" required>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="input-icon">
                              <span class="fables-iconuser-register fables-input-icon mt-2 font-13"></span>
                              <input type="text" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Last name" name="rlName" >
                        </div>
                    </div>
                  </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                          <span class="fables-iconemail fables-input-icon mt-2 font-13"></span>
                          <input type="email" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input"  placeholder="Email" name="rEmail" required> 
                      </div>
                    
                  </div>
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input type="password" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Password" name="rPassword" required>
                      </div>
                    
                  </div> 
                  <div class="form-group"> 
                      <div class="input-icon">
                         <span class="fables-iconpassword fables-input-icon font-19 mt-1"></span>
                         <input type="password" class="form-control rounded-0 py-3 pl-5 font-13 sign-register-input" placeholder="Repeat Password"name="rcPassword" required>
                      </div>
                    
                  </div> 
                  <button type="submit" class="btn btn-block rounded-0 white-color fables-main-hover-background-color fables-second-background-color font-16 semi-font py-3"name="rSignup">Register Now</button>
                  <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
                  <a href="#" class="fables-forth-text-color font-16 fables-second-hover-color underline mt-3 mb-4 mb-lg-5 d-block">Forgot Password ?</a>
                  <p class="fables-forth-text-color">Already have an account ?  <a href="signin.php" class="font-16 semi-font fables-second-text-color underline fables-main-hover-color ml-2">Login</a></p>
                </form>
          </div>
     </div>

</div>
      
<!-- /End page content -->
    
    
<!-- Start Footer-->
<?php  include('includes/footer.php');?>