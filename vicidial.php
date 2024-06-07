<?php
    $api = "63sbQY9xnTu4HKBG3RYw";
    $phone = $_GET['phone_number'];
    
    if(!isset($_GET['phone_number']) || strlen($_GET['phone_number']) != 10){
        echo "<div style='background:#ff9e9e; padding:15px;'>This number is not valid, Hangup the call.</div>";
        return;
    }
    
    $url = "https://api.blacklistalliance.net/standard/api/v3/Lookup/key/".$api."/phone/".$phone."/response/json";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    
    $_results = json_decode($result,true);
    //echo "<pre>";print_r($_results);exit;
    if (is_null($_results)) {
        //Something went wrong
    }else{ 
        $res = $_results['results'];
        if( isset($_results['status']) &&  $_results['status'] == 'success' &&  $_results['message'] == 'Good') {
            echo "<div style='background:#a9ffa9; padding:15px;'>This number is Clean on letigator list.";
        } elseif( isset($_results['status']) &&  $_results['status'] == 'success' &&  $_results['message'] != 'Good') {
            echo "<div style='background:#ff9e9e; padding:15px;'>This number is on letigator list, Hangup the call.";
        }
        
        echo "<div><ul>
        <li>IP: ".$ip_server."</li>
        <li>DNC Feed : ".$_results['code']."</li><li>Type:  ".$_results['carrier']['type']."</li><li>Carrier Name:  ".$_results['carrier']['name']."</li><li>State:  ".$_results['carrier']['state']."</li></ul></div></div>";
    }