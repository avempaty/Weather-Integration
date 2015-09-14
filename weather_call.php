<?php           
    // Now set some options (most are optional)
    $lat = $_GET['Latitude'];
    $lon = $_GET['Longitude'];
    while($lat == 0 && $lon == 0) {
      echo($lat);
      echo($lon);
    }
    $url = "http://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&APPID=e9713295f04c2a478f6d360858e59cc0";
    
    $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Don't print the result
      curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
      curl_setopt($curl, CURLOPT_TIMEOUT, 10);
      curl_setopt($curl, CURLOPT_FAILONERROR, true);
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // Don't verify SSL connection
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); //         ""           ""
      curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json")); // Send as JSON
      
      
      $return = curl_exec($curl);

      echo ($return);
      // echo "<pre>"; print_r($return); echo "</pre>";exit; 
?>