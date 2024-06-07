
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
    <meta name="description" content="">
    <meta name="author" content="#">
    <meta name="generator" content="#">
    <title>MEDICARE NOW</title>


    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

   
</head>
<body onload="pageClose()" oncontextmenu="return false">



<main>

    



    

            <form method="POST" id="get-quote" action="" >

                <input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
                <input  name="campaign_id" type="hidden" value="7"/>
                <input  name="domain_name" type="hidden" value="now-medicare.com"/>
<!--<input type="hidden" name="optin_ip" value="<?php //echo $_SERVER['REMOTE_ADDR'];?>">-->
<!--  <input type="hidden" name="optin_timestamp" value="<?php //echo date("Y-m-d\TH:i:s"); ?>">-->
<!--  <input type="hidden" name="optin_url" value="<?php //echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>">-->
                <div class="row form-rowspc">
                    <div class="col">
                        <input type="text" name="name" class="form-control no-copy-paste" placeholder="Full Name">
                    </div>
                </div>
                <div class="row form-rowspc">
                    <div class="col">
                        <input type="tel" name="phone" class="form-control no-copy-paste" placeholder="Phone" required>
                    </div>
                </div>
                <div class="row form-rowspc">
                    <div class="col">
                        <input type="text" name="state" class="form-control no-copy-paste" placeholder="State">
                    </div>
                    <div class="col">
                        <input type="text" name="zipcode" class="form-control no-copy-paste" placeholder="Zipcode">
                    </div>
                </div>
                <div class="row form-rowspc">
                    <label class="form-text"><input type="checkbox" id="leadid_tcpa_disclosure" name="optin_status" required /> &nbsp;&nbsp;&nbsp;
                    By selecting the check box, you represent that you are 18+ years of age and agree to the <a href="privacy-policy.html">Privacy Policy</a>and <a href="terms.html">Terms & Conditions</a>. All TCPA claims will be handled in accordance with binding arbitration as specified in the <a href="terms.html">Terms & Conditions</a>. 
                                    This Agreement to Arbitrate includes, but is not limited to, claims arising under the Telemarketing Consumer Protection Act 47 U.S.C. § 227 or any other telemarketing regulations brought against the website’s customers and/or anyone involved in the initiation or generation of telemarketing calls based on information submitted to the website.
                                    By selecting 
                    the above check box "you agree by your electronic signature that you give express written consent to receive marketing communications regarding insurance products and services by Automated Dialing System or prerecorded voice and artificial voice messages from now-medicare.com and one or more of its <a href="marketingpartner.html">marketing partners</a> at the phone number provided by you, including wireless numbers, if applicable, even if you have previously registered the provided number on the Do Not Call Registry. Carrier call rates may apply.” Your consent is not required to get a quote or purchase. Your consent can be revoked at any time for any reason by contacting us at info@now-medicare.com. Products and services include Medicare Supplement, Medicare Advantage, and Prescription Drug Plans. This is a solicitation for insurance.
                    </label>
                    <br/><br/>
                    <p class="form-rowspc"><b>SPEAK WITH A LICENSED INSURANCE AGENT</b><br>
<input class="btn btn-primary my-2 bol" type="submit" name="submit" value="Get A Plan Review" id="submit"> </p>

                </div>
            </form>

<script id="LeadiDscript" type="text/javascript">
(function() {
var s = document.createElement('script');
s.id = 'LeadiDscript_campaign';
s.type = 'text/javascript';
s.async = true;
s.src = '//create.lidstatic.com/campaign/6fe55fe9-0894-2862-932f-acecb76e3802.js?snippet_version=2';
var LeadiDscript = document.getElementById('LeadiDscript');
LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
})();
</script>
<noscript><img src='//create.leadid.com/noscript.gif?lac=BB474CA6-2952-819D-E2AD-398B328E71AC&lck=6fe55fe9-0894-2862-932f-acecb76e3802&snippet_version=2' /></noscript>
        </div>
        



  


</main>




      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>




<script>
    $(document).ready(function() {
    var ctrlDown = false,
        ctrlKey = 17,
        cmdKey = 91,
        vKey = 86,
        cKey = 67;

    $(document).keydown(function(e) {
        if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = true;
    }).keyup(function(e) {
        if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = false;
    });

    $(".no-copy-paste").keydown(function(e) {
        if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey)) return false;
    });
});
</script>





</body>
</html>
<?php
session_start();

$servername = "localhost";
$username = "u201170674_stellar";
$password = "LoGFC;GLQa:6";
$dbname = "u201170674_stellar_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit'])){
    date_default_timezone_set('US/Eastern');  
    $currenttime = date('Y-m-d h:i:s'); 
    
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $state = $_REQUEST['state'];
    $zipcode = $_REQUEST['zipcode'];
    $leadid = $_REQUEST['universal_leadid'];
    $campaign_id = $_REQUEST['campaign_id'];
    $domain_id = $_REQUEST['domain_name'];
    $created_at = $currenttime;
    
    
 $query = "select * from clientZip where zip = '$zipcode'";  
 $output = mysqli_query($conn, $query);  
//  $row = mysqli_fetch_array($output, MYSQLI_ASSOC);  
//  $count = mysqli_num_rows($output);  
    
    if($output->num_rows == 0) {
$sql = "INSERT INTO leads (lead_unqiue_id,domain_id,name,phone,state,zipcode,created_at,updated_at) VALUE
 ('$leadid','8','$name','$phone','$state','$zipcode','$created_at',' $updated_at')";
    if ($conn->query($sql) === true) {
        echo "<script>
alert('Thankyou for filling out the form. One of our licensed agent will contact you shortly.');
</script>";
        exit;
    } else {
        echo "<script>
alert('Form Unable to Submit');
</script>";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
else {
$sql = "INSERT INTO leads (lead_unqiue_id,domain_id,name,phone,state,zipcode,created_at,updated_at) VALUE
 ('$leadid','8','$name','$phone','$state','$zipcode','$created_at',' $updated_at')";

    if ($conn->query($sql) === true) {
        echo "<script>
alert('Thankyou for filling out the form. One of our licensed agent will contact you shortly. D16');
</script>";
  header("location:index.php");
        exit;
    } else {
        echo "<script>
alert('Form Unable to Submit');
</script>";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
     
  }
 ?>