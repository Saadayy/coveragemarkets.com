<!DOCTYPE html>
<html lang="en">
<?php
include('includes/head.php');
?>
  <!-- body -->
  <body class="main-layout">
  <?php
include('includes/navbar.php');
?>

<!-- banner -->
<div id="plan1" class="carousel slide banner_main" data-ride="carousel" >
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/banner.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> CLAIM <span>$0</span>  Health Insurance NOW</h1>
                     <br> <br>
                     <!--<p>Our Licensed Sales Agents review plans in your area With possible additional benefits and savings that fit your needs</p>-->
                     <a  onclick="ShowDiv('plan2');">CLAIM NOW!</a> 
                  </div>
               </div>
            </div>
         </div>
 </div> 

<!-- banner -->
<div id="plan2" class="carousel slide banner_main d-none" data-ride="carousel" >
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/banner.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                  <h1 class="mb-1"> Do you have Medicare Parts A and B? </h1>
                     <br> <br>
                   
                     <button class="btn btn-success p-2" style="width:50%; border-radius:40px; margin-bottom:15px;" onclick="ShowDiv('plan3_yes');">Yes </button>
                     <button class="btn btn-primary p-2" style="width:50%; border-radius:40px;" onclick="ShowDiv('plan3_no');">No </button>
                  </div>
               </div>
            </div>
         </div>
 </div> 

<!-- banner -->
<div id="plan3_yes" class="carousel slide banner_main d-none" data-ride="carousel" >
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/banner.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                  <h1 class="mb-3" style="color:#FF3E41; "> Congratulations !</h1>
                    <h1 class="mb-1"> You qualify for a Medicare Advantage plan review </h1>
                      <a  href="tel:+123456789" style="margin-bottom: 20px;">CALL NOW</a> 

                      <p style="font-size:18px;"><strong> Participating sales agencies represent Medicare Advantage HMO, PPO and PFFS
                                organizations and stand-alone PDP prescription drug plans that are contracted with
                                Medicare. Enrollment depends on the plan’s contract renewal.</strong></p>
                  </div>
               </div>
            </div>
         </div>
 </div> 

<!-- banner -->
<div id="plan3_no" class="carousel slide banner_main d-none" data-ride="carousel" >
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/banner.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                      <h1 class="mb-3" style="color:#FF3E41; "> Unfortunately !</h1>
                    <h1 class="mb-1"> You do not qualify for a Medicare Advantage Plan review. </h1>

                    <p style="font-size:18px;"><strong> Participating sales agencies represent Medicare Advantage HMO, PPO and PFFS
                                organizations and stand-alone PDP prescription drug plans that are contracted with
                                Medicare. Enrollment depends on the plan’s contract renewal.</strong></p>
                  </div>
               </div>
            </div>
         </div>
 </div> 
<?php
 include('includes/footerlinks.php');
?>

<script type="text/javascript" charset="utf-8">
        function ShowDiv(val) {
            $("div#plan1, div#plan2, div#plan3_yes, div#plan3_no").addClass("d-none");
            $("div#" + val).removeClass("d-none");
        }
    </script>
</body>
</html>