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
<div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="first-slide" src="images/banner.jpg" alt="First slide">
               <div class="container">
                  <div class="carousel-caption relative">
                     <h1> <span>We're</span>Medicare Plan Planners</h1>
                     <br> <br>
                     <p>Our Licensed Sales Agents review plans in your area With possible additional benefits and savings that fit your needs</p>
                     <a href="#contact">Get Started</a> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end banner -->

 <!-- about -->
 <div id="about"  class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>Who We Are?</h2>
                     <span></span>
                     <p>Coverage Markets is not affiliated with any government agencies. Coverage Markets has been serving our distinguished clients for the past decade with great customer service and impeccable attitude towards attaining maximum satisfaction from our clients for their policies.Coverage Markets is your go to partner for your Final Expense, Funeral insurance, Life term insurance, and Medicare insurance services. </p>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/about_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
<!-- how we work -->
<div id="mobile"  class="mobile">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="mobile_img">
                     <figure><img src="images/mobile.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>How We Work?</h2>
                     <span></span>
                     <p>You get real answers from real people. We are proud to have helped 7 million people compare their Medicare coverage options.Most of our plans include prescription drug coverage as well. 
                     Many plans may include routine dental, vision and wellness coverage.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end how we work -->

<!-- clients -->
<div class="clients" id="whyUs">
         <div class="container">
            <div class="row">
               <div class="col-md-6 offset-md-3">
                  <div class="titlepage">
                     <h2>Why Choose Us?</h2>
                     <span></span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="clients_box">
                    <h3><strong>We know Medicare providers</strong></h3>
                     <p>Coverage Markets is an insurance broker with over 25 years of experience and has helped millions of customers.</p>
                  </div>
                  <div class="jonu">
                     <img src="images/cross_img1.png" alt="#"/>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="clients_box">
                    <h3><strong>We may have a plan for you</strong></h3>
                     <p>We partner with many trusted carriers to make sure you find a plan that fits just right.</p>
                  </div>
                  <div class="jonu">
                     <img src="images/cross_img2.png" alt="#"/>
                  </div>
               </div>
               
               <div class="col-md-3">
                  <div class="clients_box">
                    <h3><strong>We don't charge</strong></h3>
                     <p>There's no obligation for our services and you'll pay the same price offered by the insurance carriers.</p>
                  </div>
                  <div class="jonu">
                     <img src="images/cross_img4.png" alt="#"/>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="clients_box">
                    <h3><strong>We make shopping easy</strong></h3>
                     <p>You can store your medical information in your own, secure, Customer Center account. This makes future applications just a few clicks away!</p>
                  </div>
                  <div class="jonu">
                     <img src="images/cross_img3.png" alt="#"/>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients -->

 <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Get a Medicare Plan Review</h2>
                  </div>
               </div>
               <div class="col-md-6 offset-md-3">
                  <form id="request" class="main_form" method="post" action="action.php">
                       <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                            <input  name="campaign_id" type="hidden" value="18"/>
                            <input  name="domain_name" type="hidden" value="coveragemarkets.com"/>
                            <br>
                     <div class="row">
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="text" name="phone"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Zip Code" type="text" name="zipcode">                          
                        </div>
                        <div class="col-md-12">
                        <label>
                                        <input type="checkbox" id="leadid_tcpa_disclosure" name="optin_status" required="">
                                        By Checking this box, you represent that you are 18+
                                        years of age and agree to the <a href="privacy-policy.php" style="color:#d8bf36;">Privacy Policy</a>
                                        and <a href="term-conditions.php" style="color:#d8bf36;">Terms &amp; Conditions</a>. By selecting the
                                        above
                                        check
                                        box
                                        "you
                                        agree by your electronic signature that you give express written consent to
                                        receive marketing communications regarding insurance products, and
                                        services including Medicare Supplement, Medicare Advantage and Prescription
                                        Drug
                                        Plans and services by automatic dialing system and pre-recorded calls and
                                        artificial voice messages from Coverage Markets and one or more of its
                                        <a href="marketingpartner.php" style="color:#d8bf36;">marketing partners</a> at the phone number and
                                        e-mail
                                        address provided by you, including
                                        wireless numbers, if applicable, even if you have previously registered the
                                        provided number on the Do Not Call Registry. SMS/MMS and data messaging
                                        rates
                                        may apply.” Your consent is not required to get a quote or purchase. Your
                                        consent can be revoked at any time for any reason.TCPA LeadID's are used with
                                        the
                                        information for
                                        compliance. This is a solicitation for insurance.
                                    </label>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" type="submit" name="submit">Get my no obligatations plan review! </button>
                        </div>
                     </div>
                  </form>
                <script id="LeadiDscript" type="text/javascript">
(function() {
var s = document.createElement('script');
s.id = 'LeadiDscript_campaign';
s.type = 'text/javascript';
s.async = true;
s.src = '//create.lidstatic.com/campaign/c5456e39-bc9b-dc63-a36b-1a6d5c5783dd.js?snippet_version=2';
var LeadiDscript = document.getElementById('LeadiDscript');
LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
})();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=BB474CA6-2952-819D-E2AD-398B328E71AC&lck=c5456e39-bc9b-dc63-a36b-1a6d5c5783dd&snippet_version=2' /></noscript>
               </div>
            </div>
            <br><br>
                  <p>
                    Participating sales agencies do not offer every plan available in your area. Any information we
                    provide is limited to those plans we do offer in your area. Please contact <a href="Medicare.gov" style="color:#d8bf36;">Medicare.gov</a> or <a href="" style="color:#d8bf36;">1–800–MEDICARE</a>
                    to get information on all of your options. <br>
                    Participating sales agencies represent Medicare Advantage [HMO, PPO, PFFS, and PDP]
                    organizations that are contracted with Medicare. Enrollment depends on the plan’s contract
                    renewal.
                </p>
         </div>
      </div>
      <!-- end contact -->
<?php
include('includes/footer.php');
include('includes/footerlinks.php');
?>
</body>
</html>